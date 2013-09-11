<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Azhar Pratama
 * Date: 13/08/13
 * Time: 23:38
 * To change this template use File | Settings | File Templates.
 */

$app->get('/cronjob', function () use ($app) {

    $devices = R::findAll('device');

    $cmd = '';
    $serial = new Serial('r');
    $read = $serial->read();

    foreach ($devices as $device) {
        $dev = new Device($device, $read);

        FB::log($dev->command(), '$device->status');

        $cmd .= $dev->command();
    }

    new Serial($cmd);

    echo $cmd;
})->name('cronjob');


class Device
{
    var $device;
    var $ruletimers;
    var $rulesensors;
    var $sensorvalue;
    var $offline_mode = false;

    function __construct($device_model, $serial = null)
    {
        $this->device = $device_model;
        $this->ruletimers = $device_model->sharedRuletimer;
        $this->rulesensors = $device_model->sharedRulesensor;

        if ($serial)
            $this->sensorvalue = explode('|', $serial);
        else
            $this->sensorvalue = explode('|', $this->getSensorValue());
    }

    private function getSensorValue()
    {
        $serial = new Serial("r");
        return $serial->read();
    }

    public function command()
    {
//        FB::log($this->device->status, '$this->device->status');
        switch ($this->device->status) {
            case 3:
                return "a{$this->device->port}";
                break;
            case 1:
                if ($this->activeSensor() and $this->activeTimer())
                    return "a{$this->device->port}";
                else
                    return "b{$this->device->port}";
                break;
            case 2:
                break;
            default:
                return "b{$this->device->port}";
        }
    }

    public function activeSensor()
    {
        $sensor = false;

        foreach ($this->rulesensors as $rule) {
            $sensor = $this->sensorvalue[$rule->port];
//            FB::log($rule->port, '$sensor');
            if ($rule->operator == '<>') {
                $sensor = $this->val_comp($sensor, $rule->operator, $rule->value1) && $this->val_comp($sensor, $rule->operator, $rule->value2);
            } else {
                $sensor = $this->val_comp($sensor, $rule->operator, $rule->value1);

            }
        }

        return $sensor;
    }

    private function val_comp($var1, $op, $var2)
    {
        $var1 = (int)$var1;
        $var2 = (int)$var2;
        switch ($op) {
            case "=":
                return $var1 == $var2;
            case "!=":
                return $var1 != $var2;
            case ">=":
                return $var1 >= $var2;
            case "<=":
                return $var1 <= $var2;
            case ">":
                return $var1 > $var2;
            case "<":
                return $var1 < $var2;
            default:
                return false;
        }
    }

    public function activeTimer()
    {
        $timer = false;

        foreach ($this->ruletimers as $ruletimer) {
            if ($this->activeDay($ruletimer->days)) {
                if ((time() > strtotime($ruletimer->time1)) && (time() < strtotime($ruletimer->time2))) {
                    $timer = true;
                }
            }
        }

        return $timer;
    }

    private function activeDay($days)
    {
        if (strpos($days, date('w')) !== false)
            return true;
        else
            return false;
    }

    public function state()
    {
        switch ($this->device->status) {
            case 3:
                return true;
                break;
            case 1:
                if ($this->activeSensor() or $this->activeTimer())
                    return true;
                else
                    return false;
                break;
            case 2:
                break;
            default:
                return false;
        }
    }
}

class Serial
{
    var $serial;

    function __construct($msg)
    {
        if (!OFFLINE_MODE) {
            $this->serial = new \phpSerial\phpSerial();

            $this->serial->deviceSet("/dev/ttyACM0");
            $this->serial->confBaudRate(115200);
            $this->serial->confFlowControl("none");
            $this->serial->confParity("none");
            $this->serial->confStopBits(1);
            $this->serial->deviceOpen();
            $this->serial->sendMessage($msg);
        }
    }

    public function read()
    {
        sleep(0.5);

        if (OFFLINE_MODE)
            $read = "100|100|100";
        else {
            $read = $this->serial->readPort();
            $this->close();
        }

        return $read;
    }

    public function close()
    {
        $this->serial->deviceClose();
    }
}
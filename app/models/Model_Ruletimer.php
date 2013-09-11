<?php

/**
 * Object model mapping for relational table `guest`
 */
class Model_Ruletimer extends RedBean_SimpleModel
{
    // lifecycle hooks
    public function dispense()
    {
//        $this->modified = time();
    }

    public function update()
    {
        $this->modified = time();
    }

    public function open()
    {
        $days = str_split($this->days, 1);
        $realdays = array();
        foreach ($days as $day) {
            $realdays[] = $this->getDay($day);
        }
        $this->realdays = implode(',', $realdays);
    }

    private function getDay($num)
    {
        $arr = array('Mgg', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab');
        return $arr[$num];
    }
}
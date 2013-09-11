<?php
$app->get('/', function () use ($app) {

    $options = array();
    $options['title'] = 'Welcome';

    $options['devices'] = $devices = R::findAll('device');
    $options['sensors'] = R::findAll('sensor');

    $serial = new Serial('e');
    $e = explode('*', $serial->read());
    $device_value = explode('|', $e[0]);
    $sensor_value = explode('|', $e[1]);

    $options['device_byrule'] = array();

    FB::log($e);

    foreach ($devices as $device) {
        $dev = new Device($device, $e[1]);
        $options['device_byrule'][] = $dev->state();
        FB::log($dev->state());
    }

    FB::log($options['device_byrule']);

    $options['device_value'] = $device_value;
    $options['sensor_value'] = $sensor_value;

    $options['uri'] = $app->request()->getPath();

    $app->render('home.html.twig', $options);
})->name('/');

$app->post('/', function () use ($app) {

    $serial = new Serial($app->request()->post('cmd'));
    $read = $serial->read();
    $app->flash('success', "Serial output: $read");
    $app->redirect($app->urlFor('/'));
});

$app->get('/devices/name', function () use ($app) {

    $options = array();
    $options['title'] = 'Devices Name';

    $devices = R::findAll('device');
    $options['devices'] = $devices;

    $options['uri'] = $app->request()->getPath();

    $app->render('forms/devices.name.form.twig', $options);
})->name('devices_name');

$app->post('/devices/name', function () use ($app) {

    FB::log($app->request()->post());
    $devices = $app->request()->post('device');

    foreach ($devices as $key => $value) {
        $device = R::load('device', $key);
        $device->name = $value;
        R::store($device);
    }

    $app->redirect($app->urlFor('/'));
});

$app->get('/sensors', function () use ($app) {

    $options = array();
    $options['title'] = 'Sensors';

    $sensors = R::findAll('sensor');
    $options['sensors'] = $sensors;

    $options['uri'] = $app->request()->getPath();

    $app->render('forms/sensors.name.form.twig', $options);
})->name('sensors');

$app->post('/sensors', function () use ($app) {

    FB::log($app->request()->post());
    $sensors = $app->request()->post('sensor');
    $calcs = $app->request()->post('calc');

    foreach ($sensors as $key => $value) {
        $device = R::load('sensor', $key);
        $device->name = $value;
        $device->calculation = $calcs[$key];
        R::store($device);
    }

    $app->redirect($app->urlFor('/'));
})->name('sensors_update');


<?php
$app->get('/devices', function () use ($app) {

    $options = array();
    $options['title'] = 'Devices';

    $devices = R::findAll('device');
    $options['devices'] = $devices;
    $options['timers'] = R::findAll('ruletimer', ' ORDER BY id');
    $options['sensors'] = R::findAll('rulesensor', ' ORDER BY id');

    FB::log($devices, '$devices:');

    $options['uri'] = $app->request()->getPath();

    $app->render('devices.html.twig', $options);
})->name('devices');

$app->post('/devices/attach', function () use ($app) {

    $device = R::load('device', $app->request()->post('device_id'));

    $str = substr($rule_id = $app->request()->post('rule_id'), 0, 1);
    if ($str == 't') {
        $id = substr($rule_id, 1, 1);
        $timer = R::load('ruletimer', $id);
        $device->sharedRuletimer[] = $timer;
    } elseif ($str == 's') {
        $id = substr($rule_id, 1, 1);
        $sensor = R::load('rulesensor', $id);
        $device->sharedRulesensor[] = $sensor;
    }

    // start transaction
    R::begin();
    try {
        R::store($device);
        R::commit();
        $app->flash('success', 'Rule berhasil dihubungkan!');
    } catch (Exception $e) {
        R::rollback();
        $app->flash('error', 'Maaf... terjadi kesalahan.');
    }

    $app->redirect($app->urlFor('devices'));
})->name('attach');

$app->get('/devices/detach(/:device)(/:rule)', function ($device = null, $rule = null) use ($app) {

    $device = R::load('device', $device);

    $str = substr($rule_id = $rule, 0, 1);
    if ($str == 't') {
        $id = substr($rule_id, 1, 1);
        unset($device->sharedRuletimer[$id]);
    } elseif ($str == 's') {
        $id = substr($rule_id, 1, 1);
        unset($device->sharedRulesensor[$id]);
    }

    // start transaction
    R::begin();
    try {
        R::store($device);
        R::commit();
        $app->flash('success', 'Rule berhasil dihapus!');
    } catch (Exception $e) {
        R::rollback();
        $app->flash('error', 'Maaf... terjadi kesalahan.');
    }

    $app->redirect($app->urlFor('devices'));
})->name('detach');

$app->get('/devices/state(/:device)(/:state)', function ($device = null, $state = null) use ($app) {

    $device = R::load('device', $device);

    $device->status = $state;

    // start transaction
    R::begin();
    try {
        R::store($device);
        R::commit();
        $app->flash('success', 'Status perangkat berhasil diubah!');
    } catch (Exception $e) {
        R::rollback();
        $app->flash('error', 'Maaf... terjadi kesalahan.');
    }

    $app->redirect($app->urlFor('devices'));
})->name('state');
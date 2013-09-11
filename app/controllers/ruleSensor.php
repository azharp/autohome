<?php
// New/edit rule
$app->get('/rules/sensor(/:id)', function ($id = 0) use ($app) {

    $options = array();

    if ($id) {
        $options['title'] = 'Edit Rule';
        $sensor = R::load('rulesensor', $id);
        $options['sensor'] = $sensor;
    } else {
        $options['title'] = 'New Rule';
    }

    FB::log($options, 'sensor.controller.php:');

    $app->view()->appendData($options);
    $app->render('forms/sensor.form.twig');
})->name('sensor');

// DELETE rule
$app->delete('/rules/sensor/:id', function ($id) use ($app) {

    $sensor = R::load('rulesensor', $id);

    // start transaction
    R::begin();
    try {
        R::trash($sensor);
        $app->flash('success', 'Rule berhasil dihapus!');
    } catch (Exception $e) {
        R::rollback();
        $app->flash('error', 'Maaf... terjadi kesalahan.');
    }
    $app->redirect($app->urlFor('rules'));
});

// Create new rule
$app->post('/rules/sensor', function () use ($app) {

    $rule_sensor = R::dispense('rulesensor');

    FB::log($app->request()->post(), 'rules.controller.php:');

    $id = $app->request()->post('id');

    if (!empty($id)) {
        $rule_sensor->id = $id;
    }

    $sensor = R::load('sensor', $app->request()->post('sensor_id'));
    $rule_sensor->sensor = $sensor;

    $rule_sensor->operator = $app->request()->post('operator');
    $rule_sensor->value1 = $app->request()->post('value1');
    $rule_sensor->value2 = $app->request()->post('value2');
    $rule_sensor->description = $app->request()->post('description');

    // start transaction
    R::begin();
    try {
        R::store($rule_sensor);
        R::commit();
        $app->flash('success', 'Rule berhasil ditambahkan!');
    } catch (Exception $e) {
        R::rollback();
        $app->flash('error', 'Maaf... terjadi kesalahan.');
    }

    $app->redirect($app->urlFor('rules'));
})->name('new_sensor');


$app->get('/sensor', function () use ($app) {

    $sensor = R::dispense('sensor');

    $sensor->name = 'Light Sensor';
    $sensor->calculation = '';

    // start transaction
    R::begin();
    try {
        R::store($sensor);
        R::commit();
        $app->flash('success', 'Rule berhasil ditambahkan!');
    } catch (Exception $e) {
        R::rollback();
        $app->flash('error', 'Maaf... terjadi kesalahan.');
    }
});
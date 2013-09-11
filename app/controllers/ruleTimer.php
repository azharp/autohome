<?php
// New/edit rule
$app->get('/rules/timer(/:id)', function ($id = 0) use ($app) {

    $options = array();

    if ($id) {
        $options['title'] = 'Edit Rule';
        $timer = R::load('ruletimer', $id);
        $options['timer'] = $timer;
    } else {
        $options['title'] = 'New Rule';
    }

    FB::log($options, 'timer.controller.php:');

    $app->render('forms/timer.form.twig', $options);
})->name('timer');

// DELETE rule
$app->delete('/rules/timer/:id', function ($id) use ($app) {

    $timer = R::load('ruletimer', $id);

    // start transaction
    R::begin();
    try {
        R::trash($timer);
        $app->flash('success', 'Rule berhasil dihapus!');
    } catch (Exception $e) {
        R::rollback();
        $app->flash('error', 'Maaf... terjadi kesalahan.');
    }
    $app->redirect($app->urlFor('rules'));
});

// Create new rule
$app->post('/rules/timer', function () use ($app) {

    $timer = R::dispense('ruletimer');

    $id = $app->request()->post('id');
    if (!empty($id))
        $timer->id = $id;
    $days = $app->request()->post('days');
    if (!empty($days))
        $timer->days = implode('', $days);
    $timer->time1 = $app->request()->post('time1');
    $timer->time2 = $app->request()->post('time2');
    $timer->description = $app->request()->post('description');

    // start transaction
    R::begin();
    try {
        R::store($timer);
        R::commit();
        $app->flash('success', 'Rule berhasil ditambahkan!');
    } catch (Exception $e) {
        R::rollback();
        $app->flash('error', 'Maaf... terjadi kesalahan.');
    }

    $app->redirect($app->urlFor('rules'));
})->name('new_timer');
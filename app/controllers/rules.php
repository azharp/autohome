<?php
// List all rules
$app->get('/rules', function () use ($app) {

    $options = array();
    $options['title'] = 'Rules';

    $timers = R::findAll('ruletimer', ' ORDER BY id');
    $sensors = R::findAll('rulesensor', ' ORDER BY id');

    $options['timers'] = $timers;
    $options['sensors'] = $sensors;
    $options['uri'] = $app->request()->getPath();

    $app->render('rules.html.twig', $options);
})->name('rules');
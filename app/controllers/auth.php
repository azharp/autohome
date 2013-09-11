<?php
$app->add(new \Slim\Extras\Middleware\HttpBasicAuth('admin', 'admin', 'AutoHome Admin'));
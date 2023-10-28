<?php

declare(strict_types=1);

use Slim\App;

require __DIR__."/../app/App.php";

/** @var App $app */
global $app;

// Set the base path for the application
$app->setBasePath('/app');

// Serve static files from the 'front' directory
$app->get('/{path:.+}', function ($request, $response, $args) {
    $path = $args['path'];
    $file = __DIR__.'/../app/front/'.$path;

    if (file_exists($file) && is_file($file)) {
        $response = $response->withHeader('Content-Type', mime_content_type($file));
        readfile($file);
        return $response;
    } else {
        return $response->withStatus(404);
    }
});

$app->run();
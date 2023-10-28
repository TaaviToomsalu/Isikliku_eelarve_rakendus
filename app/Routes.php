<?php

declare(strict_types=1);

use Slim\App;

/** @var App $app */
global $app;

$app->get("/", [\App\Controllers\HomeController::class, "home"])->setName("home");


$app->get('/account_form', function ($request, $response) {
    // Fetch any data needed for the form here if necessary

    $templatePath = __DIR__ . '/../templates/account_form.php';

    ob_start(); // Start output buffering
    include($templatePath); // Include the HTML template
    $output = ob_get_clean(); // Get the rendered HTML

    $response->getBody()->write($output);
    return $response;
});


$app->post('/account/add-edit', [\App\Controllers\AccountController::class, 'addEditAccount']);
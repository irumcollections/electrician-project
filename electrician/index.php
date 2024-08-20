<?php

use App\Classes\Session;

require_once __DIR__ . '/vendor/autoload.php';

// Load configuration and routes
$config = include __DIR__ . '/config/config.php';
$routes = include __DIR__ . '/config/routes.php';

// Start the session
Session::start();

// Retrieve the URL parameter
$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : 'home';
$url = filter_var($url, FILTER_SANITIZE_URL);

// Route the request to the appropriate controller and method
if (array_key_exists($url, $routes)) {
    list($controller, $method) = explode('@', $routes[$url]);
    $controller = new $controller();
    $controller->$method();
} else {
    // Handle 404 error
    echo "404 - Page not found";
}

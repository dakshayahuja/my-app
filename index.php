<?php

// Parse the request
$requestUri = trim($_SERVER['REQUEST_URI'], '/');
$requestParts = explode('/', $requestUri);

// Check for the API prefix and version
if ($requestParts[0] == 'api' && $requestParts[1] == 'v1') {
    // Remove the prefix parts
    array_shift($requestParts); // Removes 'api'
    array_shift($requestParts); // Removes 'v1'
    $route = implode('/', $requestParts); // Reconstruct the route without prefix

    switch ($route) {
        case 'admin':
            echo "Admin dashboard";
            break;
        case 'admin/users':
            echo "Admin users list";
            break;
        case 'admin/posts':
            echo "Admin posts management";
            break;
        default:
            http_response_code(404);
            echo "404 Not Found";
            break;
    }
} else {
    // Not an API route
    http_response_code(404);
    echo "404 Not Found";
}



<?php
    $routes = [];
    $base = '/';

    route($base, function () {
        header('Location: '.$base.'home');
    });
    
    route(''.$base.'home', function () {
        include("pages/home-page/home.php");
    });
    
    route(''.$base.'home?redirectedTo=feedbacks', function () {
        include("pages/home-page/home.php");
    });
    
    route(''.$base.'home?redirectedTo=about', function () {
        include("pages/home-page/home.php");
    });
    
    route(''.$base.'home?redirectedTo=contacts', function () {
        include("pages/home-page/home.php");
    });
    
    route(''.$base.'products', function () {
        include("pages/menu/products/products.php");
    });
    
    route('/404', function () {
        echo "Page not found";
    });
    
    function route(string $path, callable $callback) {
        global $routes;
        $routes[$path] = $callback;
    }
    
    run();
    
    function run() {
        global $routes;
        $uri = $_SERVER['REQUEST_URI'];
        $found = false;
        foreach ($routes as $path => $callback) {
            if ($path !== $uri) continue;
    
            $found = true;
            $callback();
        }
    
        if (!$found) {
            $notFoundCallback = $routes['/404'];
            $notFoundCallback();
        }
    }
?>
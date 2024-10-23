<?php

spl_autoload_register(function($name){
//    var_dump($name);
    $name = str_replace('\\','/',$name).'.php';
    require_once($name);
});

// require_once("routes.php");
// // var_dump($routes);
// $route = array_filter($routes,function($item){
//     return $_SERVER['REQUEST_URI']== $item['path'];
// });
// if(empty($route)){
//  echo "404 page note found";
//  die;
// };

// $route = array_values($route);
// $route= $route[0];

// require_once('helpers.php');

// $controller_name = "controllers\\{$route['controller']}Controller";
// $controller = new $controller_name();
// $controller->{$route['action']}();

// spl_autoload_register(function ($name) {
//     $name = str_replace('\\', '/', $name).".php";
//     require_once($name);
// });

require_once("routes.php");
$route = [];
foreach ($routes as $item) {
    $path = str_replace("/", "\/", $item['path']);
    $path = preg_replace("/\{.*?\}/", "(.*?)", $path);
    preg_match('/^'.$path.'$/', $_SERVER['REQUEST_URI'], $matches);
    if(is_array($matches) && count($matches)) {
        $route = $item;
        array_shift($matches);
        $route['matches'] = $matches;
         break;
    }
}

if(empty($route)) {
    echo "404 Page not found";
    die;
}

require_once('helpers.php');

$controller_name = "controllers\\{$route['controller']}Controller";
$controller = new $controller_name();
$controller->{$route['action']}(...$route['matches']);

?>
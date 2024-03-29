<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$route= [
    '/' => 'controllers/index.php',

    // admin_panels_routes
    '/login' => 'controllers/admin_panel/LoginPageController.php',
    '/register/admin' => 'controllers/admin_panel/registerPageController.php',
    "/dashboard" => "controllers/admin_panel/dashboardPage.php",
    '/dashboard/addbook' => 'controllers/admin_panel/AddBookPageController.php',
    '/dashboard/library' => 'controllers/admin_panel/libraryPageController.php', 
    '/logout' => 'controllers/admin_panel/logout.php',
    '/dashboard/add/category' => 'controllers/admin_panel/AddCategoryPageController.php',
    '/dashboard/category' => 'controllers/admin_panel/CategoryPageController.php',
    '/dashboard/delete' => 'controllers/admin_panel/DeleteCategoryPageController.php',

];

function RouteControllers($uri , $route){
    if (array_key_exists($uri,$route)) {
        return require $route[$uri];
    }else{
        abort(Responce::NOT_FOUND);
    }
}
RouteControllers($uri,$route);

<?php
/**
 * php-reagent <https://github.com/tunnckoCore/php-reagent>
 *
 * Copyright (c) 2012-2015 Charlike Mike Reagent, contributors.
 * Released under the MIT license.
 */

class Bootstrap
{
    public function __construct()
    {

        $url = isset($_GET['url']) ? trim($_GET['url']) : '';
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = strtolower($url);

        echo $_GET['url'];
        // $file = 'controllers/' . $url . '.php';
        // if ($url) {
        //     echo $url;
        //     if (file_exists($file)) {
        //         require($file);
        //         $controller = new $url;
        //     } else {
        //         $this->error();
        //         return false;
        //     }
        // } else {
        //     $homeControl = 'controllers/home.php';
        //     if (file_exists($homeControl)) {
        //         require($homeControl);
        //         $home = new Home();
        //         $home->getNews();
        //     } else {
        //         $this->error($homeControl);
        //         return false;
        //     }
        // }

        // if (isset($_GET['method']) && isset($_GET['parameter'])) {
        //     $method = $_GET['method'];
        //     $parameter = $_GET['parameter'];
        //     if (method_exists($controller, $method)) {
        //         $controller->{$method}($parameter);
        //     } else {
        //         $this->error();
        //     }
        // } else {
        //     $method = $_GET['method'];
        //     if (method_exists($controller, $method)) {
        //         $controller->{$method}();
        //     }
        // }
    }

    public function error($file = false)
    {
        require(_ROOT_ . '/libs/Error.php');
        $controller = new Error();

        if ($file === false) {
            exit('No file: ' . $file);
        } else {
            $controller->errors($file);
        }

        return false;
    }
}

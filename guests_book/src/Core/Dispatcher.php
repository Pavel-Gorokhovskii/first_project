<?php

namespace Core;


use Controller\TableController;
use Model\DbTable;
use mysqli;
use View\View;

class Dispatcher
{
    public function __construct()
    {
    }

    public function run()
    {
        include __DIR__ . "/../../config/config.php";
        // ?action=show
        // ?action=add

        $view =  new View();
        $view->setLayout('mainLayout');

        $controller = new TableController(
            new DbTable(
                new mysqli(
                    $config['mysql']['host'],
                    $config['mysql']['user'],
                    $config['mysql']['password'],
                    $config['mysql']['database']
                ),
                $config['mysql']['table']
            ),
            $view
        );

        $action = "action" . $_GET["action"];
        // echo $_SERVER['REQUEST_URI'];
        $controllerData = ['post' => $_POST, 'get' => $_GET];

        if (method_exists($controller, $action)) {
            $controller->{$action}($controllerData);
        } else {
            $controller->actionDefault();
        }
        // $controller->actionShow();
        // $controller->{"actionShow"}();
    }
}

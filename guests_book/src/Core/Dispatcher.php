<?php

namespace Core;

use View\View;

include __DIR__ . "/../../config/config.php";



use Controller\TableController;
use Model\DbTable;

class Dispatcher
{
    public function __construct()
    {
    }

    public function run()
    {
        include __DIR__ . "/../../config/config.php";
        // ?action = show
        $view = new View();
        $view->setLayout('mainLayout');
        $controller = new TableController(
            new DbTable(
                new \mysqli(
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

        if (method_exists($controller, $action)) {
            $controller->{$action}();
        }

        // $controller->actionShow();
        // $controller->{"actionShow"}();
    }
}

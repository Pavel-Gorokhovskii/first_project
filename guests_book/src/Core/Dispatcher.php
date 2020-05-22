<?php

namespace Core;

use Controller\TableController;

class Dispatcher
{
    public function __construct()
    {
    }

    public function run()
    {
        // ?action = show
        // ?action = add
        $controller = new TableController();
        $controller->{"action" . $_GET["action"]}();
        // $controller->actionShow();
        // $controller->{"actionShow"}();
    }

}

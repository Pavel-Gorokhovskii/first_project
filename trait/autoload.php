<?php
spl_autoload_register(function ($class_name) { // вызывает каждый раз когда вызывают ее
    include $class_name . '.php';
});

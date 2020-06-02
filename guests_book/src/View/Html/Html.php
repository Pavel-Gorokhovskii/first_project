<?php

namespace View\Html;

class Html
{
    public static function create(string $className)
    {
        $className = "View\\Html\\$className";
        return new $className();
    }
}

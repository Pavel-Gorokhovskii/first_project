<?php

namespace Controller;

abstract class AbstractController
{
    protected function redirect(string $location)
    {
        header("Location: $location");
    }
}

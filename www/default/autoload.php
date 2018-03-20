<?php

spl_autoload_register(function ($className) {
    $className = str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $className . '.php');

    include $className;
});

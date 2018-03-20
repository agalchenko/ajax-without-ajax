<?php

require __DIR__ . '/autoload.php';

if (!isset($_GET['way'])) {
    throw new InvalidArgumentException('Route parameter "way" doesn\'t exist.');
}

switch ($_GET['way']){
    case '1':
        (new Way1())->run();
        break;
    case '2':
        (new Way2())->run();
        break;
    default:
        throw new InvalidArgumentException(sprintf('Parameter "%s" doesn\'t compatible.', $_GET['way']));
}

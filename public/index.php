<?php

require dirname(__DIR__) . '/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;

$kernel = new Copper\Kernel();
$kernel->handle(Request::createFromGlobals())->send();
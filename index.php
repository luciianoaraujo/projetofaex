<?php

require_once './vendor/autoload.php';

session_start();

use Luciano\Gestao\Routers\Loader;

$loader = new Loader();
$loader->execute();
<?php

require '../vendor/autoload.php';

use HelloWorld\SayHello;
use App\Wcs\Hello;

$hello0 = new SayHello();
echo $hello0-> world();

$hello = new Hello();
echo $hello->talk();
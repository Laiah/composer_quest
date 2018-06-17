<?php
/**
 * Created by PhpStorm.
 * User: laiah
 * Date: 15/06/18
 * Time: 09:30
 */
require __DIR__ . '/../vendor/autoload.php';

use HelloWorld\SayHello;
use App\Wcs\Hello;

$sayHello = new SayHello();
$hello = new Hello();

echo $hello->talk();
echo $sayHello::world();

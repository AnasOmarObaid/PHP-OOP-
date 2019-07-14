<?php
use My_Class2\create; #To Use The nameSpace
use Math\constance as nikName;

# When There More Class And They Have Same Name Withe Deferent File I Use namespace In each File And Use It When I Create Instance

require 'class1.php';
require 'class2.php';
require 'class3.php';
require_once 'math.php';

$create = new My_Class3\create();
$create->say(); 

echo $const = Math\constance\getConstance();

$math = new nikName\X();
echo '<br>';
echo $math->getCal(4);
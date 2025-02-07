<?php

var_dump($a);
var_dump($b);
$a = null;
$b = null;

echo '<br>----------<br>';

var_dump(2 && $b);
var_dump($a);
var_dump($b);
$a = null;
$b = null;

echo '<br>----------<br>';

var_dump(2 && $b = 4);
var_dump($a);
var_dump($b);
$a = null;
$b = null;

echo '<br>----------<br>';

var_dump($a = 2 && $b = 4);
var_dump($a);
var_dump($b);
$a = null;
$b = null;

echo '<br>----------<br>';

var_dump((bool)($a = 2 && $b = 4));
var_dump($a);
var_dump($b);
$a = null;
$b = null;

echo '<br>----------<br>';
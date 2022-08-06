<?php

echo '1 ' . (empty($a) ? 'true' : 'false') . '<br>';

$a[] = 'v';

echo '2 ' . (empty($a) ? 'true' : 'false') . '<br>';
echo '3 ' . $a[0] . '<br>';

$a[] = 'h';
$a[] = 's';

echo '4 ';
var_dump($a);
echo '<br>';

unset($a[1]);

echo '5 ';
var_dump($a);
echo '<br>';

/*
1 true
2 false
3 v
4 array(3) { [0]=> string(1) "v" [1]=> string(1) "h" [2]=> string(1) "s" }
5 array(2) { [0]=> string(1) "v" [2]=> string(1) "s" }
*/
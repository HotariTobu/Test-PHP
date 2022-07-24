<?php

echo '1 ' . (empty($a) ? 'true' : 'false') . '<br>';

$a[] = 'v';

echo '2 ' . (empty($a) ? 'true' : 'false') . '<br>';
echo '3 ' . $a[0] . '<br>';

/*
1 true
2 false
3 v
*/
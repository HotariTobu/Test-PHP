<?php

define('A', 'a');

echo '1 ' . A . '<br>';

define('A', 'あ');

echo '2 ' . A . '<br>';

/*
1 a

Warning: Constant A already defined in duplicate_const.php on line 7
2 a
*/
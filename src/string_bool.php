<?php

echo '1 '; var_dump((bool)'a'); echo '<br>';
echo '1 '; var_dump((bool)''); echo '<br>';

$str = 'a';
echo '2 '; var_dump($str == 'b' || 'c'); echo '<br>';
echo '3 '; var_dump('a' || 'b'); echo '<br>';

/*
1 bool(true)
1 bool(false)
2 bool(true)
3 bool(true)
 */
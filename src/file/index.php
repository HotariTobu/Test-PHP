<?php

echo '1 ';
var_dump(file('empty.txt'));
echo '<br>';

echo '2 ';
var_dump(file('empty.txt', FILE_IGNORE_NEW_LINES));
echo '<br>';

/*
1 array(0) { }
2 array(0) { }
*/
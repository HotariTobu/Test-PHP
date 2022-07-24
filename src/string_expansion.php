<?php

define('SOME_CONST_STRING', 'This is a const string.');

$const_string = 'This is another text';

echo SOME_CONST_STRING . '<br>';
echo $const_string . '<br>';

echo "Include {SOME_CONST_STRING} END<br>";
echo "Include {$const_string} END<br>";

echo 'Include ' . SOME_CONST_STRING . ' END<br>';

/*
This is a const string.
This is another text
Include {SOME_CONST_STRING} END
Include This is another text END
Include This is a const string. END
*/
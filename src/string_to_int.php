<?php

$num = 'a';

// Fatal error: Uncaught TypeError: Unsupported operand types: string & int
// echo $num & 5;

echo var_dump((int)$num);
echo ((int)$num % 5 == 0 ? 'true' : 'false');
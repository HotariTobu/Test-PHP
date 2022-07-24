<?php

$arg1 = $_POST['arg1'];
$arg2 = $_POST['arg2'];

$answer = $arg1 + $arg2;

//echo $answer;
echo json_encode(
    array('answer' => $answer)
);
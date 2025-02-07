<?php
    $i = 1;

    $value = match ($i) {
        0 => "Hoge",
        1 => "Fuga",
        2 => "Piyo",
    };

    echo $value;
?>
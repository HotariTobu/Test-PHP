<?php

declare(ticks=1);

// tick イベントごとにコールされる関数
function tick_handler()
{
    echo "tick_handler() called\n";
}

register_tick_function('tick_handler'); // tick イベント発生

$a = 1; // tick イベント発生

if ($a > 0) {
    $a += 2;   // tick イベント発生
    print($a); // tick イベント発生
}

?>
<?php
    for ($i = 1; $i <= 50; $i++) {
        if ($i % 3 == 0 || strpos($i, '3')) {
            echo "Yeeh! " . $i . "でゅぇぇぇす！";
        }
        else {
            echo $i . "です";
        }

        echo "<br>";
    }
?>

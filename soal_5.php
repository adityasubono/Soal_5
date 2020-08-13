<h3>SOAL 5</h3>
<?php
$ouw = "O";
$ex = "X";
for ($i = 5; $i >= 1; $i--) {
    for ($j = 5; $j > $i; $j--) {
        echo $ouw;
    }
    for ($k = 1; $k < ($i * 2); $k++) {
        echo $ex;
    }
    echo "</br>";
}

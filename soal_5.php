<h3>SOAL 5</h3>
<?php
echo "<pre>";
$stars = "X";
for($a=1; $a<=5; $a++)
{
    $spaces = "O";
    for($b = (6 - $a); $b>1; $b--)
    {
        $spaces .= "O";
    }
    echo $spaces . $stars . $spaces;
    $stars .= "XX";
    echo "<br/>";
}

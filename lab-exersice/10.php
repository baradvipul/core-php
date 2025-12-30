<?php
for($i=1;$i<=10;$i++) echo $i." ";

$sum=0;
for($i=0;$i<=30;$i++) $sum+=$i;
echo "<br>Sum = $sum";

for($i=1;$i<=8;$i++){
    for($j=1;$j<=8;$j++)
        echo (($i+$j)%2==0)?"⬜":"⬛";
    echo "<br>";
}
?>

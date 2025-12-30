<?php
$a=10; $b=5; $op='+';
if($op=='+') echo $a+$b;
elseif($op=='-') echo $a-$b;
elseif($op=='*') echo $a*$b;
elseif($op=='/') echo $a/$b;

echo "<br>";
$day = date('l');
if($day=='Sunday') echo "Happy Sunday";
else echo "Today is $day";
?>

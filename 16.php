<?php
function calc($a,$b,$op){
    if($op=='+') return $a+$b;
}

echo calc(5,5,'+');

function fact($n){
    if($n<=1) return 1;
    return $n*fact($n-1);
}
echo "<br>Factorial: ".fact(5);

$str="PHP";
$rev="";
for($i=strlen($str)-1;$i>=0;$i--) $rev.=$str[$i];
echo "<br>$rev";
?>
<a href="file.pdf" download>Download File</a>

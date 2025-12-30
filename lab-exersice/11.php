<?php
$arr = [1,2,3,4,5];
print_r($arr);

$even=0; $odd=0;
foreach($arr as $v){
    if($v%2==0) $even++; else $odd++;
}
echo "<br>Even: $even Odd: $odd";

$user = ['name'=>'Vipul','email'=>'vipul@gmail.com','age'=>20];
foreach($user as $k=>$v) echo "$k : $v <br>";

$nums=[0,1,0,3,0,5];
$result=array_merge(array_filter($nums),array_fill(0,count(array_keys($nums,0)),0));
print_r($result);
?>

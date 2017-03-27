<?php

echo "<h3>Задание 1</h3>";
$a=$_POST["a"];
$b=$_POST["b"];
$d=$_POST["d"];

echo "X="; echo $x=($a+$b)/(2*$a-$b)*($a+$d);
echo"<br>";
echo "L="; echo $l=(sqrt(abs($x-$a)))*cos(M_PI/6);

echo "<h3>Задание 2</h3>";
$q=$_POST["q"];
$w=$_POST["w"];
$e=$_POST["e"];
echo "a="; echo $a=(max($q,$w,$e)/2);
echo"<br>";
echo "b="; echo $b=(pow(min($q,$w,$e),3)-(($q+$w)/3));

echo "<h3>Задание 3</h3>";
$cars=$_POST["cars"];
foreach($cars as $value){
echo $value . " ";
}
//$cars=array("AA777A","BB000B","CC555C");
$chk= false;
for($i=0; $i<count($cars); $i++){
for($j=$i+1; $j<count($cars); $j++){
if($cars[$i] == $cars[$j]){
echo "<br>Одинаковый номер это:"; echo $cars[$i];
$chk = true;
}}}
if ($chk != true) {
echo "Нет одинаковых номеров машин";
}

echo "<h3>Задание 4</h3>";
$l=array(1,2,3,4,5,6,7,8);
$n=array(5,6,7,8,9);
$m=array(7,8,9,10,11);
for($i=0; $i<count($l); $i++){
$sum1 += pow($l[$i],2);
}
for($j=0; $j<4; $j++){
$sum2 += ($n[$j]+$m[$j]);
}
echo "Z="; echo $Z = $sum1/($l[0]*$sum2);

echo "<h3>Задание 6</h3>";
//$g=array(1,2,3,4,5,6,7,8,9,10);
$g=$_POST["g"];
$s = 0;
for($i=0;$i < 5;$i++) 
	$s+=$g[$i];
echo "Сумма="; echo $s; echo"<br>";
echo "Максимальное число="; echo $maxi=(max($g)); echo"<br>";
$g[array_search($maxi,$g)]=$s;
echo "замена=";
foreach($g as $value){
echo $value . " ";
}
?>
<?php
echo "<h3>Задание 1</h3>";
$tov= array( "Еда", "Конфеты", "Игрушки", "Электроника" );
$tov[]="Часы";
$tov[]="Автомобиль";
$elements = count ($tov);
echo "<h3>количество:</h3>";
echo $elements;
echo "<h3>массив:</h3>";
sort($tov);
for ($i = 0; $i < count($tov); $i++)
echo $tov[$i].'<br>'; 

echo "<h3>Задание 2</h3>";
  $j=0;
  $a=5;
        $word = "ABCDEF";
        for($i = 0;  $i <= 6; $i++){           
         echo $word1.'<br />';
		 $word1 = substr($word,$a);
		 $a--;
        }
     ?>   

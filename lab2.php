<?php
echo "<h3>������� 1</h3>";
$tov= array( "���", "�������", "�������", "�����������" );
$tov[]="����";
$tov[]="����������";
$elements = count ($tov);
echo "<h3>����������:</h3>";
echo $elements;
echo "<h3>������:</h3>";
sort($tov);
for ($i = 0; $i < count($tov); $i++)
echo $tov[$i].'<br>'; 

echo "<h3>������� 2</h3>";
  $j=0;
  $a=5;
        $word = "ABCDEF";
        for($i = 0;  $i <= 6; $i++){           
         echo $word1.'<br />';
		 $word1 = substr($word,$a);
		 $a--;
        }
     ?>   

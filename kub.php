<?php
	
$deposit = 10000;
$protsent = 0.1;
$age = 16;

for ($year = 1; $year <= 100; $year ++)

{
  $deposit = ($deposit * $protsent) +  $deposit;
  $time = $age + $year;
  
  echo "Через {$year} лет, на счету {$deposit}<br>"; 
 	

if ($deposit > 1000000)
  {
  echo "Возраст некто  {$time} <br> ";

if ($time > 100)
{
  echo "он не дожил";
}
if ($time < 100){
  echo "он  дожил";}
   break;
  }
//1. как сделать округление чисел? функция echo floor($)?
} 
	?>
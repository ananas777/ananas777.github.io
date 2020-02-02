 <?php
function writegreeting_func()
{
$hourAssign = date("H");
if (($hourAssign >= 0) && ($hourAssign < 5))
print("Доброй ночи!");
elseif (($hourAssign >= 10) && ($hourAssign < 18))
print("Добрый день!");
elseif (($hourAssign >= 18) && ($hourAssign < 24))
print("Добрый вечер!");
else
print("Доброе утро!");
}//writegreeting_func()
 ?>
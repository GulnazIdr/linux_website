 <?php
 echo mktime(10, 25, 0, 3, 15, 2025); /*1*/ 
 echo time() - mktime(8, 5, 59, 10, 2, 1990); /*2*/
 echo date('Y.m.d H:i:s', time()); /*3*/
 echo date('Y.m.d', mktime(0, 0, 0, 1, 9, 2026)); /*4*/
   echo  date('d-m-Y', strtotime("2023.12.20")); /*8*/
<?php
$date1 = date_create("2000-02-02");
echo  date_format($date1, "l"). "<br>"; /*5*/

$week = [
    0 => "Воскресенье",
    1 => "Понедельник",
    2 => "Вторник",
    3 => "Среда",
    4 => "Четверг",
    5 => "Пятница",
    6 => "Суббота"
];

$currentDayNum = date("w"); 
echo $week[$currentDayNum] . "<br>"; 

$date2 = date_create("2016-06-12");
echo date_format($date2, "l"). "<br>";

$birthday = date_create("2007-11-28 "); 
echo date_format($birthday, "l") . "<br>";/*6*/

$date = date_create("2000-02-03");

date_modify($date, "2 days");
echo "+2 дня: " . date_format($date, "Y-m-d") . "<br>";

date_modify($date, "1 month");
echo "+1 месяц: " . date_format($date, "Y-m-d") . "<br>";

date_modify($date, "3 days 1 month");
echo "+3 дня: " . date_format($date, "Y-m-d") . "<br>";

date_modify($date, "1 year");
echo "+1 год: " . date_format($date, "Y-m-d") . "<br>";

date_modify($date, "-3 days");
echo "-3 дня: " . date_format($date, "Y-m-d") . "<br>"; /*9*/

$now = date_create();
$newYear = date_create(date("Y") . "-12-31");

$daysLeft = date_diff($now, $newYear);
echo "до нг осталось: " . $daysLeft->days . " дней". "<br>"; /*10*/

?>

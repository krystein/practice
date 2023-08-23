<?php
//practical
//printf
echo "<pre>"; // Enables viewing of the spaces
printf("my name is %s. i am %d years old, which is %x in hexadecimal <br>", 'Simon', 33, 33);
printf("<span style='color:#%x%x%x'>Hello</span>", 65, 127, 245);
//precision setting
echo "<pre>"; // Enables viewing of the spaces
// Pad to 15 spaces
printf("The result is $%15f\n", 123.42 / 12);
// Pad to 15 spaces, fill with zeros
printf("The result is $%015f\n", 123.42 / 12);
// Pad to 15 spaces, 2 decimal places precision
printf("The result is $%15.2f\n", 123.42 / 12);
// Pad to 15 spaces, 2 decimal places precision, fill with zeros
printf("The result is $%015.2f\n", 123.42 / 12);
// Pad to 15 spaces, 2 decimal places precision, fill with # symbol
printf("The result is $%'#15.2f\n", 123.42 / 12);
//string padding
echo "<pre>";
$h = 'Rasmus';
printf("[%12s]\n", $h);
//using sprintf
$out = sprintf("the result is: $%.2f <br>", 123.42 / 12);
echo $out;
//date and time functions
echo time() . "<br>";
echo mktime(0, 0, 0, 1, 1, 2000) . "<br>";
echo date("l F jS, Y - g:ia", time()) . "<br>";
//date constants
echo date(DATE_ATOM) . "<br>";
echo date(DATE_COOKIE) . "<br>";
echo date(DATE_RSS) . "<br>";
echo date(DATE_W3C) . "<br>";
//CHECKDATE
$month = 7; // September (only has 30 days)
$day = 1; // 31st
$year = 2023; // 2018
if (checkdate($month, $day, $year))
    echo "Date is valid";
else
    echo "Date is invalid";
?>
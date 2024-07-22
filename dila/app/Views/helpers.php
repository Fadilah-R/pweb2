<?php
// helper('date');
// //fungsinya
// now($timezone = null[]);
// //panggil
// echo now();
echo "</br>Helper Number : "; 
helper('number');
echo number_to_roman (24);

echo "</br>Helper Text Random Text : "; 
helper('text');
echo random_string('alnum', 20);

echo "</br>Helper Date : "; 
helper('date');
$currentDate = getCurrentDate();
echo $currentDate;


?>
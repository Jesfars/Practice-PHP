<?php

$mark1=63;
$mark2=75;
$mark3=59;

$total=$mark1+$mark2+$mark3;
echo "The total mark=".$total;
echo"<br>";

$percentage=($total/300)*100;
echo "The percentage mark=".$percentage;
echo" <br>";

if($percentage>90)
echo" the grade is A+";
else if($percentage>60)
echo "the grade is A";
else if($percentage>50)
echo "the grade is pass";
else
echo "wrong input";

?>
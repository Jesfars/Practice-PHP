<?php


$file=fopen("sample.txt","a");
echo"file created";
echo "<br>"; 

fwrite($file,"how are you ?\n");

echo"write Successfully";

fclose($file);

?>
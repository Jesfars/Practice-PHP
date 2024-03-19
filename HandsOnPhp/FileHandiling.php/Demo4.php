<?php
  
/* Store the path of source file */
$filePath = "C:\Users\ASUS\OneDrive\Desktop\zoro";
  
/* Store the path of destination file */
$destinationFilePath = 'copyImages/test.jpeg';
  
/* Move File from images to copyImages folder */
if( !rename($filePath, $destinationFilePath) ) {  
    echo "File can't be moved!";  
}  
else {  
    echo "File has been moved!";  
} 
  
?>
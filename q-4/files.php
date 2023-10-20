<?php 
$dir = "C:\Users\chpan\Downloads\mongosh-1.10.5-win32-x64\mongosh-1.10.5-win32-x64"; // Replace with the path to your directory
$files = scandir($dir);

foreach($files as $file) {
    if($file !== '.' && $file !== '..') {
        echo $file . "<br>";
    }
}
?>
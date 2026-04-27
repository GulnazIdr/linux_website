<?php
$file = fopen("text.txt", "w");
echo fwrite($file, "hello everybody"); /*1*/

rename ("text.txt", "mir.txt") or die ("Ошибка переименования файла");

$dir = "folder";
  	 
if(!file_exists($dir)){
	if(mkdir($dir)){
		echo "Directory created successfully.";
	}else{
		echo "ERROR: Directory could not be created.";
	}
}else{
	echo "ERROR: Directory already exists.";
}

if (!rename("mir.txt", "folder/mir.txt"))
    echo "Ошибка перемещения файла";
else echo "Файл перемещен";

$newfile = "world.txt"
if (!copy($file, $newfile)) {
	echo "не удалось скопировать $file...n";
}
else
{
	echo "Содержимое mir.txt скопировано в файл world.txt";
}

$size = filesize($file); 
echo "размер файла в байтах  world.txt" . $size; . " </br> в килобайтах " . $size / 1024 . " </br> в мегабайтах " . $size / 1048576;

$world = "world.txt";
if (!unlink($world)) { 
    echo ("$world cannot be deleted due to an error"); 
} 
else { 
    echo ("$world has been deleted"); 
} 

$mir = "folder/mir.txt";
$world = "folder/world.txt";
if (file_exists($mir)) {
    echo "The file '$mir' exists.";
} else {
    echo "The file '$file' does not exist.";
}
if (file_exists($world)) {
    echo "The file '$world' exists.";
} else {
    echo "The file '$world' does not exist.";
}


fclose($file);
?>


<?php
$file = fopen("text.txt", "w");
echo fwrite($file, "hello everybody"); /*1*/
?>

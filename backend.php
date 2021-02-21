<?php 
error_reporting(0);
file_put_contents("databas.json", "");
//$data1 .='"data:"';
$text1 .="{\n".'"data":[' ."\n";
$textend .='{}]}';
$fh = fopen('databas.json', "a") or die("Could not open log file.");
fwrite($fh, $text1) or die("Could not write file!");
foreach($data as $key=> $value) 
$text .= '{'.'"name":'.'"'.$key.'"'.",\n".'"confirmed":'.$value[$days_count]['confirmed'].",\n".'"recovered":'.$value[$days_count]['recovered'].",\n".'"deaths":'.$value[$days_count]['deaths']."\n },\n";;
fwrite($fh, $text) or die("Could not write file!");
fwrite($fh, $textend) or die("Could not write file!");
fclose($fh);
?>
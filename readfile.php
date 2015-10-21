<?php 

/* Read File */
// readfile('simple.txt');

/* Better approach */
$myfile = fopen("simple.txt", "r") or die("Unable to open file!");

/* Read file based on specified file name, and maximum number of bytes to read */
//echo fread($myfile,filesize("simple.txt"));

/* Read Single Line */
// echo fgets($myfile);
// while(!feof($myfile)) { // while not end of file, echo out each line we read
//   echo fgets($myfile) . "<br>";
// }

/* Read Single Character */
while(!feof($myfile)) {
  echo fgetc($myfile) . '-';
}

/* Close file */
// fclose($myfile);
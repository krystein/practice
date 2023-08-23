<?php
// if (file_exists("textfile.txt")) {
//     echo "file exits";
// } else {
//     echo "doesnt exist";
// }

$fh = fopen("testfile.txt", 'r') or die("Failed to create file");
// $text = <<<_END
// Line 1
// Line 2
// Line 3
// _END;
// fwrite($fh, $text) or die("Could not write to file");
// fclose($fh);
//echo "File 'testfile.txt' written successfully";
$line = fgets($fh);
fclose($fh);
echo $line;

?>
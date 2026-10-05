<?php

$file = "example.txt";

/* a. Check File */

if (file_exists($file)) {
    echo "File exists.<br>";
} else {
    echo "File does not exist.<br>";
}


/* b. Open File */

$handle = fopen($file, "w");


/* c. Write File */

fwrite($handle, "Hello, this is PHP file handling.");

echo "Data written successfully.<br>";


/* d. Close File */

fclose($handle);

echo "File closed successfully.<br>";


/* e. Read File */

$content = file_get_contents($file);

echo "File Content: " . $content . "<br>";


/* f. Check Permissions */

echo "File Permissions: " . substr(sprintf('%o', fileperms($file)), -4);

echo "<br>";


/* g. Change Permissions */

chmod($file, 0644);

echo "File permissions changed successfully.<br>";


/* h. Remove File */

// unlink($file);

?>
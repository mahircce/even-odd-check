<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php LAB</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$filename = 'numbers.txt';
$file = fopen($filename, 'w');
if ($file) {
    for ($i = 1; $i <= 10; $i++) {
        fwrite($file, $i . PHP_EOL); 
    }
    fclose($file); 
    echo "Numbers written to '$filename'.\n";
} else {
    die("Unable to open the file for writing.");
}

$file = fopen($filename, 'r');
if ($file) {
    while (($line = fgets($file)) !== false) {
        $number = (int)trim($line); 
        if ($number % 2 == 0) {
            echo "$number is even.\n";
        } else {
            echo "$number is odd.\n";
        }
    }
    fclose($file); 
} else {
    die("Unable to open the file for reading.");
}
?>

     
</body>
</html>

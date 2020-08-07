<?php 

/**
 * Read line by line
 * Read starts from 2000-th symbol
 */

$handler = fopen('../test-file', 'r');

fseek($handler, 2000);

while(!feof($handler)) {
    $line = fgets($handler);
    echo $line . '<br>';
}

fclose($handler);
<?php

/**
 * Write line to the file
 * If file does't exist it creates file
 */

$handle = fopen('write-file', 'a+'); // Writes from the end of file
// $handle = fopen('write-file', 'w'); // Writes from the begin of file

fwrite($handle, 'Test write to file' . PHP_EOL);
fclose($handle);
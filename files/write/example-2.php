<?php

/**
 * Write line to the file
 * If file does't exist it creates file
 */

$handle = fopen('write-file-2', 'w'); // Writes from the begin of file

fputs($handle, 'Test write to file' . PHP_EOL, 10); // only 10 bytes
fclose($handle);
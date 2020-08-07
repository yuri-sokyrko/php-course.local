<?php

/**
 * Read whole file and count sybols
 */

$handler = fopen('../test-file', 'r');
$i = 0;

ob_start();
$symbols = fpassthru($handler);
$file_content = ob_get_clean();

fclose($handler);

echo nl2br($file_content);
echo "<br><br>Was read: {$symbols} symbols";
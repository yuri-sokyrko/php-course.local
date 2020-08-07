<?php

/**
 * Read first 1000 bytes
 */
$handler = fopen('../test-file', 'r');

echo nl2br(fread($handler, 1000));
fclose($handler);
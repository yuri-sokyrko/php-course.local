<?php

/**
 * Write file content on the screen
 */
$text = file_get_contents('../test-file');

echo nl2br($text);
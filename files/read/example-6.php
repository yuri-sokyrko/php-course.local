<?php 

/**
 * Read line by line in other way
 */

$data_file = file('../test-file');

foreach($data_file as $line) {
    echo $line . '<br>';
}
<?php

echo '<pre>';
print_r($_POST);
echo '</pre>';

if(isset($_POST['hobbies'])) {
    foreach($_POST['hobbies'] as $hobby) {
        echo $hobby . '<br>';
    }
} else {
    echo 'No hobbies was set :(';
}

return;
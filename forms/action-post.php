<?php

echo '<pre>';
print_r($_POST);
echo '</pre>';

if(isset($_POST['hobbies'])) {
    echo '<h3>Hobbies:</h3>';

    foreach($_POST['hobbies'] as $hobby) {
        echo $hobby . '<br>';
    }
} else {
    echo 'No hobbies was set :(';
}

return;
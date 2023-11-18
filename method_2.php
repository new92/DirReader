<?php

$items = scandir($_POST['dir']);
for ($i = 0; $i < count($items); $i++) {
    echo $items[$i];
    if(is_file($items[$i])) {
        echo ' | file<br>';
    } else {
        echo ' | directory<br>';
    }
}

?>

<?php

$files = scandir($_POST['dir']);
for ($i = 0; $i < count($files); $i++) {
    echo $files[$i] . '<br>';
}

?>

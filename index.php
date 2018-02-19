<?php
$filename = 'index.php';
if (file_exists($filename)) {
    echo "The project was last modified: " . date ("F d Y H:i:s.", filemtime($filename));
}

echo "Latest version <br>";
echo date('l');
echo "";
?>
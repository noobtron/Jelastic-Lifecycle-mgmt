<?php
$filename = 'index.php';
if (file_exists($filename)) {
    echo "The project was last modified: " . date("d.m.Y H:i:s.", filemtime($filename));
}

echo "Today = " . date("d.m.Y H:i:s.");
echo date('l');
echo "";
?>
<?php
$filename = 'index.php';
if (file_exists($filename)) {
    echo "The project was last modified: " . date("d.m.Y H:i:s.", filemtime($filename)) . "\n";
}
echo "Today = " . date("d.m.Y H:i:s.");
?>
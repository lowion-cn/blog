<?php
    $txt = "http://45.154.13.78:5986/night";
    header('Content-type: image/jpeg');
    echo file_get_contents($txt);
?>
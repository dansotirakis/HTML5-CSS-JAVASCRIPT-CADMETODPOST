<?php
$file = "result.txt";
file_put_contents($file, print_r($_POST, true), FILE_APPEND);
?>
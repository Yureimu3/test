<?php
$data = $_GET["pass"];
$file = 'login.txt';
file_put_contents($file, $data);
echo "Data saved successfully!";
?>

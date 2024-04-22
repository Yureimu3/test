<?php
$data = $_POST['data'];
$file = 'login.txt';
file_put_contents($file, $data);
echo "Data saved successfully!";
?>

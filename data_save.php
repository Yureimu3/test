<?php
$data = $_POST['data'];
$file = 'data.txt';
file_put_contents($file, $data);
echo "Data saved successfully!";
?>

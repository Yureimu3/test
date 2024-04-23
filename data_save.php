<?php
$data = $_GET["UserName"];
$file = 'login.txt';
fwrite( $file, $data);     //ファイルへの書込み
fclose( $file );
?>

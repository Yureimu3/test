<?php
$data = $_GET["username"];
$file = fopen(“login.txt”, “a” );
fwrite( $file, $data);     //ファイルへの書込み
fclose( $file );
?>

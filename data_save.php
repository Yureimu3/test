<?php
$data = $_POST["username"];
$file = fopen(“login.txt”, “a” );
fwrite( $file, $data);     //ファイルへの書込み
fclose( $file );
?>

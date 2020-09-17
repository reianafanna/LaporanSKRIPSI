<?php
include_once 'koneksi.php';

echo $a = trim($_POST['nm']);
echo $b = $_POST['em'];
echo $c = $_POST['jud'];
echo $d = $_POST['isi'];





echo $sql = "INSERT INTO cont(nm,em,jud,isi,tm) VALUES('$a','$b','$c','$d',now())";

if ($conn->query($sql)) {
	
	header('location:index.php?status=ok');
}




?>

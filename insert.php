<?php

require_once "db.php";
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
echo '<pre>';
print_r($_POST);
echo '</pre>';

$sql = "INSERT INTO mahasiswa (nim,nama,alamat) VALUES ('".$nim."','".$nama."','".$alamat."')";

if ($conn->query($sql)){
    echo "Data sudah masuk ya";
}else{
    die("Error : " . $conn->connect_error);
}
die;
?>
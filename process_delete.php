<?php
require_once "db.php";


$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

$sql = "UPDATE mahasiswa SET nama = '".$nama."', alamat= '".$alamat."'
    WHERE nim = '"$nim "'";

if($conn ->query($sql)){
    echo "Data sudah berhasil di delete";
    header('Location: index.php');
}

else
{
    die("Error: " . $conn->error);

}


exit;

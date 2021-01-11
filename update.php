<?php
require_once 'db.php';

$nim= $_GET['nim'];

$sql = "SELECT * FROM mahasiswa WHERE nim = '".$nim."'";
$hasil = $conn->query($sql);

$mhs = $hasil->fetch_object();

?>


<form action="insert.php" method="POST">
        nim : <input type="text" name="nim" value="<?=$mhs->nim;?>">
        nama : <input type="text" name="nama" value="<?=$mhs->nama;?>">
        alamat : <input type="text" name="alamat" value="<?=$mhs->alamat;?>">
        <button type="SUbmit">Simpan</button>
</form>
<?php
require_once "db.php";

$sql = "SELECT * FROM mahasiswa";

$hasil = $conn->query($sql);

?>

<table border='5' cell-padding='1' cell-spacing='1'>
  <tr>
    <th>Nomor</th>>
    <th>NIM</th>>
    <th>Nama</th>>
    <th>Alamat</th>
    <th>Aksi</th>
  </tr>
  
  <?php
        $nomor=0;
        while($row=$hasil->fetch_assoc())
        {
                $nomor++;
        
  ?>

  <tr>
    <td></td><?=$nomor;?></td>
    <td></td><?=$row['nim'];?></td>
    <td></td><?=$row['nama'];?></td>
    <td></td><?=$row['alamat'];?></td>
    <td>
        <a href="update.php?nim<?=$row['nim'];?>">Update</a>
        <a href="process_delete.php">Hapus</a>
    </td>
  </tr>
  <?php
        }
  ?>
</table>
<br>
<button><a href="create.php">Tambah Data</a></button>

   
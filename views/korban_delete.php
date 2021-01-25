<?php
//membuat query untuk hapus data
$sql="DELETE FROM kecelakaan WHERE id ='".$_GET['id']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=".$_GET['pageb']."&actions=".$_GET['actionsb']."');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=peminjaman&actions=tampil');</scripr>";
}


<?php
$id = $_GET['id'];
if(mysqli_query($koneksi,"DELETE FROM  barang_keluar WHERE  id_barang_keluar=$id")){
    echo "<scrip>aler('sudah dihapus!')</scrip>";
    header('Location:?menu=barang-keluar');
}else{
    mysqli_error($koneksi);
}
?>
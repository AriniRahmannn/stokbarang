<?php
$id = $_GET['id'];
if(mysqli_query($koneksi,"DELETE FROM  barang_masuk WHERE  id_barang_masuk=$id")){
    echo "<scrip>aler('sudah dihapus!')</scrip>";
    header('Location: ?menu=barang-masuk');
}else{
    mysqli_error($koneksi);
}
?>
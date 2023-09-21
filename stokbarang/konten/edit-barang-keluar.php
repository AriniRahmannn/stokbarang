<?php
    //menangkap id dari halaman barangKlist
  $tangkap = $_GET['id'];
  //query ke tabel tblkeluar dengan where
  $query = mysqli_query($koneksi,"SELECT * FROM barang_keluar where id_barang_keluar = $tangkap");
  //fetch data 
  $row = mysqli_fetch_assoc($query);
  //jika tombol simpan di tekan 
  if(isset($_POST["submit"])){
    //menampung
 
    $a = htmlspecialchars($_POST["nama_barang"]);
    // $b = htmlspecialchars($_POST["tanggal"]);
    $c = htmlspecialchars($_POST["penerima"]);
    $d = htmlspecialchars($_POST["jumlah"]);
   
    //sql
    $sql = "UPDATE barang_keluar SET
    nama_barang = '$a',
    penerima = '$c',
    Jumlah = $d
    where id_barang_keluar = $tangkap";

    // print $sql;

    mysqli_query($koneksi,$sql);

    if(mysqli_affected_rows($koneksi)){
      echo"
      <script>
      alert ('data berhasil diupdate');
      document.location.href = '?menu=barang-keluar';
      </script>";
  }
    
    else{
      mysqli_error($koneksi);
    }
  
}
?>

<div class="box">
<div class="menu">
<form action="" method="POST">
 </div>
 <div class="form-control">
  <label for="nama_barang">Nama barang</label>
  <input type="text" name="nama_barang" id="nm" value="<?= $row['nama_barang']?>">
 </div>
 <!-- <div class="form-control">
  <label for="tanggal">Tanggal</label>
  <textarea name="tanggal" id="" cols="30" rows="10"placeholder="pesan"><?=$row['tanggal']?></textarea>
 </div> -->
 <div class="form-control">
  <label for="penerima">Penerima</label>
  <input type="text" name="penerima" id="nm" value="<?=$row['penerima']?>">
 </div>
 <div class="form-control">
  <label for="Jumlah">Jumlah</label>
  <input type="text" name="jumlah" id="nm" value="<?=$row['Jumlah']?>">
 </div>
   <button style="background-color:  #800080;" name="submit">Simpan</button>
    <a href="?menu=barang-keluar">Batal</a> 
  </td>
</form>  
</div>
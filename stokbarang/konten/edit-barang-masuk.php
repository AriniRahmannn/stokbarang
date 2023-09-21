<?php
    //menangkap id dari halaman brngmasukklist
  $tangkap = $_GET['id'];
  //koneksi
  $koneksi = mysqli_connect("localhost","root","","barang");
  //query ke tabel tblmasuk dengan where
  $query = mysqli_query($koneksi,"SELECT * FROM barang_masuk where id_barang_masuk = $tangkap");
  //fetch data 
  $row = mysqli_fetch_assoc($query);
  //jika tombol simpan di tekan 
  if(isset($_POST["submit"])){
    //menampung
    $a = htmlspecialchars($_POST["id_barang"]);
    $b = htmlspecialchars($_POST["keterangan"]);
    $c = htmlspecialchars($_POST["tanggal"]);
    $d = htmlspecialchars($_POST["Jumlah"]);
   
    //sql
    $sql = " UPDATE barang_masuk SET
    
    id_barang = '$a',
    keterangan = '$b',
    tanggal = '$c',
    Jumlah = '$d'
    where id_barang_masuk = $tangkap";

    // print $sql;

    mysqli_query($koneksi,$sql);

    if(mysqli_affected_rows($koneksi)){
      echo"
      <script>
      alert ('data berhasil diupdate');
      document.location.href = '?menu=barang-masuk';
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
  <label for="id_barang">id_barang</label>
  <input type="text" name="id_barang"id="nm" value="<?= $row['id_barang']?>">
 </div>
 <div class="form-control">
  <label for="keterangan">Keterangan</label>
  <input type="text" name="keterangan" id="nm" value="<?=$row['keterangan']?>">
 </div>
 <div class="form-control">
  <label for="tanggal">tanggal</label>
  <textarea name="tanggal" id="" cols="30" rows="10"placeholder="pesan"><?=$row['tanggal']?></textarea>
 </div>
 <div class="form-control">
  <label for="Jumlah">Jumlah</label>
  <input type="text" name="Jumlah" id="nm" value="<?=$row['Jumlah']?>">
 </div>
   <button style="background-color:  #800080;" name="submit">Simpan</button>
    <a href="?menu=barang-masuk">Batal</a> 
  </td>
</form>  
</div>


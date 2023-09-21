<?php
  if(isset($_POST["submit"])){
    $a = $_POST["id_barang"];
    $b = $_POST["nama_barang"];
    $c = $_POST["tanggal"];
    $d = $_POST["penerima"];
    $e = $_POST["Jumlah"];
  

    $sql = " INSERT INTO barang_keluar VALUES
    (NULL,$a,'$b',NOW(),'$d','$e')";
    
    mysqli_query($koneksi,$sql);
    if(mysqli_affected_rows($koneksi)){
      echo"
      <script>
      alert ('data berhasil ditambahkan');
      document.location.href = '?menu=barang-keluar';
      </script>";
    }
    else{
      mysqli_error($koneksi);
    }
  }
?>
<div class="content">
    <div class="box">
  <form action="" method="post" enctype="multipart/form-data">
    <div class="sick">
    <h1>Barang Keluar</h1>
    </div>
             <div class="tabel-box">
                <label for="id_barang">Id barang : </label>
                <select name="id_barang">
                <?php
                    $q_stok = mysqli_query($koneksi, "select * from stock");
                    while($data = mysqli_fetch_array($q_stok)) {?>
                    <option value="<?=$data['id_barang']?>"><?=$data['nama_barang']?></option>
                    <?php } ?>
                </select>
             </div>
             <div class="tabel-box">
                <label for="nama_barang">Nama barang : </label>
                <input type="text" name="nama_barang" id="">
             </div>
             
             <div class="tabel-box">
                <label for="penerima">Penerima : </label>
                <input type="text" name="penerima" id="">
             </div>
             <div class="tabel-box">
                <label for="Jumlah">Jumlah : </label>
                <input type="text" name="Jumlah" id="">
             </div>
             <button style="background-color : white;" name="submit">Simpan</button>
                <a href="?menu=barang-keluar">Kembali</a>
    </form>
  </div>
  </div>
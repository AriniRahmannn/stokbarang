<div class="tabel">
    <h1>Barang keluar</h1>
  <button><a href="?menu=tambah-barang-keluar">Tambah</a></button>
      <table border ="1">
          <tr>
              <th>No</th>
              <th>Id barang</th>
              <th>Nama barang</th>
              <th>Tanggal</th>
              <th>Penerima</th>
              <th>Jumlah</th>
              <th>Aksi</th>
          </tr>
          <?php
         $n = 1;
         $barang_keluar = mysqli_query($koneksi,"SELECT * FROM barang_keluar");
         while($row = mysqli_fetch_assoc($barang_keluar)){ ?>
          <tr>
            <td><?= $n++; ?></td>
            <td><?=$row['id_barang']?></td>
            <td><?=$row['nama_barang']?></td>
            <td><?=$row['tanggal']?></td>
            <td><?=$row['penerima']?></td>
            <td><?=$row['Jumlah']?></td>
          
            <td><a href="?menu=edit-barang-keluar&id=<?=$row['id_barang_keluar']?>">Edit</a></div> |
            <a href="?menu=hapus-barang-keluar&id=<?=$row['id_barang_keluar']?>"
            onclick="return confirm('Hapus data  ini?')">Hapus</a></td>
          </tr>     
        <?php } ?>
         </table>
    </div>
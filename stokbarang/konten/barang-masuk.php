<div class="tabel">
    <h1>Barang masuk</h1>
  <button><a href="?menu=tambah-barang-masuk">Tambah</a></button>
      <table border ="1">
          <tr>
              <th>No</th>
              <th>Id barang</th>
              <th>Keterangan</th>
              <th>Tanggal</th>
              <th>Jumlah</th>
              <th>Aksi</th>
          </tr>
          <?php
         $n = 1;
         while($row = mysqli_fetch_assoc($barang_masuk)){ ?>
          <tr>
            <td><?= $n++; ?></td>
        
            <td><?=$row['id_barang']?></td>
            <td><?=$row['keterangan']?></td>
            <td><?=$row['tanggal']?></td>
            <td><?=$row['Jumlah']?></td>
          
          
            <td><a href="?menu=edit-barang-masuk&id=<?=$row['id_barang_masuk']?>">Edit</a></div> |
            <a href="?menu=hapus-barang-masuk&id=<?=$row['id_barang_masuk']?>"
            onclick="return confirm('Hapus data  ini?')">Hapus</a></td>
          </tr>     
        <?php } ?>
         </table>
    </div>
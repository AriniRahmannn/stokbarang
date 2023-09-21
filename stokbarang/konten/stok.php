<div class="tabel">
    <h1>Stok</h1>
    <table border ="1">
        <tr>
            <th>Id barang</th>
            <th>Nama barang</th>
            <th>Deskripsi</th>
            <th>Stok</th>
        </tr>
        <?php
        $n = 1;
        while($row = mysqli_fetch_assoc($stock)){ ?>
        <tr>
            <td><?= $n++; ?></td>
            <td><?=$row['nama_barang']?></td>
            <td><?=$row['deskripsi']?></td>
            <td><?=$row['stok']?></td>
        </tr>     
    <?php } ?>
    </table>
</div>
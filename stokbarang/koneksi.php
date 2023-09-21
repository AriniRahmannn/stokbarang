<?php
$koneksi = mysqli_connect("localhost","root","","barang");
$stock = mysqli_query($koneksi,"SELECT * FROM stock");
$barang_masuk = mysqli_query($koneksi,"SELECT * FROM barang_masuk");
$barang_keluar = mysqli_query($koneksi,"SELECT * FROM barang_keluar");
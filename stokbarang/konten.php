<?php
if($_GET['menu'] == "" || $_GET['menu'] == "home") {
    include("./konten/home.php");
}
elseif($_GET['menu'] == "stok") {
    include("./konten/stok.php");
}
elseif($_GET['menu'] == "barang-masuk") {
    include("./konten/barang-masuk.php");
}
elseif($_GET['menu'] == "tambah-barang-masuk") {
    include("./konten/tambah-barang-masuk.php");
}
elseif($_GET['menu'] == "edit-barang-masuk") {
    include("./konten/edit-barang-masuk.php");
}
elseif($_GET['menu'] == "barang-keluar") {
    include("./konten/barang-keluar.php");
}
elseif($_GET['menu'] == "tambah-barang-keluar") {
    include("./konten/tambah-barang-keluar.php");
}
elseif($_GET['menu'] == "edit-barang-keluar") {
    include("./konten/edit-barang-keluar.php");
}
elseif($_GET['menu'] == "logout") {
    session_start();
    session_destroy();
    header('Location: index.php');
}
elseif($_GET['menu'] == "hapus-barang-masuk") {
    include("./konten/hapus-barang-masuk.php");
}
elseif($_GET['menu'] == "hapus-barang-keluar") {
    include("./konten/hapus-barang-keluar.php");
}
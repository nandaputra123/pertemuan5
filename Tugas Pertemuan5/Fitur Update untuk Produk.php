<?php
//koneksi database
$conn = mysqli_connect("localhost", "username", "password", "nama_database");

//menangkap data dari form
$id_produk = $_POST['id_produk'];
$nama_produk = $_POST['nama_produk'];
$harga_produk = $_POST['harga_produk'];

//query update data produk
$query = "UPDATE produk SET nama_produk='$nama_produk', harga_produk='$harga_produk' WHERE id_produk='$id_produk'";
$result = mysqli_query($conn, $query);

if($result){
    echo "Data produk berhasil diupdate";
}else{
    echo "Data produk gagal diupdate";
}
?>

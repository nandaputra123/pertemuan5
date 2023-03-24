<?php
//koneksi database
$conn = mysqli_connect("localhost", "username", "password", "nama_database");

//menangkap data dari form
$id_pelanggan = $_POST['id_pelanggan'];

//query delete data pelanggan
$query = "DELETE FROM pelanggan WHERE id_pelanggan='$id_pelanggan'";
$result = mysqli_query($conn, $query);

if($result){
    echo "Data pelanggan berhasil dihapus";
}else{
    echo "Data pelanggan gagal dihapus";
}
?>

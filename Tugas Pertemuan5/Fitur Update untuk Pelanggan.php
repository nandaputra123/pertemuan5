<?php
//koneksi database
$conn = mysqli_connect("localhost", "username", "password", "nama_database");

//menangkap data dari form
$id_pelanggan = $_POST['id_pelanggan'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$email_pelanggan = $_POST['email_pelanggan'];

//query update data pelanggan
$query = "UPDATE pelanggan SET nama_pelanggan='$nama_pelanggan', email_pelanggan='$email_pelanggan' WHERE id_pelanggan='$id_pelanggan'";
$result = mysqli_query($conn, $query);

if($result){
    echo "Data pelanggan berhasil diupdate";
}else{
    echo "Data pelanggan gagal diupdate";
}
?>

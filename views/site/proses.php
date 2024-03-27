<?php
// Ambil data dari formulir
$nama = $_POST['nama'];
$email = $_POST['email'];
$subjek = $_POST['subjek'];
$pesan = $_POST['pesan'];

// Validasi data jika diperlukan

// Buat koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "diginet_yii");

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Query untuk menyimpan data ke database
$sql = "INSERT INTO admin_kontak_kami (nama, email, subjek, pesan) VALUES ('$nama', '$email', '$subjek', '$pesan')";

if ($koneksi->query($sql) === TRUE) {
    echo "Pesan Anda berhasil dikirim!";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

// Tutup koneksi
$koneksi->close();
?>
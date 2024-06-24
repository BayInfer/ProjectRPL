<?php
// Lakukan koneksi ke database di sini
$host = "localhost"; // HOST
$username = "root"; // USERNAME
$password = ""; // PASSWORD
$database = "gamesuhuy"; // NAMA DATABASE
$koneksi = mysqli_connect($host, $username, $password, $database);

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil nilai dari formulir
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$peran = $_POST['peran'];

// Lakukan query untuk menyimpan data ke database
$sql = "INSERT INTO tbladmin (username, password, email,peran) VALUES ('$username', '$password', '$email','$peran')";

if (mysqli_query($koneksi, $sql)) {
    echo "<script>alert('Berhasil Membuat Akun');</script>"; // Menampilkan notifikasi alert jika query berhasil
    echo "<script>window.location='index.php';</script>"; // Arahkan ke halaman Login.php setelah menutup notifikasi alert
} else {
    echo "<script>alert('Error: " . $sql . "\\n" . mysqli_error($koneksi) . "');</script>"; // Menampilkan notifikasi alert dengan pesan error jika terjadi kesalahan dalam query
}

// Tutup koneksi
mysqli_close($koneksi);
?>

<?php
session_start();

$host = "localhost"; // HOST
$username = "root"; // USERNAME
$password = ""; // PASSWORD
$database = "gamesuhuy"; // NAMA DATABASE

// Lakukan koneksi ke database
$koneksi = mysqli_connect($host, $username, $password, $database);

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil nilai dari formulir
$email = $_POST['email'];
$password = $_POST['password'];

// Lakukan query untuk memeriksa keberadaan pengguna dengan email dan password yang sesuai
$sql = "SELECT * FROM tbladmin WHERE email='$email' AND password='$password'";
$result = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($result) == 1) { // Jika ditemukan satu pengguna dengan kombinasi email dan password yang benar
    // Ambil data pengguna dari hasil query
    $row = mysqli_fetch_assoc($result);
    $username = $row['username']; // Ambil nama pengguna
    $peran = $row['peran']; // Ambil peran pengguna


    
    // Simpan email pengguna dan username dalam sesi
    $_SESSION['login'] = $email;
    $_SESSION['username'] = $username; // Simpan username dalam sesi

    

    // Arahkan ke halaman yang sesuai berdasarkan peran pengguna
    if ($peran == "Admin") {
        echo "<script>alert('Selamat Datang $peran $username');</script>";
        echo "<script>window.location='dashboard.php';</script>"; // Arahkan ke halaman dashboard.php jika peran adalah Admin
    } elseif ($peran == "User") {
        echo "<script>alert('Selamat Datang $peran $username');</script>";
        echo "<script>window.location='../index.php';</script>"; // Arahkan ke halaman index.php jika peran adalah User
        exit;
    }
} else {
    // Jika username atau password salah, tampilkan pesan kesalahan dan redirect ke halaman login
    echo "<script>alert('Username atau password salah');</script>";
    echo "<script>window.location.href = 'index.php';</script>";
}

    // Menampilkan pesan selamat datang dengan nama pengguna dan perannya


// Tutup koneksi
mysqli_close($koneksi);
?>

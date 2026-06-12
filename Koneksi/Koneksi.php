<?php
// koneksi/database.php

// Konfigurasi Database
$host     = "localhost";
$username = "root";
$password = ""; // Kosongkan jika menggunakan XAMPP bawaan
$dbname   = "db_latihan_pbo_trpl1a_aylaazzura";

try {
    // Membuat koneksi database menggunakan PDO
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    
    // Konfigurasi opsi PDO untuk keamanan dan penanganan error
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Mengubah error menjadi Exception
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Hasil fetch berupa array asosiatif
        PDO::ATTR_EMULATE_PREPARES   => false,                  // Menonaktifkan emulasi agar SQL Injection lebih sulit dilakukan
    ];

    $db = new PDO($dsn, $username, $password, $options);
    
    // Catatan: Baris di bawah ini bisa Anda hapus/komentari jika sudah berhasil terhubung
    // echo "Koneksi ke database db_latihan_pbo_trpl1a berhasil!"; 

} catch (PDOException $e) {
    // Jika koneksi gagal, program akan berhenti dan menampilkan pesan error
    die("Koneksi database gagal: " . $e->getMessage());
}
<?php
include_once 'Connection.php';

// Dapatkan instance Singleton
$db1 = DatabaseConnection::getInstance();
$pdo1 = $db1->connect();

// Transaksi Create
$stmt = $pdo1->prepare("INSERT INTO music (penyanyi, genre, diputar, platform) VALUES (:penyanyi, :genre, :diputar, :platform)");
$stmt->execute([
    'penyanyi' => 'Adele',
    'genre' => 'Pop',
    'diputar' => true,
    'platform' => 'Spotify'
]);

// Transaksi Read
$stmt = $pdo1->prepare("SELECT * FROM music WHERE penyanyi = :penyanyi");
$stmt->execute(['penyanyi' => 'Adele']);
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($result);

// Transaksi Update
$stmt = $pdo1->prepare("UPDATE music SET genre = :genre WHERE penyanyi = :penyanyi");
$stmt->execute([
    'penyanyi' => 'Adele',
    'genre' => 'Soul'
]);

// Transaksi Delete
$stmt = $pdo1->prepare("DELETE FROM music WHERE penyanyi = :penyanyi");
$stmt->execute(['penyanyi' => 'Adele']);

// Dapatkan instance kedua dan bandingkan
$db2 = DatabaseConnection::getInstance();
$pdo2 = $db2->connect();

// Bandingkan koneksi
var_dump($pdo1 === $pdo2); // Harus true jika menggunakan satu objek Singleton

?>

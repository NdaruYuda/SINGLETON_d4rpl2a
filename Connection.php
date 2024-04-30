<?php
class DatabaseConnection {
    private static $instance = null;
    private $pdo;

    // Konstruktor privat mencegah instansiasi langsung
    private function __construct() {
        $dsn = 'mysql:host=localhost;dbname=seni;charset=utf8';
        $username = 'root'; // Sesuaikan dengan konfigurasi Anda
        $password = ''; // Sesuaikan dengan konfigurasi Anda

        try {
            $this->pdo = new PDO($dsn, $username, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Koneksi gagal: " . $e->getMessage());
        }
    }

    // Metode statis untuk mendapatkan instance tunggal
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new DatabaseConnection();
        }
        return self::$instance;
    }

    // Kembali objek PDO untuk koneksi
    public function connect() {
        return $this->pdo;
    }
}

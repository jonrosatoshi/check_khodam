<?php
require_once dirname(__DIR__) . '/db.php';

class PostModel {
    private $conn;

    // array random nama-nama khodam
    private $khodamOptions = [
        'laba-laba jerman', 
        'kardus milkuat', 
        'supra-x 125', 
        'termos', 
        'mie sedap goreng', 
        'kaleng khong guan',
        'sepeda ontel', 
        'tahu bulat', 
        'bendera merah putih', 
        'kompor gas', 
        'lemari es', 
        'bola UCL', 
        'cangkir kopi', 
        'pohon kelapa', 
        'dasi kantor', 
        'kursi kayu', 
        'lampu neon', 
        'kalkulator', 
        'setrika listrik', 
        'payung kertas',
        'kopi luwak', 
        'pisang goreng', 
        'buku catatan', 
        'kemeja batik', 
        'jam dinding', 
        'gitar akustik', 
        'radio transistor', 
        'kamera polaroid', 
        'sapu lidi', 
        'helm proyek'
    ];
    
    private function getRandomKhodam() {
        return $this->khodamOptions[array_rand($this->khodamOptions)];
    }

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getPosts() {
        $query = "SELECT * FROM postingan ORDER BY created_at DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addPost($username) {
        $khodam = $this->getRandomKhodam();
        $query = "INSERT INTO postingan (username, khodam) VALUES (:username, :khodam)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':khodam', $khodam);
        return $stmt->execute();
    }

}
?>
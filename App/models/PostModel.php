<?php
require_once dirname(__DIR__) . '/db.php';

class PostModel
{
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
        'helm proyek',
        'Kucing Oren Pemalas',
        'Sepeda Onthel Terbang',
        'Bantal Leher Sakti',
        'Kopi Tubruk Malam',
        'Sapu Ibu Peri',
        'Kereta Kuda Raksasa',
        'Bola Pingpong Hilang',
        'Piring Terbang Retro',
        'Kopi Hitam Manis',
        'Teko Ajaib',
        'Lampu Pelangi',
        'Kompor Gas Bohay',
        'Ceker babat',
        'Tobrut ganas',
        'Bakso Keliling Ganas',
        'Tukang Parkir Santuy',
        'Helikopter Kertas',
        'Keripik Pedas Nendang',
        'Boneka Kuda Lumping',
        'Bola Kasti Sakti',
        'Gitar Kucing Garong',
        'Kasur Lipat Meler',
        'Payung Kertas Cantik',
        'Gelang Getar Ajaib',
        'Jam Weker Kaleng',
        'Pensil Alis Melengkung',
        'Roti Bakar Garing',
        'Kipas Angin Tempur',
        'Keranjang Nenek Sihir',
        'Mesin Jahit Ngebut',
        'Celengan Babi Ngepet',
        'Radio Gaul Kekinian',
        'Televisi Hitam Putih',
        'Pemutar Kaset Kusut',
        'Tas Selempang Keren',
        'Sepatu Boot Sakti',
        'Obeng Ajaib',
        'Buku Harian Berbisik',
        'Bola Golf Meloncat',
        'Terompet Malam Tahun Baru',
        'Gelang Karet Sakti',
        'Komik Ajaib',
        'Tali Jemuran Melayang',
        'Selimut Hangat Pelangi'
    ];

    private function getRandomKhodam()
    {
        return $this->khodamOptions[array_rand($this->khodamOptions)];
    }

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getPosts()
    {
        $query = "SELECT * FROM postingan_v2 ORDER BY created_at DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addPost($username)
    {
        $khodam = $this->getRandomKhodam();
        $query = "INSERT INTO postingan_v2 (username, khodam) VALUES (:username, :khodam)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':khodam', $khodam);
        return $stmt->execute();
    }
}

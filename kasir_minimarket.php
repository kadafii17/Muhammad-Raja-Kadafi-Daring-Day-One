<?php
class KasirMinimarket {
    private $keranjang = [];
    
    // Fungsi untuk menambah barang ke keranjang
    public function tambahBarang($nama, $harga, $jumlah) {
        $item = [
            'nama' => $nama,
            'harga' => $harga,
            'jumlah' => $jumlah,
            'subtotal' => $harga * $jumlah
        ];
        $this->keranjang[] = $item;
    }
    
    // Fungsi untuk menghitung total belanja
    public function hitungTotal() {
        $total = 0;
        foreach ($this->keranjang as $item) {
            $total += $item['subtotal'];
        }
        return $total;
    }
    
    // Fungsi untuk menampilkan struk
    public function cetakStruk() {
        echo "===== MINI MARKET SEJAHTERA =====\n";
        echo "=================================\n";
        echo "Daftar Belanja:\n";
        
        foreach ($this->keranjang as $item) {
            echo $item['nama'] . " (" . $item['jumlah'] . " x Rp " . 
                 number_format($item['harga'], 0, ',', '.') . ")\n";
            echo "Subtotal: Rp " . number_format($item['subtotal'], 0, ',', '.') . "\n";
        }
        
        echo "=================================\n";
        echo "Total: Rp " . number_format($this->hitungTotal(), 0, ',', '.') . "\n";
        echo "=================================\n";
        echo "Terima kasih atas kunjungan Anda!\n";
    }
}

// Contoh penggunaan
$kasir = new KasirMinimarket();

// Menambah beberapa barang
$kasir->tambahBarang("Beras 5kg", 65000, 1);
$kasir->tambahBarang("Minyak Goreng 2L", 28000, 2);
$kasir->tambahBarang("Gula 1kg", 15000, 3);

// Cetak struk
$kasir->cetakStruk();
?>

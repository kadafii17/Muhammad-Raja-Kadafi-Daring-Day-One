<?php
// Deklarasi variabel
$nama_pelanggan = "Budi Santoso";
$judul_buku = "Dasar-Dasar Pemrograman Web";
$jumlah_buku = 2;
$harga_satuan = 85000;
$is_member = true;
$diskon_member = 0.1; // 10% untuk member

// Fungsi untuk menghitung total harga
function hitungTotalHarga($jumlah, $harga) {
    return $jumlah * $harga;
}

// Fungsi untuk menghitung diskon
function hitungDiskon($total_harga, $is_member, $diskon_rate) {
    if ($is_member) {
        return $total_harga * $diskon_rate;
    }
    return 0;
}

// Menghitung total dan diskon
$total_awal = hitungTotalHarga($jumlah_buku, $harga_satuan);
$diskon = hitungDiskon($total_awal, $is_member, $diskon_member);
$total_akhir = $total_awal - $diskon;

// Tampilkan struk
echo "=== STRUK PEMBELIAN TOKO BUKU CAHAYA ILMU ===\n";
echo "Nama Pelanggan: " . $nama_pelanggan . "\n";
echo "Status Member: " . ($is_member ? "Ya" : "Tidak") . "\n";
echo "----------------------------------------\n";
echo "Judul Buku: " . $judul_buku . "\n";
echo "Jumlah: " . $jumlah_buku . "\n";
echo "Harga Satuan: Rp " . number_format($harga_satuan, 0, ',', '.') . "\n";
echo "----------------------------------------\n";
echo "Total Awal: Rp " . number_format($total_awal, 0, ',', '.') . "\n";
echo "Diskon Member: Rp " . number_format($diskon, 0, ',', '.') . "\n";
echo "Total Akhir: Rp " . number_format($total_akhir, 0, ',', '.') . "\n";
echo "========================================\n";
echo "Terima kasih telah berbelanja di Cahaya Ilmu\n";
?>

<?php
// TiketVelvet.php
require_once 'Tiket.php';

class TiketVelvet extends Tiket {
    // Properti khusus kelas premium Velvet
    private $lokasiBaris;
    private $bantalSelimutPack;
    private $layananButler;

    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $hargaDasarTiket, $jenis_studio, $lokasiBaris, $bantalSelimutPack, $layananButler) {
        parent::__construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $hargaDasarTiket, $jenis_studio);
        $this->lokasiBaris = $lokasiBaris;
        $this->bantalSelimutPack = $bantalSelimutPack;
        $this->layananButler = $layananButler;
    }

    public function hitungTotalHarga() {
        // Simulasi: Studio Velvet memiliki charge premium service (Sofa Bed + Butler) sebesar Rp 60.000
        $biayaPremiumService = 60000;
        return ($this->getHargaDasarTiket() + $biayaPremiumService) * $this->getJumlahKursi();
    }

    public function getFasilitasSpesifik() {
        return [
            'Lokasi Baris'          => $this->lokasiBaris,
            'Paket Bantal Selimut'  => $this->bantalSelimutPack,
            'Layanan Butler'        => $this->layananButler
        ];
    }

    // Getter & Setter khusus Velvet
    public function getBantalSelimutPack() { return $this->bantalSelimutPack; }
    public function setBantalSelimutPack($bantalSelimutPack) { $this->bantalSelimutPack = $bantalSelimutPack; }
    public function getLayananButler() { return $this->layananButler; }
    public function setLayananButler($layananButler) { $this->layananButler = $layananButler; }
}
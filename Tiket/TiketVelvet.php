<?php
// TiketVelvet.php
require_once 'Tiket.php';

class TiketVelvet extends Tiket {
    private $lokasiBaris;
    private $bantalSelimutPack;
    private $layananButler;

    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $hargaDasarTiket, $jenis_studio, $lokasiBaris, $bantalSelimutPack, $layananButler) {
        parent::__construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $hargaDasarTiket, $jenis_studio);
        $this->lokasiBaris = $lokasiBaris;
        $this->bantalSelimutPack = $bantalSelimutPack;
        $this->layananButler = $layananButler;
    }

    #[Override] 
    public function hitungTotalHarga() {
        return ($this->getJumlahKursi() * $this->getHargaDasarTiket()) * 1.50;
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
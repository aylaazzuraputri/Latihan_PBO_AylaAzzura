<?php
// TiketReguler.php
require_once 'Tiket.php';

class TiketReguler extends Tiket {
    private $tipeAudio;
    private $lokasiBaris;

    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $hargaDasarTiket, $jenis_studio, $tipeAudio, $lokasiBaris) {
        parent::__construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $hargaDasarTiket, $jenis_studio);
        $this->tipeAudio = $tipeAudio;
        $this->lokasiBaris = $lokasiBaris;
    }

    // Implementasi hitung harga standar
    public function hitungTotalHarga() {
        return $this->getHargaDasarTiket() * $this->getJumlahKursi();
    }

    public function getFasilitasSpesifik() {
        return [
            'Tipe Audio'   => $this->tipeAudio,
            'Lokasi Baris' => $this->lokasiBaris
        ];
    }

    // Getter & Setter
    public function getTipeAudio() { return $this->tipeAudio; }
    public function setTipeAudio($tipeAudio) { $this->tipeAudio = $tipeAudio; }
    
    public function getLokasiBaris() { return $this->lokasiBaris; }
    public function setLokasiBaris($lokasiBaris) { $this->lokasiBaris = $lokasiBaris; }
}
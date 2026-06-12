<?php
// TiketIMAX.php
require_once 'Tiket.php';

class TiketIMAX extends Tiket {
    // Mewarisi tipeAudio dan lokasiBaris secara implisit, serta menambah properti khusus IMAX
    private $tipeAudio;
    private $lokasiBaris;
    private $kacamata3dId;
    private $efekGerakFitur;

    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $hargaDasarTiket, $jenis_studio, $tipeAudio, $lokasiBaris, $kacamata3dId, $efekGerakFitur) {
        parent::__construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $hargaDasarTiket, $jenis_studio);
        $this->tipeAudio = $tipeAudio;
        $this->lokasiBaris = $lokasiBaris;
        $this->kacamata3dId = $kacamata3dId;
        $this->efekGerakFitur = $efekGerakFitur;
    }

    public function hitungTotalHarga() {
        // Simulasi: Studio IMAX memiliki charge tambahan Rp 25.000 untuk maintenance alat/efek gerak
        $biayaTambahanIMAX = 25000;
        return ($this->getHargaDasarTiket() + $biayaTambahanIMAX) * $this->getJumlahKursi();
    }

    public function getFasilitasSpesifik() {
        return [
            'Tipe Audio'        => $this->tipeAudio,
            'Lokasi Baris'      => $this->lokasiBaris,
            'ID Kacamata 3D'    => $this->kacamata3dId ?? 'Format 2D (Tidak Butuh)',
            'Fitur Efek Gerak'  => $this->efekGerakFitur ?? 'Standard'
        ];
    }

    // Getter & Setter khusus IMAX
    public function getKacamata3dId() { return $this->kacamata3dId; }
    public function setKacamata3dId($kacamata3dId) { $this->kacamata3dId = $kacamata3dId; }
    public function getEfekGerakFitur() { return $this->efekGerakFitur; }
    public function setEfekGerakFitur($efekGerakFitur) { $this->efekGerakFitur = $efekGerakFitur; }
}
<?php
// TiketIMAX.php
require_once 'Tiket.php';

class TiketIMAX extends Tiket {
  
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

    #[Override] 
    public function hitungTotalHarga() {
        $biayaTambahanIMAX = 35000; 
        return ($this->getJumlahKursi() * $this->getHargaDasarTiket()) + $biayaTambahanIMAX;
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
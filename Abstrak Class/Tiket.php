<?php
// Tiket.php

abstract class Tiket {
    // Atribut Global (Induk) sesuai dengan struktur database
    protected $id_tiket;
    protected $nama_film;
    protected $jadwal_tayang;
    protected $jumlah_kursi;
    protected $harga_dasar_tiket;
    protected $jenis_studio;

    // Constructor untuk menginisialisasi atribut global
    public function __construct($nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar_tiket, $jenis_studio) {
        $this->nama_film = $nama_film;
        $this->jadwal_tayang = $jadwal_tayang;
        $this->jumlah_kursi = $jumlah_kursi;
        $this->harga_dasar_tiket = $harga_dasar_tiket;
        $this->jenis_studio = $jenis_studio;
    }

    // Abstract Method: Wajib dibuat ulang/diimplementasikan di kelas anak
    // karena setiap jenis studio memiliki cara menghitung total harga yang berbeda
    abstract public function hitungTotalHarga();

    // Abstract Method: Untuk mendapatkan spesifikasi fasilitas unik masing-masing studio
    abstract public function getFasilitasSpesifik();

    // Getter dan Setter untuk atribut global (Induk)
    public function getIdTiket() {
        return $this->id_tiket;
    }

    public function setIdTiket($id_tiket) {
        $this->id_tiket = $id_tiket;
    }

    public function getNamaFilm() {
        return $this->nama_film;
    }

    public function getJadwalTayang() {
        return $this->jadwal_tayang;
    }

    public function getJumlahKursi() {
        return $this->jumlah_kursi;
    }

    public function getHargaDasarTiket() {
        return $this->harga_dasar_tiket;
    }

    public function getJenisStudio() {
        return $this->jenis_studio;
    }
}
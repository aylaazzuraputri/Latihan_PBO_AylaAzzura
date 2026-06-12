<?php
// Tiket.php

abstract class Tiket {
    // Properti/Atribut terenkapsulasi (Private)
    // Nilainya dipetakan langsung dari kolom tabel database
    private $id_tiket;
    private $nama_film;
    private $jadwal_tayang;
    private $jumlah_kursi;
    private $hargaDasarTiket; 
    private $jenis_studio;

    // Constructor untuk memetakan data dari baris tabel database ke properti objek
    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $hargaDasarTiket, $jenis_studio) {
        $this->id_tiket = $id_tiket;
        $this->nama_film = $nama_film;
        $this->jadwal_tayang = $jadwal_tayang;
        $this->jumlah_kursi = $jumlah_kursi;
        $this->hargaDasarTiket = $hargaDasarTiket;
        $this->jenis_studio = $jenis_studio;
    }

    // =========================================================================
    // METODE ABSTRAK (Tanpa Isi/Body): Wajib diimplementasikan oleh kelas anak
    // =========================================================================
    abstract public function hitungTotalHarga();
    abstract public function tampilkanInfoFasilitas();

    // ==========================================
    // GETTER (Untuk mengakses properti private)
    // ==========================================
    public function getIdTiket() {
        return $this->id_tiket;
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
        return $this->hargaDasarTiket;
    }

    public function getJenisStudio() {
        return $this->jenis_studio;
    }

    // ==========================================
    // SETTER (Jika ingin mengubah nilai properti)
    // ==========================================
    public function setNamaFilm($nama_film) {
        $this->nama_film = $nama_film;
    }

    public function setJadwalTayang($jadwal_tayang) {
        $this->jadwal_tayang = $jadwal_tayang;
    }

    public function setJumlahKursi($jumlah_kursi) {
        $this->jumlah_kursi = $jumlah_kursi;
    }

    public function setHargaDasarTiket($hargaDasarTiket) {
        $this->hargaDasarTiket = $hargaDasarTiket;
    }
}
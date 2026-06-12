<?php

abstract class Studio {
    protected string $id;
    protected string $nama;
    protected string $kategori; 
    protected int $kapasitas;
    protected string $layar;
    protected string $suara;
    protected string $kursiJenis;
    protected float $hargaDasar;
    protected array $fasilitas;

    public function __construct(
        string $id,
        string $nama,
        string $kategori, 
        int $kapasitas,
        string $layar,
        string $suara,
        string $kursiJenis,
        float $hargaDasar,
        array $fasilitas
    ) {
        $this->id         = $id;
        $this->nama       = $nama;
        $this->kategori   = $kategori; 
        $this->kapasitas  = $kapasitas;
        $this->layar      = $layar;
        $this->suara      = $suara;
        $this->kursiJenis = $kursiJenis;
        $this->hargaDasar = $hargaDasar;
        $this->fasilitas  = $fasilitas;
    }

    abstract public function cetakAtribut(): void;
    abstract public function getAtributUnik(): string;

    public function getId(): string         { return $this->id; }
    public function getNama(): string       { return $this->nama; }
    public function getKategori(): string   { return $this->kategori; } 
    public function getKapasitas(): int    { return $this->kapasitas; }
    public function getHargaDasar(): float { return $this->hargaDasar; }
    public function getFasilitas(): array  { return $this->fasilitas; }

    public function getFilmHariIni(array $jadwalFilm): array {
        return array_filter($jadwalFilm, fn($f) => $f['studioId'] === $this->id);
    }

    public function hitungTotalHarga(array $tikets): float {
        $total = 0.0;
        foreach ($tikets as $t) {
            if ($t->getStudioId() === $this->id && $t->getStatus() === "Confirmed") {
                $total += $t->getTotalHarga();
            }
        }
        return $total;
    }

    protected function formatRupiah(float $angka): string {
        return "Rp " . number_format($angka, 0, ',', '.');
    }
}

class StudioRegular extends Studio {
    private string $resolusiLayar;

    public function __construct() {
        parent::__construct(
            id:          "STD-001",
            nama:        "Studio Regular 1",
            kategori:    "Standard Class", 
            kapasitas:   120,
            layar:       "Standard 2D / 3D",
            suara:       "Dolby Stereo",
            kursiJenis:  "Standard Seat",
            hargaDasar:  45000,
            fasilitas:   ["AC", "Layar Standard", "Dolby Stereo"]
        );
        $this->resolusiLayar = "2K Standard";
    }

    public function cetakAtribut(): void {
        echo "<div class='studio-output regular-output'>";
        echo "<h3>🎬 " . htmlspecialchars($this->nama) . " <span class='badge-regular'>Regular</span></h3>";
        echo "<table class='attr-table'>";
        echo "<tr><td>Kategori</td><td><strong>" . $this->kategori . "</strong></td></tr>"; 
        echo "<tr><td>Studio ID</td><td>" . $this->id . "</td></tr>";
        echo "<tr><td>Kapasitas</td><td>" . $this->kapasitas . " kursi</td></tr>";
        echo "<tr><td>Layar</td><td>" . $this->layar . "</td></tr>";
        echo "<tr><td>Sistem Suara</td><td>" . $this->suara . "</td></tr>";
        echo "<tr><td>Jenis Kursi</td><td>" . $this->kursiJenis . "</td></tr>";
        echo "<tr><td>Resolusi Layar ✦</td><td>" . $this->resolusiLayar . "</td></tr>";
        echo "<tr><td>Fasilitas</td><td>" . implode(", ", $this->fasilitas) . "</td></tr>";
        echo "<tr><td>Harga Dasar</td><td>" . $this->formatRupiah($this->hargaDasar) . "/tiket</td></tr>";
        echo "</table>";
        echo "</div>";
    }

    public function getAtributUnik(): string {
        return "Resolusi Layar: " . $this->resolusiLayar;
    }
}

class StudioIMAX extends Studio {
    private string $teknologiProyeksi;
    private string $dimensiLayar;
    private bool $dboxMotion;

    public function __construct() {
        parent::__construct(
            id:          "STD-002",
            nama:        "Studio IMAX",
            kategori:    "Premium Experience", 
            kapasitas:   200,
            layar:       "IMAX Laser — 26m × 19m",
            suara:       "12-Channel Surround",
            kursiJenis:  "IMAX Recliner",
            hargaDasar:  85000,
            fasilitas:   ["Layar IMAX Laser", "12-Channel Audio", "Kursi Recliner", "D-BOX Motion"]
        );
        $this->teknologiProyeksi = "Laser 4K 60fps";
        $this->dimensiLayar      = "26m × 19m";
        $this->dboxMotion        = true;
    }

    public function cetakAtribut(): void {
        echo "<div class='studio-output imax-output'>";
        echo "<h3>📽️ " . htmlspecialchars($this->nama) . " <span class='badge-imax'>IMAX</span></h3>";
        echo "<table class='attr-table'>";
        echo "<tr><td>Kategori</td><td><strong>" . $this->kategori . "</strong></td></tr>"; 
        echo "<tr><td>Studio ID</td><td>" . $this->id . "</td></tr>";
        echo "<tr><td>Kapasitas</td><td>" . $this->kapasitas . " kursi</td></tr>";
        echo "<tr><td>Layar</td><td>" . $this->layar . "</td></tr>";
        echo "<tr><td>Sistem Suara</td><td>" . $this->suara . "</td></tr>";
        echo "<tr><td>Jenis Kursi</td><td>" . $this->kursiJenis . "</td></tr>";
        echo "<tr><td>Teknologi Proyeksi ✦</td><td>" . $this->teknologiProyeksi . "</td></tr>";
        echo "<tr><td>Dimensi Layar ✦</td><td>" . $this->dimensiLayar . "</td></tr>";
        echo "<tr><td>D-BOX Motion ✦</td><td>" . ($this->dboxMotion ? "✔ Tersedia" : "✘ Tidak") . "</td></tr>";
        echo "<tr><td>Fasilitas</td><td>" . implode(", ", $this->fasilitas) . "</td></tr>";
        echo "<tr><td>Harga Dasar</td><td>" . $this->formatRupiah($this->hargaDasar) . "/tiket</td></tr>";
        echo "</table>";
        echo "</div>";
    }

    public function getAtributUnik(): string {
        return "Teknologi: " . $this->teknologiProyeksi . " | Dimensi: " . $this->dimensiLayar;
    }
}

class StudioVelvet extends Studio {
    private string $kelasKursi;
    private bool $layananFnB;
    private string $sistemAtmos;

    public function __construct() {
        parent::__construct(
            id:          "STD-003",
            nama:        "Studio Velvet",
            kategori:    "Ultra Luxury", 
            kapasitas:   60,
            layar:       "Luxury Screen 4K",
            suara:       "Dolby Atmos",
            kursiJenis:  "Velvet Luxury Sofa",
            hargaDasar:  130000,
            fasilitas:   ["Sofa Mewah", "Dolby Atmos", "Layanan F&B Pribadi", "Selimut Premium"]
        );
        $this->kelasKursi   = "Premium Luxury Sofa";
        $this->layananFnB   = true;
        $this->sistemAtmos  = "Dolby Atmos 7.1.4";
    }

    public function cetakAtribut(): void {
        echo "<div class='studio-output velvet-output'>";
        echo "<h3>🎭 " . htmlspecialchars($this->nama) . " <span class='badge-velvet'>Velvet</span></h3>";
        echo "<table class='attr-table'>";
        echo "<tr><td>Kategori</td><td><strong>" . $this->kategori . "</strong></td></tr>"; 
        echo "<tr><td>Studio ID</td><td>" . $this->id . "</td></tr>";
        echo "<tr><td>Kapasitas</td><td>" . $this->kapasitas . " kursi</td></tr>";
        echo "<tr><td>Layar</td><td>" . $this->layar . "</td></tr>";
        echo "<tr><td>Sistem Suara</td><td>" . $this->suara . "</td></tr>";
        echo "<tr><td>Jenis Kursi</td><td>" . $this->kursiJenis . "</td></tr>";
        echo "<tr><td>Kelas Kursi ✦</td><td>" . $this->kelasKursi . "</td></tr>";
        echo "<tr><td>Sistem Atmos ✦</td><td>" . $this->sistemAtmos . "</td></tr>";
        echo "<tr><td>Layanan F&amp;B ✦</td><td>" . ($this->layananFnB ? "✔ Tersedia (Personal Butler)" : "✘ Tidak") . "</td></tr>";
        echo "<tr><td>Fasilitas</td><td>" . implode(", ", $this->fasilitas) . "</td></tr>";
        echo "<tr><td>Harga Dasar</td><td>" . $this->formatRupiah($this->hargaDasar) . "/tiket</td></tr>";
        echo "</table>";
        echo "</div>";
    }

    public function getAtributUnik(): string {
        return "Kelas: " . $this->kelasKursi . " | Atmos: " . $this->sistemAtmos;
    }
}

class Tiket {
    private string $idTiket;
    private string $namaPenonton;
    private string $judulFilm;
    private string $studioId;
    private string $tipeStudio;
    private string $nomorKursi;
    private string $jadwal;
    private int $jumlahTiket;
    private float $hargaSatuan;
    private string $status;

    public function __construct(
        string $idTiket, string $namaPenonton, string $judulFilm, string $studioId,
        string $tipeStudio, string $nomorKursi, string $jadwal, int $jumlahTiket,
        float $hargaSatuan, string $status
    ) {
        $this->idTiket       = $idTiket;
        $this->namaPenonton  = $namaPenonton;
        $this->judulFilm     = $judulFilm;
        $this->studioId      = $studioId;
        $this->tipeStudio    = $tipeStudio;
        $this->nomorKursi    = $nomorKursi;
        $this->jadwal        = $jadwal;
        $this->jumlahTiket   = $jumlahTiket;
        $this->hargaSatuan   = $hargaSatuan;
        $this->status        = $status;
    }

    public function getIdTiket(): string      { return $this->idTiket; }
    public function getNamaPenonton(): string { return $this->namaPenonton; }
    public function getJudulFilm(): string    { return $this->judulFilm; }
    public function getStudioId(): string     { return $this->studioId; }
    public function getTipeStudio(): string   { return $this->tipeStudio; }
    public function getNomorKursi(): string   { return $this->nomorKursi; }
    public function getJadwal(): string       { return $this->jadwal; }
    public function getJumlahTiket(): int     { return $this->jumlahTiket; }
    public function getStatus(): string       { return $this->status; }
    public function getTotalHarga(): float    { return $this->hargaSatuan * $this->jumlahTiket; }
    public function formatRupiah(float $angka): string { return "Rp " . number_format($angka, 0, ',', '.'); }
}

class DatabaseSimulator {
    public static function getTikets(): array {
        return [
            new Tiket("TKT-00001","Ayla Azzura Putri","Avengers: Secret Wars","STD-002","IMAX","A1","10:00",2,85000,"Confirmed"),
            new Tiket("TKT-00002","Budi Santoso","Dune: Messiah","STD-001","Regular","B2","13:00",1,45000,"Confirmed"),
            new Tiket("TKT-00003","Citra Dewi","Mission Impossible 9","STD-003","Velvet","C1","15:30",2,130000,"Confirmed"),
            new Tiket("TKT-00004","Dani Firmansyah","Inside Out 3","STD-001","Regular","A3","18:00",3,45000,"Pending"),
            new Tiket("TKT-00005","Eka Rahayu","Transformers","STD-002","IMAX","D1","20:30",1,85000,"Confirmed"),
            new Tiket("TKT-00006","Fajar Nugroho","Fast & Furious 12","STD-003","Velvet","A2","18:00",2,130000,"Cancelled"),
            new Tiket("TKT-00007","Gita Puspita","Superman Legacy 2","STD-001","Regular","E1","10:00",1,45000,"Confirmed"),
            new Tiket("TKT-00008","Hendra Wijaya","Oppenheimer 2","STD-002","IMAX","B1","23:00",3,85000,"Pending"),
            new Tiket("TKT-00009","Indah Permata","Avengers: Secret Wars","STD-003","Velvet","D2","15:30",1,130000,"Confirmed"),
            new Tiket("TKT-00010","Joko Susilo","Dune: Messiah","STD-001","Regular","C2","13:00",2,45000,"Confirmed"),
        ];
    }

    public static function getFilmHariIni(): array {
        return [
            ['judul' => 'Dune: Messiah', 'studioId' => 'STD-001', 'jam' => ['13:00', '16:00', '19:00']],
            ['judul' => 'Inside Out 3', 'studioId' => 'STD-001', 'jam' => ['10:00', '18:00']],
            ['judul' => 'Superman Legacy 2', 'studioId' => 'STD-001', 'jam' => ['21:00']],
            ['judul' => 'Avengers: Secret Wars', 'studioId' => 'STD-002', 'jam' => ['10:00', '14:00', '19:00']],
            ['judul' => 'Transformers: New Era', 'studioId' => 'STD-002', 'jam' => ['20:30', '23:30']],
            ['judul' => 'Mission Impossible 9', 'studioId' => 'STD-003', 'jam' => ['12:00', '15:30', '21:00']],
            ['judul' => 'Avengers: Secret Wars (Luxury)', 'studioId' => 'STD-003', 'jam' => ['18:00']]
        ];
    }
}

$studios    = [new StudioRegular(), new StudioIMAX(), new StudioVelvet()];
$tikets     = DatabaseSimulator::getTikets();
$filmHariIni = DatabaseSimulator::getFilmHariIni();

// Hitung statistik
$totalTiket   = count($tikets);
$confirmed    = array_filter($tikets, fn($t) => $t->getStatus() === "Confirmed");

// Pendapatan Riil berbasis Polimorfisme per Studio
$totalRevenue = 0;
foreach ($studios as $studio) {
    $totalRevenue += $studio->hitungTotalHarga($tikets);
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Dashboard Tiket — AyyCinema</title>
<style>
  body { font-family: 'Segoe UI', sans-serif; background: #f0ede6; color: #2c2c2a; margin: 0; }
  .header { background: #26215C; color: white; padding: 16px 32px; display: flex; align-items: center; gap: 12px; }
  .header h1 { font-size: 18px; margin: 0; }
  .main { max-width: 1200px; margin: 0 auto; padding: 24px; }
  .stats { display: grid; grid-template-columns: repeat(4,1fr); gap: 12px; margin-bottom: 24px; }
  .stat { background: white; border-radius: 10px; padding: 16px 20px; border: 0.5px solid #d3d1c7; }
  .stat .label { font-size: 12px; color: #5f5e5a; margin-bottom: 6px; }
  .stat .val { font-size: 24px; font-weight: 600; }
  h2 { font-size: 16px; font-weight: 600; margin: 24px 0 16px; color: #26215C; }
  .studio-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 16px; margin-bottom: 32px; }
  .studio-output { background: white; border-radius: 12px; border: 0.5px solid #d3d1c7; padding: 16px 20px; }
  .regular-output { border-top: 3px solid #1D9E75; }
  .imax-output    { border-top: 3px solid #378ADD; }
  .velvet-output  { border-top: 3px solid #7F77DD; }
  .studio-output h3 { font-size: 15px; margin: 0 0 12px; display: flex; align-items: center; gap: 8px; }
  .attr-table { width: 100%; font-size: 12px; border-collapse: collapse; }
  .attr-table td { padding: 4px 0; border-bottom: 0.5px solid #f1efe8; }
  .attr-table td:first-child { color: #5f5e5a; width: 140px; }
  .badge-regular { background: #e1f5ee; color: #085041; font-size: 10px; padding: 2px 8px; border-radius: 4px; }
  .badge-imax    { background: #e6f1fb; color: #0c447c; font-size: 10px; padding: 2px 8px; border-radius: 4px; }
  .badge-velvet  { background: #eeedfe; color: #3c3489; font-size: 10px; padding: 2px 8px; border-radius: 4px; }
  .table-card { background: white; border-radius: 12px; border: 0.5px solid #d3d1c7; overflow: hidden; margin-bottom: 24px; }
  .table-card-header { padding: 14px 20px; border-bottom: 0.5px solid #d3d1c7; font-weight: 600; font-size: 14px; background: #fff; }
  table { width: 100%; border-collapse: collapse; font-size: 13px; }
  th { background: #f1efe8; padding: 10px 16px; text-align: left; font-size: 12px; font-weight: 500; color: #5f5e5a; }
  td { padding: 10px 16px; border-bottom: 0.5px solid #f1efe8; }
  .chip { display: inline-block; padding: 2px 8px; border-radius: 4px; font-size: 11px; font-weight: 500; }
  .chip-ok  { background: #eaf3de; color: #27500a; }
  .chip-wait{ background: #faeeda; color: #633806; }
  .chip-no  { background: #fcebeb; color: #791f1f; }
  .time-tag { background: #e8e6df; padding: 2px 6px; border-radius: 4px; font-size: 11px; margin-right: 4px; display: inline-block; }
  .total-row { font-weight: 700; font-size: 14px; color: #26215C; }
  footer { text-align:center; padding: 20px; font-size: 12px; color: #888780; }
</style>
</head>
<body>

<div class="header">
  <div style="width:40px;height:40px;background:#7F77DD;border-radius:8px;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:18px;">AC</div>
  <div>
    <h1>AyyCinema</h1>
  </div>
</div>

<div class="main">

  <div class="stats">
    <div class="stat">
      <div class="label">Total Tiket Dipesan</div>
      <div class="val"><?= $totalTiket ?></div>
    </div>
    <div class="stat">
      <div class="label">Tiket Terkonfirmasi</div>
      <div class="val"><?= count($confirmed) ?></div>
    </div>
    <div class="stat">
      <div class="label">Total Pendapatan</div>
      <div class="val" style="font-size:18px; color: #1D9E75; font-weight: bold;"><?= "Rp " . number_format($totalRevenue, 0, ',', '.') ?></div>
    </div>
    <div class="stat">
      <div class="label">Jumlah Studio Aktif</div>
      <div class="val"><?= count($studios) ?></div>
    </div>
  </div>

  <h2>Spesifikasi Studio</h2>
  <div class="studio-grid">
    <?php foreach ($studios as $studio): ?>
      <?php $studio->cetakAtribut(); ?>
    <?php endforeach; ?>
  </div>

  <h2>🎬 Jadwal Film yang Tayang Hari Ini</h2>
  <div class="studio-grid">
    <?php foreach ($studios as $studio): ?>
      <?php 
        $filmStudio = $studio->getFilmHariIni($filmHariIni); 
        $borderColor = ($studio->getId() === 'STD-001') ? '#1D9E75' : (($studio->getId() === 'STD-002') ? '#378ADD' : '#7F77DD');
      ?>
      <div class="studio-output" style="border-top: 3px solid <?= $borderColor ?>;">
        <h3 style="margin-bottom: 4px;"><?= htmlspecialchars($studio->getNama()) ?></h3>
        <p style="font-size: 11px; color: #777; margin: 0 0 12px 0;">Kategori: <strong><?= $studio->getKategori() ?></strong></p>
        
        <?php if(empty($filmStudio)): ?>
          <p style="font-size: 12px; color: #999; font-style: italic;">Tidak ada jadwal film hari ini.</p>
        <?php else: ?>
          <table class="attr-table">
            <thead>
              <tr style="border-bottom: 1px solid #d3d1c7;"><th style="padding: 4px 0;">Judul Film</th><th style="padding: 4px 0; text-align: right;">Jam Tayang</th></tr>
            </thead>
            <tbody>
              <?php foreach ($filmStudio as $film): ?>
                <tr>
                  <td style="font-weight: 600; padding: 8px 0; color: #26215C;"><?= htmlspecialchars($film['judul']) ?></td>
                  <td style="text-align: right; padding: 8px 0;">
                    <?php foreach ($film['jam'] as $jam): ?>
                      <span class="time-tag"><?= $jam ?></span>
                    <?php endforeach; ?>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        <?php endif; ?>
      </div>
    <?php endforeach; ?>
  </div>

  <div class="table-card">
    <div class="table-card-header">Total Harga per Studio</div>
    <table>
      <thead>
        <tr><th>Studio</th><th>Kategori</th><th>Tipe ID</th><th>Atribut Unik</th><th>Total Pendapatan Terkonfirmasi</th></tr>
      </thead>
      <tbody>
        <?php foreach ($studios as $studio): ?>
        <tr>
          <td><strong><?= htmlspecialchars($studio->getNama()) ?></strong></td>
          <td><span class="chip chip-ok" style="background:#f1efe8; color:#333;"><?= htmlspecialchars($studio->getKategori()) ?></span></td>
          <td><?= $studio->getId() ?></td>
          <td style="font-size:11px;color:#5f5e5a;"><?= htmlspecialchars($studio->getAtributUnik()) ?></td>
          <td class="total-row"><?= "Rp " . number_format($studio->hitungTotalHarga($tikets), 0, ',', '.') ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <div class="table-card">
    <div class="table-card-header">Daftar Tiket Penonton</div>
    <table>
      <thead>
        <tr>
          <th>ID Tiket</th><th>Nama Penonton</th><th>Film</th>
          <th>Studio</th><th>Kursi</th><th>Jadwal</th>
          <th>Jumlah</th><th>Total Harga</th><th>Status</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($tikets as $t): ?>
        <tr>
          <td style="font-family:monospace;font-size:11px;color:#888;"><?= $t->getIdTiket() ?></td>
          <td><?= htmlspecialchars($t->getNamaPenonton()) ?></td>
          <td><?= htmlspecialchars($t->getJudulFilm()) ?></td>
          <td>
            <span class="chip badge-<?= strtolower($t->getTipeStudio()) ?>">
              <?= $t->getTipeStudio() ?>
            </span>
          </td>
          <td><?= $t->getNomorKursi() ?></td>
          <td><?= $t->getJadwal() ?> WIB</td>
          <td style="text-align:center;"><?= $t->getJumlahTiket() ?>x</td>
          <td style="font-weight:600;"><?= $t->formatRupiah($t->getTotalHarga()) ?></td>
          <td>
            <?php $s = $t->getStatus(); ?>
            <span class="chip <?= $s==='Confirmed'?'chip-ok':($s==='Pending'?'chip-wait':'chip-no') ?>">
              <?= $s ?>
            </span>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

</div>

<footer>
  Dashboard Tiket Bioskop <?= date('Y') ?> — Pemrograman Berorientasi Objek
</footer>
</body>
</html>
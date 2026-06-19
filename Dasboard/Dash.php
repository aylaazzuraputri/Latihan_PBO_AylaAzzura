<?php


$studios = [
    [
        'id' => 'STD-001', 'key' => 'reg', 'name' => 'Studio Regular 1', 'kategori' => 'Standard Class',
        'tc' => 't-reg', 'bc' => 'b-reg', 'bt' => 'Regular', 'dot' => '#1D9E75',
        'kap' => 120, 'layar' => 'Standard 2D / 3D', 'suara' => 'Dolby Stereo', 'kursi' => 'Standard Seat',
        'harga' => 'Rp 45.000', 'fas' => 'AC, Layar Standard, Dolby Stereo',
        'uLbl' => 'Resolusi Layar', 'uVal' => '2K Standard', 'rev' => 'Rp 225.000',
        'films' => [
            ['j' => 'Dune: Messiah', 't' => ['13:00', '16:00', '19:00']],
            ['j' => 'Inside Out 3', 't' => ['10:00', '18:00']],
            ['j' => 'Superman Legacy 2', 't' => ['21:00']]
        ]
    ],
    [
        'id' => 'STD-002', 'key' => 'imax', 'name' => 'Studio IMAX', 'kategori' => 'Premium Experience',
        'tc' => 't-imax', 'bc' => 'b-imax', 'bt' => 'IMAX', 'dot' => '#378ADD',
        'kap' => 200, 'layar' => 'IMAX Laser — 26m × 19m', 'suara' => '12-Channel Surround', 'kursi' => 'IMAX Recliner',
        'harga' => 'Rp 85.000', 'fas' => 'Layar IMAX Laser, 12-Channel Audio, Recliner, D-BOX Motion',
        'uLbl' => 'Teknologi Proyeksi', 'uVal' => 'Laser 4K 60fps | D-BOX Motion', 'rev' => 'Rp 425.000',
        'films' => [
            ['j' => 'Avengers: Secret Wars', 't' => ['10:00', '14:00', '19:00']],
            ['j' => 'Transformers: New Era', 't' => ['20:30', '23:30']]
        ]
    ],
    [
        'id' => 'STD-003', 'key' => 'velv', 'name' => 'Studio Velvet', 'kategori' => 'Ultra Luxury',
        'tc' => 't-velv', 'bc' => 'b-velv', 'bt' => 'Velvet', 'dot' => '#7F77DD',
        'kap' => 60, 'layar' => 'Luxury Screen 4K', 'suara' => 'Dolby Atmos', 'kursi' => 'Velvet Luxury Sofa',
        'harga' => 'Rp 130.000', 'fas' => 'Sofa Mewah, Dolby Atmos, Layanan F&B Pribadi, Selimut Premium',
        'uLbl' => 'Sistem Atmos', 'uVal' => 'Dolby Atmos 7.1.4 + Personal Butler', 'rev' => 'Rp 390.000',
        'films' => [
            ['j' => 'Mission Impossible 9', 't' => ['12:00', '15:30', '21:00']],
            ['j' => 'Avengers: Secret Wars (Luxury)', 't' => ['18:00']]
        ]
    ]
];

$films = [
    [
        'judul' => 'Avengers: Secret Wars', 'genre' => 'Action', 'durasi' => '165 menit',
        'sutradara' => 'The Russo Brothers', 'rating' => 4.8, 'tahun' => 2025,
        'sinopsis' => 'Para Avenger menghadapi ancaman terbesar sepanjang masa dari kekuatan tersembunyi di multiverse.',
        'studios' => [
            ['sid' => 'STD-002', 'sname' => 'Studio IMAX', 'jam' => ['10:00', '14:00', '19:00'], 'harga' => 'Rp 85.000'],
            ['sid' => 'STD-003', 'sname' => 'Studio Velvet', 'jam' => ['18:00'], 'harga' => 'Rp 130.000']
        ]
    ],
    [
        'judul' => 'Dune: Messiah', 'genre' => 'Sci-Fi', 'durasi' => '155 menit',
        'sutradara' => 'Denis Villeneuve', 'rating' => 4.7, 'tahun' => 2025,
        'sinopsis' => 'Paul Atreides melanjutkan perjalanannya sebagai pemimpin spiritual di planet Arrakis.',
        'studios' => [
            ['sid' => 'STD-001', 'sname' => 'Studio Regular', 'jam' => ['13:00', '16:00', '19:00'], 'harga' => 'Rp 45.000']
        ]
    ],
    [
        'judul' => 'Mission Impossible 9', 'genre' => 'Action', 'durasi' => '148 menit',
        'sutradara' => 'Christopher McQuarrie', 'rating' => 4.6, 'tahun' => 2025,
        'sinopsis' => 'Ethan Hunt kembali dalam misi yang paling mustahil untuk menyelamatkan dunia dari AI rogue.',
        'studios' => [
            ['sid' => 'STD-003', 'sname' => 'Studio Velvet', 'jam' => ['12:00', '15:30', '21:00'], 'harga' => 'Rp 130.000']
        ]
    ],
    [
        'judul' => 'Inside Out 3', 'genre' => 'Animation', 'durasi' => '105 menit',
        'sutradara' => 'Kelsey Mann', 'rating' => 4.5, 'tahun' => 2025,
        'sinopsis' => 'Riley kini remaja dan emosi-emosi baru bermunculan dalam petualangan yang lebih dalam.',
        'studios' => [
            ['sid' => 'STD-001', 'sname' => 'Studio Regular', 'jam' => ['10:00', '18:00'], 'harga' => 'Rp 45.000']
        ]
    ],
    [
        'judul' => 'Superman Legacy 2', 'genre' => 'Action', 'durasi' => '138 menit',
        'sutradara' => 'James Gunn', 'rating' => 4.4, 'tahun' => 2025,
        'sinopsis' => 'Clark Kent menghadapi musuh baru yang mengancam keberadaan seluruh DCU.',
        'studios' => [
            ['sid' => 'STD-001', 'sname' => 'Studio Regular', 'jam' => ['21:00'], 'harga' => 'Rp 45.000']
        ]
    ],
    [
        'judul' => 'Transformers: New Era', 'genre' => 'Sci-Fi', 'durasi' => '142 menit',
        'sutradara' => 'Steven Caple Jr.', 'rating' => 4.2, 'tahun' => 2025,
        'sinopsis' => 'Generasi Autobot baru bangkit untuk menghadapi ancaman alien yang belum pernah ada sebelumnya.',
        'studios' => [
            ['sid' => 'STD-002', 'sname' => 'Studio IMAX', 'jam' => ['20:30', '23:30'], 'harga' => 'Rp 85.000']
        ]
    ],
    [
        'judul' => 'Oppenheimer 2', 'genre' => 'Drama', 'durasi' => '172 menit',
        'sutradara' => 'Christopher Nolan', 'rating' => 4.9, 'tahun' => 2025,
        'sinopsis' => 'Kisah lanjutan tentang dampak bom atom dan pergulatan moral para ilmuwan di era Perang Dingin.',
        'studios' => [
            ['sid' => 'STD-002', 'sname' => 'Studio IMAX', 'jam' => ['23:00'], 'harga' => 'Rp 85.000']
        ]
    ]
];

$tickets = [
    ['id' => 'TKT-00001', 'nama' => 'Ayla Azzura Putri', 'film' => 'Avengers: Secret Wars', 'sid' => 'STD-002', 'tipe' => 'IMAX', 'kursi' => 'A1', 'jadwal' => '10:00', 'jml' => 2, 'total' => 'Rp 170.000', 'status' => 'Confirmed'],
    ['id' => 'TKT-00002', 'nama' => 'Budi Santoso', 'film' => 'Dune: Messiah', 'sid' => 'STD-001', 'tipe' => 'Regular', 'kursi' => 'B2', 'jadwal' => '13:00', 'jml' => 1, 'total' => 'Rp 45.000', 'status' => 'Confirmed'],
    ['id' => 'TKT-00003', 'nama' => 'Citra Dewi', 'film' => 'Mission Impossible 9', 'sid' => 'STD-003', 'tipe' => 'Velvet', 'kursi' => 'C1', 'jadwal' => '15:30', 'jml' => 2, 'total' => 'Rp 260.000', 'status' => 'Confirmed'],
    ['id' => 'TKT-00004', 'nama' => 'Dani Firmansyah', 'film' => 'Inside Out 3', 'sid' => 'STD-001', 'tipe' => 'Regular', 'kursi' => 'A3', 'jadwal' => '18:00', 'jml' => 3, 'total' => 'Rp 135.000', 'status' => 'Pending'],
    ['id' => 'TKT-00005', 'nama' => 'Eka Rahayu', 'film' => 'Transformers', 'sid' => 'STD-002', 'tipe' => 'IMAX', 'kursi' => 'D1', 'jadwal' => '20:30', 'jml' => 1, 'total' => 'Rp 85.000', 'status' => 'Confirmed'],
    ['id' => 'TKT-00006', 'nama' => 'Fajar Nugroho', 'film' => 'Fast & Furious 12', 'sid' => 'STD-003', 'tipe' => 'Velvet', 'kursi' => 'A2', 'jadwal' => '18:00', 'jml' => 2, 'total' => 'Rp 260.000', 'status' => 'Cancelled'],
    ['id' => 'TKT-00007', 'nama' => 'Gita Puspita', 'film' => 'Superman Legacy 2', 'sid' => 'STD-001', 'tipe' => 'Regular', 'kursi' => 'E1', 'jadwal' => '10:00', 'jml' => 1, 'total' => 'Rp 45.000', 'status' => 'Confirmed'],
    ['id' => 'TKT-00008', 'nama' => 'Hendra Wijaya', 'film' => 'Oppenheimer 2', 'sid' => 'STD-002', 'tipe' => 'IMAX', 'kursi' => 'B1', 'jadwal' => '23:00', 'jml' => 3, 'total' => 'Rp 255.000', 'status' => 'Pending'],
    ['id' => 'TKT-00009', 'nama' => 'Indah Permata', 'film' => 'Avengers: Secret Wars', 'sid' => 'STD-003', 'tipe' => 'Velvet', 'kursi' => 'D2', 'jadwal' => '15:30', 'jml' => 1, 'total' => 'Rp 130.000', 'status' => 'Confirmed'],
    ['id' => 'TKT-00010', 'nama' => 'Joko Susilo', 'film' => 'Dune: Messiah', 'sid' => 'STD-001', 'tipe' => 'Regular', 'kursi' => 'C2', 'jadwal' => '13:00', 'jml' => 2, 'total' => 'Rp 90.000', 'status' => 'Confirmed'],
];


function get_stars($rating) {
    $floor = floor($rating);
    $stars = str_repeat('★', $floor);
    if (($rating - $floor) >= 0.5) {
        $stars .= '½';
    }
    return $stars;
}

function render_studio_card($s) {
    ob_start(); ?>
    <div class="card <?php echo $s['tc']; ?>">
        <div class="card-hdr">
            <div class="cname">
                <i class="ti ti-building" aria-hidden="true" style="font-size:17px;color:<?php echo $s['dot']; ?>"></i>
                <?php echo $s['name']; ?> <span class="badge <?php echo $s['bc']; ?>"><?php echo $s['bt']; ?></span>
            </div>
            <span class="rev">Pendapatan: <?php echo $s['rev']; ?></span>
        </div>
        <div class="agrid">
            <div class="ar"><span class="al">Kategori</span><span class="av"><?php echo $s['kategori']; ?></span></div>
            <div class="ar"><span class="al">Studio ID</span><span class="av"><?php echo $s['id']; ?></span></div>
            <div class="ar"><span class="al">Kapasitas</span><span class="av"><?php echo $s['kap']; ?> kursi</span></div>
            <div class="ar"><span class="al">Harga Dasar</span><span class="av"><?php echo $s['harga']; ?>/tiket</span></div>
            <div class="ar"><span class="al">Layar</span><span class="av"><?php echo $s['layar']; ?></span></div>
            <div class="ar"><span class="al">Sistem Suara</span><span class="av"><?php echo $s['suara']; ?></span></div>
            <div class="ar"><span class="al">Jenis Kursi</span><span class="av"><?php echo $s['kursi']; ?></span></div>
            <div class="ar"><span class="al">Fasilitas</span><span class="av" style="font-size:11px"><?php echo $s['fas']; ?></span></div>
        </div>
        <div class="utag">&#9733; <?php echo $s['uLbl']; ?>: <span><?php echo $s['uVal']; ?></span></div>
        <div class="slbl">Film Hari Ini</div>
        <div>
            <?php foreach ($s['films'] as $f): ?>
                <div class="film-row">
                    <span class="ftitle"><?php echo $f['j']; ?></span>
                    <div class="times">
                        <?php foreach ($f['t'] as $t): ?>
                            <span class="tc"><?php echo $t; ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php
    return ob_get_clean();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard — AyyCinema</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
<style>
*{box-sizing:border-box;margin:0;padding:0}
body{font-family:'Segoe UI',sans-serif;background:#f0ede6;color:#2c2c2a;min-height:100vh}
.hdr{background:#26215C;color:white;padding:12px 24px;display:flex;align-items:center;gap:10px}
.logo{width:36px;height:36px;background:#7F77DD;border-radius:8px;display:flex;align-items:center;justify-content:center;font-weight:600;font-size:15px;color:white;flex-shrink:0}
.hdr-t{font-size:16px;font-weight:600}
.hdr-s{font-size:12px;opacity:.6}
.main{max-width:1100px;margin:0 auto;padding:20px}
.stats{display:grid;grid-template-columns:repeat(5,1fr);gap:10px;margin-bottom:20px}
.stat{background:white;border-radius:10px;padding:12px 16px;border:0.5px solid #d3d1c7}
.stat .lbl{font-size:11px;color:#5f5e5a;margin-bottom:4px}
.stat .val{font-size:20px;font-weight:600}
.stat .val.g{color:#0F6E56;font-size:14px;padding-top:3px}
.nav{display:flex;gap:0;border-bottom:0.5px solid #d3d1c7;margin-bottom:16px;background:white;border-radius:10px 10px 0 0;padding:0 8px;border:0.5px solid #d3d1c7;border-bottom:none;overflow-x:auto}
.ntab{padding:10px 14px;font-size:13px;cursor:pointer;border:none;background:none;color:#5f5e5a;border-bottom:2px solid transparent;white-space:nowrap;display:flex;align-items:center;gap:6px;font-family:inherit}
.ntab:hover{color:#2c2c2a}
.ntab.on{color:#26215C;border-bottom-color:#7F77DD;font-weight:600}
.dot{width:8px;height:8px;border-radius:50%;flex-shrink:0}
.pnl{display:none}.pnl.on{display:block}
.card{background:white;border:0.5px solid #d3d1c7;border-radius:12px;padding:16px 20px;margin-bottom:12px}
.card.t-reg{border-top:3px solid #1D9E75}
.card.t-imax{border-top:3px solid #378ADD}
.card.t-velv{border-top:3px solid #7F77DD}
.card-hdr{display:flex;align-items:center;justify-content:space-between;margin-bottom:12px}
.cname{font-size:15px;font-weight:600;color:#26215C;display:flex;align-items:center;gap:8px}
.badge{font-size:10px;padding:2px 8px;border-radius:4px;font-weight:500}
.b-reg{background:#E1F5EE;color:#085041}
.b-imax{background:#E6F1FB;color:#0C447C}
.b-velv{background:#EEEDFE;color:#3C3489}
.b-action{background:#FAEEDA;color:#633806}
.b-drama{background:#FBEAF0;color:#72243E}
.b-scifi{background:#E6F1FB;color:#0C447C}
.b-animation{background:#EAF3DE;color:#27500A}
.rev{font-size:12px;font-weight:600;color:#0F6E56;background:#E1F5EE;padding:4px 10px;border-radius:6px}
.agrid{display:grid;grid-template-columns:1fr 1fr;gap:0 20px;font-size:12px;margin-bottom:12px}
.ar{display:flex;justify-content:space-between;padding:4px 0;border-bottom:0.5px solid #f1efe8}
.al{color:#5f5e5a}
.av{color:#2c2c2a;font-weight:500;text-align:right;max-width:200px}
.utag{background:#f1efe8;border-radius:6px;padding:6px 10px;font-size:11px;color:#5f5e5a;margin-bottom:12px}
.utag span{color:#26215C;font-weight:600}
.slbl{font-size:11px;font-weight:600;color:#5f5e5a;margin-bottom:6px;text-transform:uppercase;letter-spacing:.4px}
.film-row{display:flex;justify-content:space-between;align-items:center;padding:5px 0;border-bottom:0.5px solid #f1efe8;font-size:12px}
.film-row:last-child{border-bottom:none}
.ftitle{color:#26215C;font-weight:600}
.times{display:flex;gap:4px;flex-wrap:wrap;justify-content:flex-end}
.tc{background:#e8e6df;color:#5f5e5a;padding:2px 6px;border-radius:4px;font-size:11px}
.film-card{background:white;border:0.5px solid #d3d1c7;border-radius:12px;padding:16px 20px;margin-bottom:12px}
.film-card-hdr{display:flex;justify-content:space-between;align-items:flex-start;margin-bottom:10px}
.film-title-big{font-size:15px;font-weight:600;color:#26215C;margin-bottom:4px}
.film-meta{font-size:11px;color:#5f5e5a;display:flex;gap:10px;flex-wrap:wrap;align-items:center}
.film-info-grid{display:grid;grid-template-columns:1fr 1fr;gap:0 20px;font-size:12px;margin-bottom:10px}
.sinopsis{font-size:12px;color:#5f5e5a;margin-bottom:10px;line-height:1.6}
.jadwal-list{display:flex;flex-direction:column;gap:4px}
.jadwal-item{display:flex;align-items:center;justify-content:space-between;padding:6px 10px;background:#f1efe8;border-radius:6px;font-size:11px}
.jadwal-studio{color:#5f5e5a;display:flex;align-items:center;gap:4px}
.jadwal-times{display:flex;gap:3px;flex-wrap:wrap}
.tbwrap{background:white;border-radius:12px;border:0.5px solid #d3d1c7;overflow:hidden}
.frow{display:flex;gap:6px;margin-bottom:12px;flex-wrap:wrap}
.fbtn{padding:5px 12px;border:0.5px solid #d3d1c7;border-radius:6px;font-size:11px;cursor:pointer;background:white;color:#5f5e5a;font-family:inherit}
.fbtn:hover{background:#f1efe8}
.fbtn.on{background:#26215C;color:white;border-color:#26215C}
table{width:100%;border-collapse:collapse;font-size:12px}
th{background:#f1efe8;padding:9px 12px;text-align:left;font-size:11px;font-weight:500;color:#5f5e5a}
td{padding:9px 12px;border-bottom:0.5px solid #f1efe8;color:#2c2c2a}
.chip{display:inline-block;padding:2px 7px;border-radius:4px;font-size:11px;font-weight:500}
.chip-ok{background:#EAF3DE;color:#27500A}
.chip-wait{background:#FAEEDA;color:#633806}
.chip-no{background:#FCEBEB;color:#791F1F}
.chip-regular{background:#E1F5EE;color:#085041}
.chip-imax{background:#E6F1FB;color:#0C447C}
.chip-velvet{background:#EEEDFE;color:#3C3489}
.tbar{background:#f1efe8;padding:10px 16px;display:flex;justify-content:space-between;font-size:12px;color:#5f5e5a;border-top:0.5px solid #d3d1c7}
.rating-bar{display:flex;align-items:center;gap:5px;font-size:12px}
.stars{color:#BA7517;font-size:14px}
footer{text-align:center;padding:20px;font-size:12px;color:#888780}
@media(max-width:700px){
  .stats{grid-template-columns:1fr 1fr}
  .agrid{grid-template-columns:1fr}
  .film-info-grid{grid-template-columns:1fr}
  .film-card-hdr{flex-direction:column;gap:8px}
}
</style>
</head>
<body>

<div class="hdr">
  <div class="logo">AC</div>
  <div>
    <div class="hdr-t">AyyCinema</div>
   
  </div>
</div>

<div class="main">
  <div class="stats">
    <div class="stat"><div class="lbl">Total Tiket</div><div class="val"><?php echo count($tickets); ?></div></div>
    <div class="stat">
        <div class="lbl">Terkonfirmasi</div>
        <div class="val">
            <?php 
            echo count(array_filter($tickets, function($t) { return $t['status'] === 'Confirmed'; })); 
            ?>
        </div>
    </div>
    <div class="stat"><div class="lbl">Pendapatan</div><div class="val g">Rp 1.455.000</div></div>
    <div class="stat"><div class="lbl">Studio Aktif</div><div class="val"><?php echo count($studios); ?></div></div>
    <div class="stat"><div class="lbl">Film Tayang</div><div class="val"><?php echo count($films); ?></div></div>
  </div>

  <div class="nav">
    <button class="ntab on" onclick="sw('all',this)"><span class="dot" style="background:#888"></span>Semua Studio</button>
    <button class="ntab" onclick="sw('reg',this)"><span class="dot" style="background:#1D9E75"></span>Regular</button>
    <button class="ntab" onclick="sw('imax',this)"><span class="dot" style="background:#378ADD"></span>IMAX</button>
    <button class="ntab" onclick="sw('velv',this)"><span class="dot" style="background:#7F77DD"></span>Velvet</button>
    <button class="ntab" onclick="sw('films',this)"><span class="dot" style="background:#D85A30"></span>Film</button>
    <button class="ntab" onclick="sw('tickets',this)"><span class="dot" style="background:#BA7517"></span>Tiket</button>
  </div>

  <!-- PANEL STUDIO -->
  <div id="p-all" class="pnl on">
    <div id="c-reg-a"><?php echo render_studio_card($studios[0]); ?></div>
    <div id="c-imax-a"><?php echo render_studio_card($studios[1]); ?></div>
    <div id="c-velv-a"><?php echo render_studio_card($studios[2]); ?></div>
  </div>
  <div id="p-reg" class="pnl"><div id="c-reg-s"><?php echo render_studio_card($studios[0]); ?></div></div>
  <div id="p-imax" class="pnl"><div id="c-imax-s"><?php echo render_studio_card($studios[1]); ?></div></div>
  <div id="p-velv" class="pnl"><div id="c-velv-s"><?php echo render_studio_card($studios[2]); ?></div></div>

  <!-- PANEL FILMS -->
  <div id="p-films" class="pnl">
    <div class="frow" id="film-filters">
      <button class="fbtn on" onclick="filterFilms('all',this)">Semua</button>
      <button class="fbtn" onclick="filterFilms('STD-001',this)">Regular</button>
      <button class="fbtn" onclick="filterFilms('STD-002',this)">IMAX</button>
      <button class="fbtn" onclick="filterFilms('STD-003',this)">Velvet</button>
      <button class="fbtn" onclick="filterFilms('Action',this)">Action</button>
      <button class="fbtn" onclick="filterFilms('Sci-Fi',this)">Sci-Fi</button>
      <button class="fbtn" onclick="filterFilms('Drama',this)">Drama</button>
      <button class="fbtn" onclick="filterFilms('Animation',this)">Animation</button>
    </div>
    <div id="film-list"></div>
  </div>

  <!-- PANEL TICKETS -->
  <div id="p-tickets" class="pnl">
    <div class="frow" id="tix-filters">
      <button class="fbtn on" onclick="filterTix('all',this)">Semua</button>
      <button class="fbtn" onclick="filterTix('STD-001',this)">Regular</button>
      <button class="fbtn" onclick="filterTix('STD-002',this)">IMAX</button>
      <button class="fbtn" onclick="filterTix('STD-003',this)">Velvet</button>
      <button class="fbtn" onclick="filterTix('Confirmed',this)">Confirmed</button>
      <button class="fbtn" onclick="filterTix('Pending',this)">Pending</button>
      <button class="fbtn" onclick="filterTix('Cancelled',this)">Cancelled</button>
    </div>
    <div class="tbwrap">
      <table>
        <thead>
          <tr>
            <th>ID Tiket</th><th>Nama Penonton</th><th>Film</th>
            <th>Studio</th><th>Kursi</th><th>Jadwal</th>
            <th>Jumlah</th><th>Total Harga</th><th>Status</th>
          </tr>
        </thead>
        <tbody id="tix-tbody"></tbody>
      </table>
      <div id="tix-bar" class="tbar"></div>
    </div>
  </div>
</div>

<footer>Dashboard Tiket Bioskop 2026 — Pemrograman Berorientasi Objek</footer>

<script>

const films = <?php echo json_encode($films); ?>;
const tickets = <?php echo json_encode($tickets); ?>;

function stars(r) {
  return '★'.repeat(Math.floor(r)) + (r % 1 >= .5 ? '½' : '');
}

function genreClass(g) {
  return 'b-' + g.toLowerCase().replace('-','').replace(' ','');
}

function buildFilmCard(f) {
  return `<div class="film-card">
    <div class="film-card-hdr">
      <div>
        <div class="film-title-big">${f.judul}</div>
        <div class="film-meta">
          <span>${f.tahun}</span>
          <span>${f.durasi}</span>
          <span class="badge ${genreClass(f.genre)}">${f.genre}</span>
        </div>
      </div>
      <div class="rating-bar">
        <span class="stars">${stars(f.rating)}</span>
        <span style="font-size:13px;font-weight:600">${f.rating}</span>
      </div>
    </div>
    <div class="film-info-grid">
      <div class="ar"><span class="al">Sutradara</span><span class="av">${f.sutradara}</span></div>
      <div class="ar"><span class="al">Durasi</span><span class="av">${f.durasi}</span></div>
    </div>
    <div class="sinopsis">${f.sinopsis}</div>
    <div class="slbl">Jadwal Tayang</div>
    <div class="jadwal-list">
      ${f.studios.map(st => `<div class="jadwal-item">
        <span class="jadwal-studio">
          <i class="ti ti-building" aria-hidden="true" style="font-size:13px"></i>
          ${st.sname} &mdash; ${st.harga}
        </span>
        <div class="jadwal-times">${st.jam.map(j => `<span class="tc">${j}</span>`).join('')}</div>
      </div>`).join('')}
    </div>
  </div>`;
}

let filmFilter = 'all';
function renderFilms() {
  let list = films;
  if (filmFilter !== 'all') {
    if (filmFilter.startsWith('STD')) {
      list = films.filter(f => f.studios.some(s => s.sid === filmFilter));
    } else {
      list = films.filter(f => f.genre === filmFilter);
    }
  }
  document.getElementById('film-list').innerHTML = list.length
    ? list.map(buildFilmCard).join('')
    : '<div style="padding:24px;text-align:center;color:#5f5e5a;font-size:13px">Tidak ada film ditemukan.</div>';
}
function filterFilms(f, btn) {
  filmFilter = f;
  document.querySelectorAll('#film-filters .fbtn').forEach(b => b.classList.remove('on'));
  btn.classList.add('on');
  renderFilms();
}
renderFilms();

let tixFilter = 'all';
function renderTix() {
  let rows = tickets;
  if (tixFilter !== 'all') {
    if (['STD-001','STD-002','STD-003'].includes(tixFilter)) {
      rows = tickets.filter(t => t.sid === tixFilter);
    } else {
      rows = tickets.filter(t => t.status === tixFilter);
    }
  }
  document.getElementById('tix-tbody').innerHTML = rows.map(t => {
    const sc = t.status === 'Confirmed' ? 'chip-ok' : t.status === 'Pending' ? 'chip-wait' : 'chip-no';
    return `<tr>
      <td style="font-family:monospace;font-size:10px;color:#888">${t.id}</td>
      <td>${t.nama}</td>
      <td style="font-size:11px">${t.film}</td>
      <td><span class="chip chip-${t.tipe.toLowerCase()}">${t.tipe}</span></td>
      <td>${t.kursi}</td>
      <td>${t.jadwal} WIB</td>
      <td style="text-align:center">${t.jml}x</td>
      <td style="font-weight:600">${t.total}</td>
      <td><span class="chip ${sc}">${t.status}</span></td>
    </tr>`;
  }).join('');
  const conf = rows.filter(t => t.status === 'Confirmed').length;
  document.getElementById('tix-bar').innerHTML =
    `<span>${rows.length} tiket ditampilkan</span><span style="font-weight:600;color:#2c2c2a">${conf} confirmed</span>`;
}
function filterTix(f, btn) {
  tixFilter = f;
  document.querySelectorAll('#tix-filters .fbtn').forEach(b => b.classList.remove('on'));
  btn.classList.add('on');
  renderTix();
}
renderTix();

function sw(key, btn) {
  document.querySelectorAll('.pnl').forEach(p => p.classList.remove('on'));
  document.querySelectorAll('.ntab').forEach(t => t.classList.remove('on'));
  document.getElementById('p-' + key).classList.add('on');
  btn.classList.add('on');
}
</script>
</body>
</html>
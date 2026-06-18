<?php
// File: index.php

require_once __DIR__ . '/database.php';
require_once __DIR__ . '/pendaftaran.php';
require_once __DIR__ . '/pendaftaran_reguler.php';
require_once __DIR__ . '/pendaftaran_prestasi.php';
require_once __DIR__ . '/pendaftaran_kedinasan.php';

$database = new Database();
$db = $database->getConnection();

$daftarReguler   = pendaftaran_reguler::getDaftarReguler($db);
$daftarPrestasi  = pendaftaran_prestasi::getDaftarPrestasi($db);
$daftarKedinasan = pendaftaran_kedinasan::getDaftarKedinasan($db);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Pendaftaran Mahasiswa Baru</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; background-color: #f4f6f9; color: #333; }
        h1 { text-align: center; color: #2c3e50; margin-bottom: 30px; }
        h2 { color: #2980b9; border-bottom: 2px solid #2980b9; padding-bottom: 5px; margin-top: 40px; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; background: #fff; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        th, td { padding: 12px 15px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background-color: #34495e; color: white; }
        tr:hover { background-color: #f1f1f1; }
        .text-right { text-align: right; }
        .badge { display: inline-block; padding: 5px 10px; background: #e0e0e0; border-radius: 4px; font-size: 12px; }
    </style>
</head>
<body>

    <h1>Daftar Pendaftaran Mahasiswa Baru</h1>

    <h2>1. Kategori Jalur Reguler</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Calon</th>
                <th>Asal Sekolah</th>
                <th>Nilai Ujian</th>
                <th>Informasi Spesifik Jalur</th>
                <th class="text-right">Biaya Dasar</th>
                <th class="text-right">Total Biaya Akhir</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($daftarReguler)): ?>
                <tr><td colspan="7" style="text-align:center;">Tidak ada data jalur reguler.</td></tr>
            <?php else: ?>
                <?php foreach ($daftarReguler as $mhs): ?>
                    <tr>
                        <td><?= $mhs->getIdPendaftaran(); ?></td>
                        <td><strong><?= $mhs->getNamaCalon(); ?></strong></td>
                        <td><?= $mhs->getAsalSekolah(); ?></td>
                        <td><?= $mhs->getNilaiUjian(); ?></td>
                        <td><span class="badge"><?= $mhs->tampilkanInfoJalur(); ?></span></td>
                        <td class="text-right">Rp <?= number_format($mhs->getBiayaPendaftaranDasar(), 2, ',', '.'); ?></td>
                        <td class="text-right"><strong>Rp <?= number_format($mhs->hitungTotalBiaya(), 2, ',', '.'); ?></strong></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>

    <h2>2. Kategori Jalur Prestasi</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Calon</th>
                <th>Asal Sekolah</th>
                <th>Nilai Ujian</th>
                <th>Informasi Spesifik Jalur</th>
                <th class="text-right">Biaya Dasar</th>
                <th class="text-right">Total Biaya Akhir (Potongan Rp50rb)</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($daftarPrestasi)): ?>
                <tr><td colspan="7" style="text-align:center;">Tidak ada data jalur prestasi.</td></tr>
            <?php else: ?>
                <?php foreach ($daftarPrestasi as $mhs): ?>
                    <tr>
                        <td><?= $mhs->getIdPendaftaran(); ?></td>
                        <td><strong><?= $mhs->getNamaCalon(); ?></strong></td>
                        <td><?= $mhs->getAsalSekolah(); ?></td>
                        <td><?= $mhs->getNilaiUjian(); ?></td>
                        <td><span class="badge" style="background-color: #d4edda; color: #155724;"><?= $mhs->tampilkanInfoJalur(); ?></span></td>
                        <td class="text-right">Rp <?= number_format($mhs->getBiayaPendaftaranDasar(), 2, ',', '.'); ?></td>
                        <td class="text-right" style="color: #27ae60;"><strong>Rp <?= number_format($mhs->hitungTotalBiaya(), 2, ',', '.'); ?></strong></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>

    <h2>3. Kategori Jalur Kedinasan</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Calon</th>
                <th>Asal Sekolah</th>
                <th>Nilai Ujian</th>
                <th>Informasi Spesifik Jalur</th>
                <th class="text-right">Biaya Dasar</th>
                <th class="text-right">Total Biaya Akhir (+ Surcharge 25%)</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($daftarKedinasan)): ?>
                <tr><td colspan="7" style="text-align:center;">Tidak ada data jalur kedinasan.</td></tr>
            <?php else: ?>
                <?php foreach ($daftarKedinasan as $mhs): ?>
                    <tr>
                        <td><?= $mhs->getIdPendaftaran(); ?></td>
                        <td><strong><?= $mhs->getNamaCalon(); ?></strong></td>
                        <td><?= $mhs->getAsalSekolah(); ?></td>
                        <td><?= $mhs->getNilaiUjian(); ?></td>
                        <td><span class="badge" style="background-color: #fff3cd; color: #856404;"><?= $mhs->tampilkanInfoJalur(); ?></span></td>
                        <td class="text-right">Rp <?= number_format($mhs->getBiayaPendaftaranDasar(), 2, ',', '.'); ?></td>
                        <td class="text-right" style="color: #c0392b;"><strong>Rp <?= number_format($mhs->hitungTotalBiaya(), 2, ',', '.'); ?></strong></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>

</body>
</html>
<?php
// File: pendaftaran_prestasi.php
require_once 'pendaftaran.php';

class pendaftaran_prestasi extends pendaftaran {
    private $jenisPrestasi;
    private $tingkatPrestasi;

    public function __construct($id_pendaftaran, $nama_calon, $asal_sekolah, $nilai_ujian, $biayaPendaftaranDasar, $jenisPrestasi = null, $tingkatPrestasi = null) {
        parent::__construct($id_pendaftaran, $nama_calon, $asal_sekolah, $nilai_ujian, $biayaPendaftaranDasar);
        $this->jenisPrestasi = $jenisPrestasi;
        $this->tingkatPrestasi = $tingkatPrestasi;
    }

    public static function getDaftarPrestasi($db) {
        $query = "SELECT id_pendaftaran, nama_calon, asal_sekolah, nilai_ujian, biaya_pendaftaran_dasar, jenis_prestasi, tingkat_prestasi 
                  FROM tabel_pendaftaran WHERE jalur_pendaftaran = 'Prestasi'";
        
        $stmt = $db->prepare($query);
        $stmt->execute();
        
        $daftarPrestasi = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $daftarPrestasi[] = new pendaftaran_prestasi(
                $row['id_pendaftaran'],
                $row['nama_calon'],
                $row['asal_sekolah'],
                $row['nilai_ujian'],
                $row['biaya_pendaftaran_dasar'],
                $row['jenis_prestasi'],
                $row['tingkat_prestasi']
            );
        }
        return $daftarPrestasi;
    }

    public function hitungTotalBiaya() {
        return $this->biayaPendaftaranDasar - 50000; // Diskon prestasi Rp50.000
    }

    public function tampilkanInfoJalur() {
        return "Prestasi: " . $this->jenisPrestasi . " (" . $this->tingkatPrestasi . ")";
    }
}
?>
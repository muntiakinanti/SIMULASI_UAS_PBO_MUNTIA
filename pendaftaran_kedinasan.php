<?php
// File: pendaftaran_kedinasan.php
require_once 'pendaftaran.php';

class pendaftaran_kedinasan extends pendaftaran {
    private $skIkatanDinas;
    private $instansiSponsor;

    public function __construct($id_pendaftaran, $nama_calon, $asal_sekolah, $nilai_ujian, $biayaPendaftaranDasar, $skIkatanDinas = null, $instansiSponsor = null) {
        parent::__construct($id_pendaftaran, $nama_calon, $asal_sekolah, $nilai_ujian, $biayaPendaftaranDasar);
        $this->skIkatanDinas = $skIkatanDinas;
        $this->instansiSponsor = $instansiSponsor;
    }

    public static function getDaftarKedinasan($db) {
        $query = "SELECT id_pendaftaran, nama_calon, asal_sekolah, nilai_ujian, biaya_pendaftaran_dasar, sk_ikatan_dinas, instansi_sponsor 
                  FROM tabel_pendaftaran WHERE jalur_pendaftaran = 'Kedinasan'";
        
        $stmt = $db->prepare($query);
        $stmt->execute();
        
        $daftarKedinasan = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $daftarKedinasan[] = new pendaftaran_kedinasan(
                $row['id_pendaftaran'],
                $row['nama_calon'],
                $row['asal_sekolah'],
                $row['nilai_ujian'],
                $row['biaya_pendaftaran_dasar'],
                $row['sk_ikatan_dinas'],
                $row['instansi_sponsor']
            );
        }
        return $daftarKedinasan;
    }

    public function hitungTotalBiaya() {
        return $this->biayaPendaftaranDasar * 1.25; // Surcharge administrasi dinas 25%
    }

    public function tampilkanInfoJalur() {
        return "SK: " . $this->skIkatanDinas . " | Sponsor: " . $this->instansiSponsor;
    }
}
?>
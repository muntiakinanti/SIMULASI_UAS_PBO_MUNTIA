<?php
// File: pendaftaran.php

abstract class Pendaftaran {
    // Properti/Atribut Terenkapsulasi (protected)
    protected $id_pendaftaran;
    protected $nama_calon;
    protected $asal_sekolah;
    protected $nilai_ujian;
    protected $biayaPendaftaranDasar;

    // Konstruktor untuk memetakan data dari kolom tabel database
    public function __construct($id_pendaftaran, $nama_calon, $asal_sekolah, $nilai_ujian, $biayaPendaftaranDasar) {
        $this->id_pendaftaran = $id_pendaftaran;
        $this->nama_calon = $nama_calon;
        $this->asal_sekolah = $asal_sekolah;
        $this->nilai_ujian = $nilai_ujian;
        $this->biayaPendaftaranDasar = $biayaPendaftaranDasar;
    }

    // Metode Abstrak (Wajib diimplementasikan oleh kelas anak/subclass)
    abstract public function hitungTotalBiaya();
    abstract public function tampilkanInfoJalur();

    // Getter tambahan (opsional) jika properti perlu diakses di luar kelas/subclass
    public function getIdPendaftaran() {
        return $this->id_pendaftaran;
    }

    public function getNamaCalon() {
        return $this->nama_calon;
    }
}
?>
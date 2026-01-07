<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$id_poli = $_POST['poli'];
$tanggal = date('Y-m-d');

// 1. Konversi Hari Inggris ke Indonesia
$hari_inggris = date('l'); 
$kamus_hari = [
    'Sunday' => 'Minggu', 'Monday' => 'Senin', 'Tuesday' => 'Selasa',
    'Wednesday' => 'Rabu', 'Thursday' => 'Kamis', 'Friday' => 'Jumat', 'Saturday' => 'Sabtu'
];
$hari_ini = $kamus_hari[$hari_inggris];

// 2. CEK JADWAL: Apakah ada dokter di Poli tersebut pada Hari ini?
// Kita join tabel jadwal -> dokter -> poli
$cek_jadwal = mysqli_query($koneksi, "
    SELECT * FROM jadwal_dokter 
    JOIN dokter ON jadwal_dokter.id_dokter = dokter.id_dokter 
    WHERE dokter.id_poli = '$id_poli' AND jadwal_dokter.hari = '$hari_ini'
");

// Jika hasil 0, berarti TUTUP/Tidak ada dokter
if(mysqli_num_rows($cek_jadwal) == 0){
    echo "<script>
        alert('Maaf! Dokter untuk Poli ini TIDAK TERSEDIA pada hari $hari_ini. Silakan cek menu Jadwal Dokter.');
        window.location = 'daftar_antrian.php';
    </script>";
    exit(); // Stop proses coding di bawahnya
}

// --- JIKA LOLOS VALIDASI, LANJUT PROSES BAWAH INI (SAMA SEPERTI SEBELUMNYA) ---

$q_poli = mysqli_query($koneksi, "SELECT kode_poli FROM poli WHERE id_poli = '$id_poli'");
$d_poli = mysqli_fetch_array($q_poli);
$kode_poli = $d_poli['kode_poli'];

$q_cek = mysqli_query($koneksi, "SELECT MAX(nomor_antrian) as max_no FROM antrian WHERE id_poli='$id_poli' AND tanggal='$tanggal'");
$d_cek = mysqli_fetch_array($q_cek);
$max_no = $d_cek['max_no'];

if($max_no != null){
    $urut = (int) substr($max_no, 2, 3);
    $urut++;
} else {
    $urut = 1;
}

$nomor_baru = $kode_poli . "-" . sprintf("%03s", $urut);

$simpan = mysqli_query($koneksi, "INSERT INTO antrian (id_poli, nama_pasien, nomor_antrian, tanggal) VALUES ('$id_poli', '$nama', '$nomor_baru', '$tanggal')");

if($simpan){
    $id_antrian = mysqli_insert_id($koneksi);
    header("location:cetak_antrian.php?id=$id_antrian");
}
?>
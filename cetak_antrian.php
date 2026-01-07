<?php 
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM antrian JOIN poli ON antrian.id_poli = poli.id_poli WHERE antrian.id = '$id'");
$d = mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <title>Tiket Antrian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { background-color: #f4f6f9; }
        .tiket-container { 
            background: white; 
            border: 2px dashed #0d6efd; /* Garis putus-putus biru */
            border-radius: 15px;
            padding: 30px; 
            width: 350px; 
            margin: 50px auto; 
            text-align: center; 
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            position: relative;
        }
        .cut-circle {
            position: absolute;
            width: 30px;
            height: 30px;
            background-color: #f4f6f9; /* Sama dengan bg body */
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
        }
        .cut-left { left: -15px; border-right: 2px dashed #0d6efd; }
        .cut-right { right: -15px; border-left: 2px dashed #0d6efd; }

        @media print { 
            body { background-color: white; }
            .no-print { display: none; } 
            .tiket-container { box-shadow: none; border: 2px solid #000; margin-top: 0; }
        }
    </style>
</head>
<body>

    <div class="tiket-container">
        <div class="cut-circle cut-left"></div>
        <div class="cut-circle cut-right"></div>

        <h4 class="fw-bold text-primary mb-1">KLINIK ANTI SAWIT</h4>
        <p class="text-muted small mb-3">Jl. Kebenaran No. 1, Jakarta kali</p>
        
        <div class="border-top border-bottom py-3 my-3">
            <small class="text-uppercase text-muted">Nomor Antrian Anda</small>
            <h1 class="display-2 fw-bold text-dark my-2"><?php echo $d['nomor_antrian']; ?></h1>
            <span class="badge bg-primary fs-6"><?php echo $d['nama_poli']; ?></span>
        </div>

        <div class="text-start ps-3">
            <p class="mb-1"><small class="text-muted">Nama Pasien:</small><br> <strong><?php echo $d['nama_pasien']; ?></strong></p>
            <p class="mb-0"><small class="text-muted">Waktu Daftar:</small><br> <?php echo date('d M Y, H:i', strtotime($d['waktu_daftar'])); ?></p>
        </div>
        
        <div class="mt-4 no-print">
            <p class="small text-muted fst-italic">Silakan screenshot atau cetak tiket ini</p>
            <button onclick="window.print()" class="btn btn-primary w-100 mb-2"><i class="fas fa-print me-2"></i> Cetak Tiket</button>
            <a href="index.php" class="btn btn-outline-secondary w-100">Kembali ke Menu</a>
        </div>
    </div>

</body>
</html>
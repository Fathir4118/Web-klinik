<?php
session_start();
if($_SESSION['status'] != "login"){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Klinik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { background-color: #f4f6f9; }
        .navbar { background: linear-gradient(to right, #0061f2, #00c6ff); box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        
        .menu-card {
            border: none;
            border-radius: 15px;
            transition: all 0.3s ease;
            background: white;
            cursor: pointer;
            height: 100%;
        }
        .menu-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        .icon-circle {
            width: 80px;
            height: 80px;
            background-color: #e6f0ff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px auto;
            color: #0061f2;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#"><i class="fas fa-heartbeat me-2"></i>KLINIK ANTI SAWIT</a>
            <div class="d-flex align-items-center text-white">
                <span class="me-3 d-none d-md-block">Halo, <b><?php echo ucfirst($_SESSION['username']); ?></b></span>
                <a href="logout.php" class="btn btn-outline-light btn-sm rounded-pill px-3">Logout <i class="fas fa-sign-out-alt ms-1"></i></a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-primary">Menu Utama</h2>
            <p class="text-muted">Silakan pilih layanan yang tersedia</p>
        </div>

        <div class="row justify-content-center">
            
            <div class="col-md-4 col-lg-3 mb-4">
                <a href="daftar_antrian.php" class="text-decoration-none text-dark">
                    <div class="card menu-card p-4 text-center shadow-sm">
                        <div class="icon-circle">
                            <i class="fas fa-file-medical fa-2x"></i>
                        </div>
                        <h5 class="fw-bold">Ambil Antrian</h5>
                        <p class="text-muted small mb-0">Daftar poli umum/gigi untuk hari ini</p>
                    </div>
                </a>
            </div>

            <div class="col-md-4 col-lg-3 mb-4">
                <a href="jadwal.php" class="text-decoration-none text-dark">
                    <div class="card menu-card p-4 text-center shadow-sm">
                        <div class="icon-circle text-info" style="background-color: #e0f7fa; color: #00bcd4;">
                            <i class="fas fa-user-md fa-2x"></i>
                        </div>
                        <h5 class="fw-bold">Jadwal Dokter</h5>
                        <p class="text-muted small mb-0">Cek ketersediaan dokter</p>
                    </div>
                </a>
            </div>

            <div class="col-md-4 col-lg-3 mb-4">
                <a href="informasi.php" class="text-decoration-none text-dark">
                    <div class="card menu-card p-4 text-center shadow-sm">
                        <div class="icon-circle text-warning" style="background-color: #fff8e1; color: #ffc107;">
                            <i class="fas fa-info-circle fa-2x"></i>
                        </div>
                        <h5 class="fw-bold">Informasi</h5>
                        <p class="text-muted small mb-0">Bantuan & layanan</p>
                    </div>
                </a>
            </div>

        </div>
    </div>

</body>
</html>
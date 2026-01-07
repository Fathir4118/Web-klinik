<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Ambil Antrian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { background-color: #f4f6f9; }
        .card-form { border: none; border-radius: 15px; box-shadow: 0 10px 20px rgba(0,0,0,0.05); }
        .header-form { border-radius: 15px 15px 0 0; background: linear-gradient(to right, #0061f2, #00c6ff); color: white; padding: 20px; }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card card-form">
                    <div class="header-form text-center">
                        <h4 class="mb-0"><i class="fas fa-edit me-2"></i>Form Pendaftaran</h4>
                    </div>
                    <div class="card-body p-4">
                        <form action="proses_daftar.php" method="POST">
                            
                            <div class="mb-3">
                                <label class="form-label fw-bold">Nama Lengkap Pasien</label>
                                <input type="text" name="nama" class="form-control form-control-lg bg-light border-0" placeholder="Sesuai KTP/BPJS" required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-bold">Pilih Poli Tujuan</label>
                                <select name="poli" class="form-select form-select-lg bg-light border-0" required>
                                    <option value="" selected disabled>-- Pilih Layanan --</option>
                                    <?php
                                    $data = mysqli_query($koneksi, "SELECT * FROM poli");
                                    while($d = mysqli_fetch_array($data)){
                                        echo "<option value='$d[id_poli]'>$d[nama_poli]</option>";
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-lg rounded-pill shadow-sm">
                                    Ambil Nomor Antrian <i class="fas fa-arrow-right ms-2"></i>
                                </button>
                                <a href="index.php" class="btn btn-outline-secondary rounded-pill">Batal</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
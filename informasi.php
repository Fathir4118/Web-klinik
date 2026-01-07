<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <title>Informasi Klinik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body style="background-color: #f4f6f9;">

    <nav class="navbar navbar-dark bg-primary mb-4">
        <div class="container">
            <span class="navbar-brand">Pusat Informasi</span>
            <a href="index.php" class="btn btn-light btn-sm">Kembali</a>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card shadow border-0 text-center p-4">
                    <i class="fas fa-headset fa-3x text-primary mb-3"></i>
                    <h5>Layanan Pelanggan</h5>
                    <p class="text-muted">Butuh bantuan darurat?</p>
                    <a href="#" class="btn btn-outline-primary rounded-pill">Hubungi 021-555-0199</a>
                    <hr>
                    <p class="small text-muted mb-0">Jam Operasional: 08:00 - 20:00 WIB</p>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card shadow border-0 p-4">
                    <h4 class="mb-4">Pertanyaan Sering Diajukan (FAQ)</h4>
                    
                    <div class="accordion" id="accordionInfo">
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                    Apa saja syarat berobat menggunakan BPJS?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionInfo">
                                <div class="accordion-body">
                                    Membawa kartu BPJS asli/digital (Mobile JKN), KTP asli, dan surat rujukan dari Faskes 1 (jika diperlukan untuk Poli Spesialis).
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    Bagaimana cara membatalkan antrian?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionInfo">
                                <div class="accordion-body">
                                    Untuk saat ini pembatalan antrian hanya bisa dilakukan di loket pendaftaran. Silakan hubungi petugas kami setibanya di klinik.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                    Apakah melayani pasien umum (Non-BPJS)?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionInfo">
                                <div class="accordion-body">
                                    <strong>Ya, tentu saja.</strong> Kami melayani pasien umum dengan tarif yang berlaku sesuai peraturan klinik.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
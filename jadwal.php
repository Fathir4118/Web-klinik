<?php include 'koneksi.php'; session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <title>Jadwal Dokter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-light">
    
    <nav class="navbar navbar-dark bg-primary mb-4">
        <div class="container">
            <span class="navbar-brand">Jadwal Praktek Dokter</span>
            <a href="index.php" class="btn btn-light btn-sm">Kembali ke Menu</a>
        </div>
    </nav>

    <div class="container">
        <div class="card shadow border-0">
            <div class="card-body">
                <table class="table table-hover table-striped">
                    <thead class="table-primary">
                        <tr>
                            <th>Nama Dokter</th>
                            <th>Poli</th>
                            <th>Hari</th>
                            <th>Jam Praktek</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Query Join 3 Tabel (Jadwal + Dokter + Poli)
                        $sql = "SELECT * FROM jadwal_dokter 
                                JOIN dokter ON jadwal_dokter.id_dokter = dokter.id_dokter 
                                JOIN poli ON dokter.id_poli = poli.id_poli 
                                ORDER BY hari DESC";
                        $query = mysqli_query($koneksi, $sql);
                        
                        while($row = mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td class="fw-bold"><?php echo $row['nama_dokter']; ?></td>
                            <td><span class="badge bg-info"><?php echo $row['nama_poli']; ?></span></td>
                            <td><?php echo $row['hari']; ?></td>
                            <td><?php echo date('H:i', strtotime($row['jam_mulai'])) . " - " . date('H:i', strtotime($row['jam_selesai'])); ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>
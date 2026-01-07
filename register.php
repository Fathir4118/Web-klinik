<!DOCTYPE html>
<html lang="id">
<head>
    <title>Daftar Akun Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: linear-gradient(135deg, #0061f2 0%, #60efff 100%); height: 100vh; display: flex; align-items: center; justify-content: center; }
        .card-reg { width: 100%; max-width: 400px; border-radius: 15px; border: none; }
    </style>
</head>
<body>
    <div class="card card-reg shadow p-4">
        <h4 class="text-center text-primary mb-4">Buat Akun Pasien</h4>
        <form action="" method="POST">
            <div class="mb-3">
                <label>Username Baru</label>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" name="daftar" class="btn btn-primary w-100">Daftar Sekarang</button>
            <a href="login.php" class="btn btn-link w-100 mt-2">Sudah punya akun? Login</a>
        </form>

        <?php
        include 'koneksi.php';
        if(isset($_POST['daftar'])){
            $user = $_POST['username'];
            $pass = $_POST['password'];
            // Simpan sebagai pasien
            $simpan = mysqli_query($koneksi, "INSERT INTO users VALUES (NULL, '$user', '$pass', 'pasien')");
            if($simpan){
                echo "<script>alert('Pendaftaran Berhasil! Silakan Login'); window.location='login.php';</script>";
            }
        }
        ?>
    </div>
</body>
</html>
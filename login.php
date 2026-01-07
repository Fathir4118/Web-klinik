<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Klinik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            /* Background Gradasi Biru Keren */
            background: linear-gradient(135deg, #0061f2 0%, #60efff 100%);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .card-login {
            border: none;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            overflow: hidden;
            width: 100%;
            max-width: 400px;
        }
        .card-header {
            background-color: #0d6efd; /* Biru Bootstrap */
            color: white;
            padding: 30px 20px;
            text-align: center;
            border: none;
        }
        .btn-custom {
            background: linear-gradient(to right, #0061f2, #00c6ff);
            border: none;
            color: white;
            padding: 12px;
            font-weight: bold;
            border-radius: 50px;
            transition: 0.3s;
        }
        .btn-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 97, 242, 0.4);
            color: white;
        }
    </style>
</head>
<body>

    <div class="card card-login">
        <div class="card-header">
            <i class="fas fa-hospital-user fa-3x mb-3"></i>
            <h4>KLINIK ANTI SAWIT</h4>
            <p class="mb-0 small opacity-75">Silakan login untuk melanjutkan</p>
        </div>
        <div class="card-body p-4 bg-white">
            <form action="cek_login.php" method="POST">
                <div class="mb-3">
                    <label class="form-label text-muted">Username</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light border-0"><i class="fas fa-user text-primary"></i></span>
                        <input type="text" name="username" class="form-control bg-light border-0" placeholder="Masukkan username" required>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label text-muted">Password</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light border-0"><i class="fas fa-lock text-primary"></i></span>
                        <input type="password" name="password" class="form-control bg-light border-0" placeholder="Masukkan password" required>
                    </div>
                    <div class="text-center mt-3">
                        <small>Belum punya akun?</small><br>
                         <a href="register.php" class="text-decoration-none fw-bold">Daftar Disini</a>
                    </div>
                </div>
                <button type="submit" class="btn btn-custom w-100">MASUK SEKARANG</button>
            </form>
        </div>
    </div>

</body>
</html>
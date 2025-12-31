<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Portal Login</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link rel="icon" href="{{ ('asset/favicon.ico') }}">
  <style>
    :root {
      --primary: #2e5bff;
      --primary-dark: #2749d9;
      --bg-left: linear-gradient(135deg, #1b1f3b, #3d4e81);
      --card-shadow: 0 10px 35px rgba(0, 0, 0, 0.10);
      --radius: 22px;
    }

    body {
      font-family: "Poppins", sans-serif;
      background: #f3f6fc;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .login-container {
      width: 100%;
      max-width: 1150px;
      background: #fff;
      border-radius: var(--radius);
      box-shadow: var(--card-shadow);
      overflow: hidden;
      display: flex;
      min-height: 600px;
      animation: fadeIn 0.5s ease;
    }

    /* LEFT SIDE (Image / Carousel / Branding) */
    .login-left {
      flex: 1;
      background: var(--bg-left);
      color: #fff;
      padding: 60px 50px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .login-left h2 {
      font-size: 35px;
      font-weight: 600;
      line-height: 1.3;
    }

    .login-left p {
      margin-top: 12px;
      font-size: 15px;
      opacity: .85;
    }

    /* RIGHT SIDE (Login Form) */
    .login-right {
      flex: 1;
      padding: 60px 60px 40px;
      background: #ffffff;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .form-control {
      border-radius: var(--radius);
      padding: 12px 14px;
      border: 1px solid #d6d8e1;
    }

    .input-group-text {
      border-radius: var(--radius);
      background: #eef1fb;
      border: none;
      font-size: 18px;
    }

    .btn-login {
      background: var(--primary);
      border: none;
      width: 100%;
      padding: 12px;
      border-radius: var(--radius);
      font-size: 17px;
      font-weight: 500;
      color: #fff;
      transition: 0.3s;
    }

    .btn-login:hover {
      background: var(--primary-dark);
    }

    .footer-text {
      font-size: 13px;
      color: #6b7280;
      margin-top: 25px;
      text-align: center;
    }

    @media(max-width: 992px) {
      .login-container { flex-direction: column; max-width: 480px; }
      .login-left { padding: 40px 30px; text-align: center; }
      .login-right { padding: 40px 30px; }
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>

<body>

<div class="login-container">

  <!-- LEFT SIDE -->
  <div class="login-left">
    <h2>Selamat Datang<br>di Portal Sistem</h2>
    <p>Akses dashboard internal, manajemen data, dan layanan operasional lainnya.</p>

    <!-- Jika ingin carousel, letakkan di sini -->
  </div>

  <!-- RIGHT SIDE -->
  <div class="login-right">
    <h3 class="mb-4 fw-semibold">Login Akun</h3>
    @if($errors->any())
      <div class="alert alert-danger">
          {{ $errors->first() }}
      </div>
    @endif
    <form action="{{ route('login.authenticated') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label class="form-label">Email / Username</label>
        <div class="input-group">
          <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
          <input type="text" class="form-control" name="email" placeholder="Masukkan username">
        </div>
      </div>

      <div class="mb-3">
        <label class="form-label">Password</label>
        <div class="input-group">
          <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
          <input type="password" class="form-control" name="password" placeholder="Masukkan password">
        </div>
      </div>

      <div class="d-flex justify-content-between mb-3">
        <div>
          <input type="checkbox" id="remember" name="remember" class="form-check-input">
          <label for="remember" class="small">Ingat Saya</label>
        </div>
        <a href="#" class="small text-primary">Lupa Password?</a>
      </div>

      <button type="submit" class="btn-login">Masuk Sekarang</button>
    </form>

    <div class="footer-text">© 2025 - Portal Sistem Informasi</div>
  </div>

</div>

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

</body>
</html>

<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Portal Aplikasi</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

  <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>

  <link rel="icon" href="{{ ('asset/favicon.ico') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="container-fluid g-0">
  <div class="row g-0">
    <!-- PANEL KIRI -->
    @include('partials.sidebar')

    <!-- PANEL KANAN -->
    <div class="col-lg-8 col-md-7">
      <div class="apps-wrapper">

        <!-- HEADER FULL-WIDTH STICKY -->
        @include('partials.header')
        @yield('content')
        <!-- BODY GRID -->
      </div>
    </div>

  </div>
</div>

</body>
</html>

<div class="apps-header">
    <div class="apps-header-inner">
    <div class="apps-header-left">
        <div class="apps-header-icon">
        <i class="bi bi-grid-3x3-gap-fill"></i>
        </div>
        <div>
        <div class="apps-header-title">Daftar Aplikasi</div>
        <div class="apps-header-sub">Pilih aplikasi yang ingin Anda akses.</div>
        </div>
    </div>
    <div class="apps-header-status">

        <!-- Tombol Add Menu -->
        <a href="{{ route('menu.add_menu') }}" class="btn-add">
            <i class="bi bi-plus-circle"></i> Add Menu
        </a>

        <!-- Tombol Logout -->
        <a href="{{ route('login.logout') }}" class="logout-link">
            <i class="bi bi-power"></i> Logout
        </a>

    </div>
    </div>
</div>
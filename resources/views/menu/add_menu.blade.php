@extends('layouts.app')

@section('title', 'Tambah Menu Aplikasi')
@section('content')
<div class="apps-body">
  <div class="row g-3">
    <div class="add-menu-wrapper">
      <div class="add-menu-card">
        <h5 class="add-menu-title">
          <i class="bi bi-plus-circle"></i> Tambah Menu Aplikasi
        </h5>

        <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label class="form-label fw-semibold">Nama Menu</label>
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#en_name">EN</a></li>
              <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#id_name">ID</a></li>
            </ul>
            <div class="tab-content mt-2">
              <div class="tab-pane fade show active" id="en_name">
                <input type="text" name="nama_menu[en]" class="form-control" placeholder="Example: Patient Dashboard" required>
              </div>
              <div class="tab-pane fade" id="id_name">
                <input type="text" name="nama_menu[id]" class="form-control" placeholder="Contoh: Dashboard Pasien" required>
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label fw-semibold">Deskripsi Menu</label>
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#en_desc">EN</a></li>
              <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#id_desc">ID</a></li>
            </ul>
            <div class="tab-content mt-2">
              <div class="tab-pane fade show active" id="en_desc">
                <textarea name="deskripsi[en]" class="form-control" rows="2" placeholder="Example: Manage clinic performance..."></textarea>
              </div>
              <div class="tab-pane fade" id="id_desc">
                <textarea name="deskripsi[id]" class="form-control" rows="2" placeholder="Contoh: Mengelola performa klinik..."></textarea>
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label fw-semibold">Tech Stack</label>
            <input type="text" id="techSearch" class="form-control mb-3" placeholder="Cari tech stack...">
            <div class="category-block">
              <div class="category-title">Backend</div>
              <div class="checkbox-grid">
                @foreach(['Laravel','CodeIgniter','ExpressJS','NestJS','Django','Flask'] as $tech)
                  <label class="checkbox-item">
                    <input type="checkbox" name="tech[]" > {{ $tech }}
                  </label>
                @endforeach
              </div>
            </div>

            <div class="category-block">
              <div class="category-title">Frontend</div>
              <div class="checkbox-grid">
                @foreach(['Vue JS','React JS','Angular','TailwindCSS'] as $tech)
                  <label class="checkbox-item">
                    <input type="checkbox" name="tech[]" > {{ $tech }}
                  </label>
                @endforeach
              </div>
            </div>

            <div class="category-block">
              <div class="category-title">Database</div>
              <div class="checkbox-grid">
                @foreach(['MySQL','PostgreSQL','SQLite','MongoDB','Redis'] as $tech)
                  <label class="checkbox-item">
                    <input type="checkbox" name="tech[]" > {{ $tech }}
                  </label>
                @endforeach
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label fw-semibold">Token Akses / URL</label>
            <input type="text" name="token_akses" class="form-control" placeholder="https://example.com/login" required>
          </div>

          <div class="mb-3">
            <label class="form-label fw-semibold">Icon Menu</label>
            <input type="file" name="icon_menu" class="form-control" accept="image/*" required>
            <small class="text-muted">Format: PNG, ukuran kecil (maks. 200KB)</small>
          </div>

          <div class="mb-3">
            <label class="form-label fw-semibold">Status</label>
            <select name="status" class="form-select" required>
              <option value="1">Aktif</option>
              <option value="0">Nonaktif</option>
            </select>
          </div>

          <div class="d-flex justify-content-end gap-2 mt-4">
            <a href="{{ route('menu.index') }}" class="btn btn-light px-4">Batal</a>
            <button class="btn btn-primary px-4">
              <i class="bi bi-check-circle"></i> Simpan
            </button>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>

{{-- 🔍 Filter Tech Stack --}}
<script>
document.getElementById("techSearch").addEventListener("keyup", function () {
  const search = this.value.toLowerCase();
  const items = document.querySelectorAll(".checkbox-item");
  items.forEach(item => {
    const text = item.innerText.toLowerCase();
    item.style.display = text.includes(search) ? "flex" : "none";
  });
});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<style>
.checkbox-grid { display: flex; flex-wrap: wrap; gap: 10px; }
.checkbox-item { display: flex; align-items: center; background: #f8f9fa; border: 1px solid #dee2e6; border-radius: 6px; padding: 4px 10px; cursor: pointer; transition: 0.2s; }
.checkbox-item:hover { background-color: #e9ecef; }
.nav-tabs .nav-link.active { color: #0d6efd; font-weight: 600; }
</style>
@endsection

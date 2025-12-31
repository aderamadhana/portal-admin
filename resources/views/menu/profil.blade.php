@extends('layouts.app')

@section('title', 'Profil Saya')
@section('content')
<div class="apps-body">
  <div class="row g-3">
    <div class="add-menu-wrapper">
      <div class="add-menu-card">
        <h5 class="add-menu-title">
          <i class="bi bi-person-circle"></i> Profil Saya
        </h5>

        <form action="{{ route('menu.save_profil') }}" method="POST" enctype="multipart/form-data">
          @csrf

          {{-- 🔤 JABATAN / POSISI (Multilingual) --}}
          <div class="mb-3">
            <label class="form-label fw-semibold">Jabatan / Posisi</label>

            <ul class="nav nav-tabs" id="langTabJabatan" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#jabatan_en">EN</a></li>
              <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#jabatan_id">ID</a></li>
            </ul>
            <div class="tab-content mt-2">
              <div class="tab-pane fade show active" id="jabatan_en">
                <input type="text" name="jabatan[en]" class="form-control"
                  value="{{ $user->getTranslation('jabatan', 'en') ?? '' }}"
                  placeholder="Example: Backend Developer">
              </div>
              <div class="tab-pane fade" id="jabatan_id">
                <input type="text" name="jabatan[id]" class="form-control"
                  value="{{ $user->getTranslation('jabatan', 'id') ?? '' }}"
                  placeholder="Contoh: Pengembang Backend">
              </div>
            </div>
          </div>

          {{-- 📝 DESKRIPSI (Multilingual) --}}
          <div class="mb-3">
            <label class="form-label fw-semibold">Deskripsi Singkat</label>

            <ul class="nav nav-tabs" id="langTabDesc" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#desc_en">EN</a></li>
              <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#desc_id">ID</a></li>
            </ul>
            <div class="tab-content mt-2">
              <div class="tab-pane fade show active" id="desc_en">
                <textarea name="deskripsi[en]" class="form-control" rows="2"
                  placeholder="Example: Develops backend API and manages database.">{{ $user->getTranslation('deskripsi', 'en') ?? '' }}</textarea>
              </div>
              <div class="tab-pane fade" id="desc_id">
                <textarea name="deskripsi[id]" class="form-control" rows="2"
                  placeholder="Contoh: Mengembangkan API backend dan mengelola database.">{{ $user->getTranslation('deskripsi', 'id') ?? '' }}</textarea>
              </div>
            </div>
          </div>

          {{-- 🧠 TECH STACK --}}
          <!-- <div class="mb-3">
            <label class="form-label fw-semibold">Tech Stack</label>
            <input type="text" id="techSearch" class="form-control search-box mb-3" placeholder="Cari tech stack...">

            @php $techStack = json_decode($user->tech_stack ?? '[]', true) ?? []; @endphp

            {{-- contoh kategori ringkas --}}
            <div class="category-block">
              <div class="category-title">Backend</div>
              <div class="checkbox-grid">
                @foreach(['Laravel','CodeIgniter','ExpressJS','NestJS','Django','Flask'] as $tech)
                  <label class="checkbox-item">
                    <input type="checkbox" name="tech[]" value="{{ $tech }}" {{ in_array($tech, $techStack) ? 'checked' : '' }}> {{ $tech }}
                  </label>
                @endforeach
              </div>
            </div>

            <div class="category-block">
              <div class="category-title">Frontend</div>
              <div class="checkbox-grid">
                @foreach(['Vue JS','React JS','Angular','TailwindCSS'] as $tech)
                  <label class="checkbox-item">
                    <input type="checkbox" name="tech[]" value="{{ $tech }}" {{ in_array($tech, $techStack) ? 'checked' : '' }}> {{ $tech }}
                  </label>
                @endforeach
              </div>
            </div>

            <div class="category-block">
              <div class="category-title">Database</div>
              <div class="checkbox-grid">
                @foreach(['MySQL','PostgreSQL','SQLite','MongoDB','Redis'] as $tech)
                  <label class="checkbox-item">
                    <input type="checkbox" name="tech[]" value="{{ $tech }}" {{ in_array($tech, $techStack) ? 'checked' : '' }}> {{ $tech }}
                  </label>
                @endforeach
              </div>
            </div>
          </div> -->

          {{-- 🖼️ FOTO PROFIL --}}
          <div class="mb-3">
            <label class="form-label fw-semibold">Foto Profil</label>
            <input type="file" name="foto" class="form-control" accept="image/*">
            <div class="mt-3">
              <img src="{{ $profil_foto }}" alt="Foto Profil" class="rounded border" style="max-width: 200px;">
            </div>
            <small class="text-muted d-block mt-1">Format jpg/png, minimal ukuran 600x400px.</small>
          </div>

          {{-- Tombol --}}
          <div class="d-flex justify-content-end gap-2 mt-4">
            <a href="{{ route('menu.index') }}" class="btn btn-light px-4">Batal</a>
            <button class="btn btn-primary px-4" type="submit">
              <i class="bi bi-check-circle"></i> Simpan
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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

{{-- 💅 Styling --}}
<style>
.checkbox-grid {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
}
.checkbox-item {
  display: flex;
  align-items: center;
  background: #f8f9fa;
  border: 1px solid #dee2e6;
  border-radius: 6px;
  padding: 4px 10px;
  cursor: pointer;
  transition: 0.2s;
}
.checkbox-item:hover {
  background-color: #e9ecef;
}
.category-title {
  margin-bottom: 6px;
  color: #495057;
}
.nav-tabs .nav-link.active {
  font-weight: 600;
  color: #0d6efd;
}
</style>
@endsection

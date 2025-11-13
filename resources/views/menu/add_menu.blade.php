
@extends('layouts.app')

@section('title', 'Tentang Kami')
@section('content')
<div class="apps-body">
    <div class="row g-3">
        <div class="add-menu-wrapper">
            <div class="add-menu-card">
                <h5 class="add-menu-title">
                    <i class="bi bi-plus-circle"></i> Tambah Menu Aplikasi
                </h5>

                <form action="/add-menu" method="POST" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label class="form-label">Nama Aplikasi</label>
                        <input type="text" name="app_name" class="form-control" placeholder="Contoh: Clinic Dashboard" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Deskripsi Singkat</label>
                        <textarea name="app_desc" class="form-control" rows="2" placeholder="Monitoring performa klinik..." required></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <select name="app_category" class="form-select" required>
                            <option value="">- Pilih Kategori -</option>
                            <option>Clinic</option>
                            <option>HRIS</option>
                            <option>Finance</option>
                            <option>Inventory</option>
                            <option>CRM</option>
                            <option>Analytics</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">URL Login Aplikasi</label>
                        <input type="url" name="app_url" class="form-control" placeholder="https://example.com/login" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Thumbnail / Gambar</label>
                        <input type="file" name="app_thumbnail" class="form-control" accept="image/*" required>
                        <small class="text-muted">Format jpg/png, minimal ukuran 600x400px.</small>
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
@endsection

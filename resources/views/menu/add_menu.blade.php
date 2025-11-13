
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
                        <label class="form-label">Tech Stack</label>

                        <!-- Search Box -->
                        <input type="text" id="techSearch" class="form-control search-box mb-3" placeholder="Cari tech stack...">

                        <!-- PROGRAMMING LANGUAGES -->
                        <div class="category-block">
                            <div class="category-title">Programming Languages</div>
                            <div class="checkbox-grid">

                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="PHP"> PHP</label>
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="JavaScript"> JavaScript</label>
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="TypeScript"> TypeScript</label>
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="Python"> Python</label>
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="Golang"> Go (Golang)</label>
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="Java"> Java</label>
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="Kotlin"> Kotlin</label>
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="C#"> C#</label>
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="C++"> C++</label>
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="Ruby"> Ruby</label>
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="Dart"> Dart</label>
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="Swift"> Swift</label>
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="Rust"> Rust</label>
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="Lua"> Lua</label>

                            </div>
                        </div>

                        <!-- BACKEND -->
                        <div class="category-block">
                            <div class="category-title">Backend</div>
                            <div class="checkbox-grid">
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="Laravel"> Laravel</label>
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="CodeIgniter"> CodeIgniter</label>
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="ASP .NET"> ASP .NET</label>
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="ExpressJS"> ExpressJS</label>
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="NestJS"> NestJS</label>
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="Django"> Django</label>
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="Flask"> Flask</label>
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="FastAPI"> FastAPI</label>
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="Spring Boot"> Spring Boot</label>
                            </div>
                        </div>

                        <!-- FRONTEND -->
                        <div class="category-block">
                            <div class="category-title">Frontend</div>
                            <div class="checkbox-grid">
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="Vue JS"> Vue JS</label>
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="React JS"> React JS</label>
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="Angular"> Angular</label>
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="Next JS"> Next JS</label>
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="Nuxt JS"> Nuxt JS</label>
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="TailwindCSS"> TailwindCSS</label>
                            </div>
                        </div>

                        <!-- DATABASE -->
                        <div class="category-block">
                            <div class="category-title">Database</div>
                            <div class="checkbox-grid">
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="MySQL"> MySQL</label>
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="PostgreSQL"> PostgreSQL</label>
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="SQLite"> SQLite</label>
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="MariaDB"> MariaDB</label>
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="MongoDB"> MongoDB</label>
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="ElasticSearch"> ElasticSearch</label>
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="Redis"> Redis</label>
                            </div>
                        </div>

                        <!-- CLOUD -->
                        <div class="category-block">
                            <div class="category-title">Cloud Platform</div>
                            <div class="checkbox-grid">
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="Azure"> Azure</label>
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="AWS"> AWS</label>
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="GCP"> GCP</label>
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="DigitalOcean"> DigitalOcean</label>
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="Cloudflare"> Cloudflare</label>
                            </div>
                        </div>

                        <!-- DEVOPS -->
                        <div class="category-block">
                            <div class="category-title">DevOps / Container</div>
                            <div class="checkbox-grid">
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="Docker"> Docker</label>
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="Kubernetes"> Kubernetes</label>
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="Terraform"> Terraform</label>
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="CI/CD"> CI/CD Pipeline</label>
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="Nginx"> Nginx</label>
                                <label class="checkbox-item"><input type="checkbox" name="tech[]" value="Apache"> Apache</label>
                            </div>
                        </div>

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
@endsection


@extends('layouts.app')

@section('title', 'Tentang Kami')
@section('content')
<div class="apps-body">
    <div class="row g-3">
        <div class="add-menu-wrapper">
            <div class="add-menu-card">
                <h5 class="add-menu-title">
                    <i class="bi bi-plus-circle"></i> Profil Saya
                </h5>

                <form action="{{ route('menu.save_profil') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Jabatan / Posisi</label>
                        <input type="text" name="jabatan" class="form-control" value="{{ $user->jabatan }}" placeholder="Contoh: Clinic Dashboard" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Deskripsi Singkat</label>
                        <textarea name="deskripsi" class="form-control" rows="2" placeholder="Monitoring performa klinik..." required>{{ $user->deskripsi }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tech Stack</label>
                        <!-- Search Box -->
                        <input type="text" id="techSearch" class="form-control search-box mb-3" placeholder="Cari tech stack...">
                        <?php 
                            $techStack = json_decode($user->tech_stack ?? '[]', true) ?? [];
                        ?>
                        <!-- PROGRAMMING LANGUAGES -->
                        <div class="category-block">
                            <div class="category-title">Programming Languages</div>
                            <div class="checkbox-grid">
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="PHP" <?= in_array('PHP', $techStack) ? 'checked' : '' ?>> PHP
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="JavaScript" <?= in_array('JavaScript', $techStack) ? 'checked' : '' ?>> JavaScript
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="TypeScript" <?= in_array('TypeScript', $techStack) ? 'checked' : '' ?>> TypeScript
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="Python" <?= in_array('Python', $techStack) ? 'checked' : '' ?>> Python
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="Golang" <?= in_array('Golang', $techStack) ? 'checked' : '' ?>> Go (Golang)
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="Java" <?= in_array('Java', $techStack) ? 'checked' : '' ?>> Java
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="Kotlin" <?= in_array('Kotlin', $techStack) ? 'checked' : '' ?>> Kotlin
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="C#" <?= in_array('C#', $techStack) ? 'checked' : '' ?>> C#
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="C++" <?= in_array('C++', $techStack) ? 'checked' : '' ?>> C++
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="Ruby" <?= in_array('Ruby', $techStack) ? 'checked' : '' ?>> Ruby
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="Dart" <?= in_array('Dart', $techStack) ? 'checked' : '' ?>> Dart
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="Swift" <?= in_array('Swift', $techStack) ? 'checked' : '' ?>> Swift
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="Rust" <?= in_array('Rust', $techStack) ? 'checked' : '' ?>> Rust
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="Lua" <?= in_array('Lua', $techStack) ? 'checked' : '' ?>> Lua
                                </label>
                            </div>
                        </div>

                        <!-- BACKEND -->
                        <div class="category-block">
                            <div class="category-title">Backend</div>
                            <div class="checkbox-grid">
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="Laravel" <?= in_array('Laravel', $techStack) ? 'checked' : '' ?>> Laravel
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="CodeIgniter" <?= in_array('CodeIgniter', $techStack) ? 'checked' : '' ?>> CodeIgniter
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="ASP .NET" <?= in_array('ASP .NET', $techStack) ? 'checked' : '' ?>> ASP .NET
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="ExpressJS" <?= in_array('ExpressJS', $techStack) ? 'checked' : '' ?>> ExpressJS
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="NestJS" <?= in_array('NestJS', $techStack) ? 'checked' : '' ?>> NestJS
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="Django" <?= in_array('Django', $techStack) ? 'checked' : '' ?>> Django
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="Flask" <?= in_array('Flask', $techStack) ? 'checked' : '' ?>> Flask
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="FastAPI" <?= in_array('FastAPI', $techStack) ? 'checked' : '' ?>> FastAPI
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="Spring Boot" <?= in_array('Spring Boot', $techStack) ? 'checked' : '' ?>> Spring Boot
                                </label>
                            </div>
                        </div>

                        <!-- FRONTEND -->
                        <div class="category-block">
                            <div class="category-title">Frontend</div>
                            <div class="checkbox-grid">
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="Vue JS" <?= in_array('Vue JS', $techStack) ? 'checked' : '' ?>> Vue JS
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="React JS" <?= in_array('React JS', $techStack) ? 'checked' : '' ?>> React JS
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="Angular" <?= in_array('Angular', $techStack) ? 'checked' : '' ?>> Angular
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="Next JS" <?= in_array('Next JS', $techStack) ? 'checked' : '' ?>> Next JS
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="Nuxt JS" <?= in_array('Nuxt JS', $techStack) ? 'checked' : '' ?>> Nuxt JS
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="TailwindCSS" <?= in_array('TailwindCSS', $techStack) ? 'checked' : '' ?>> TailwindCSS
                                </label>
                            </div>
                        </div>

                        <!-- DATABASE -->
                        <div class="category-block">
                            <div class="category-title">Database</div>
                            <div class="checkbox-grid">
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="MySQL" <?= in_array('MySQL', $techStack) ? 'checked' : '' ?>> MySQL
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="PostgreSQL" <?= in_array('PostgreSQL', $techStack) ? 'checked' : '' ?>> PostgreSQL
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="SQLite" <?= in_array('SQLite', $techStack) ? 'checked' : '' ?>> SQLite
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="MariaDB" <?= in_array('MariaDB', $techStack) ? 'checked' : '' ?>> MariaDB
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="MongoDB" <?= in_array('MongoDB', $techStack) ? 'checked' : '' ?>> MongoDB
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="ElasticSearch" <?= in_array('ElasticSearch', $techStack) ? 'checked' : '' ?>> ElasticSearch
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="Redis" <?= in_array('Redis', $techStack) ? 'checked' : '' ?>> Redis
                                </label>
                            </div>
                        </div>

                        <!-- CLOUD -->
                        <div class="category-block">
                            <div class="category-title">Cloud Platform</div>
                            <div class="checkbox-grid">
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="Azure" <?= in_array('Azure', $techStack) ? 'checked' : '' ?>> Azure
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="AWS" <?= in_array('AWS', $techStack) ? 'checked' : '' ?>> AWS
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="GCP" <?= in_array('GCP', $techStack) ? 'checked' : '' ?>> GCP
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="DigitalOcean" <?= in_array('DigitalOcean', $techStack) ? 'checked' : '' ?>> DigitalOcean
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="Cloudflare" <?= in_array('Cloudflare', $techStack) ? 'checked' : '' ?>> Cloudflare
                                </label>
                            </div>
                        </div>

                        <!-- DEVOPS -->
                        <div class="category-block">
                            <div class="category-title">DevOps / Container</div>
                            <div class="checkbox-grid">
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="Docker" <?= in_array('Docker', $techStack) ? 'checked' : '' ?>> Docker
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="Kubernetes" <?= in_array('Kubernetes', $techStack) ? 'checked' : '' ?>> Kubernetes
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="Terraform" <?= in_array('Terraform', $techStack) ? 'checked' : '' ?>> Terraform
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="CI/CD" <?= in_array('CI/CD', $techStack) ? 'checked' : '' ?>> CI/CD Pipeline
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="Nginx" <?= in_array('Nginx', $techStack) ? 'checked' : '' ?>> Nginx
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="tech[]" value="Apache" <?= in_array('Apache', $techStack) ? 'checked' : '' ?>> Apache
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Foto Profil</label>
                        <input type="file" name="foto" class="form-control" accept="image/*" required>
                        <img src="{{ $profil_foto }}" alt="">
                        <small class="text-muted">Format jpg/png, minimal ukuran 600x400px.</small>
                    </div>

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

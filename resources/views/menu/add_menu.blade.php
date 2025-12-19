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
                <textarea name="deskripsi[en]" id="editor_eng" class="form-control" rows="2" placeholder="Example: Manage clinic performance..."></textarea>
              </div>
              <div class="tab-pane fade" id="id_desc">
                <textarea name="deskripsi[id]" id="editor_ind" class="form-control" rows="2" placeholder="Contoh: Mengelola performa klinik..."></textarea>
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label fw-semibold">Tech Stack</label>
            <input type="text" id="techSearch" class="form-control mb-3" placeholder="Cari tech stack...">
            
            <!-- Backend -->
            <div class="category-block">
              <div class="category-title">Backend Framework</div>
              <div class="checkbox-grid">
                @foreach(['Laravel','CodeIgniter','Slim','Lumen','Symfony','ExpressJS','NestJS','FastAPI','Django','Flask','Spring Boot','ASP.NET Core','Ruby on Rails'] as $tech)
                  <label class="checkbox-item">
                    <input type="checkbox" name="tech_stack[]" value="{{ $tech }}"> {{ $tech }}
                  </label>
                @endforeach
              </div>
            </div>

            <!-- Frontend -->
            <div class="category-block">
              <div class="category-title">Frontend Framework</div>
              <div class="checkbox-grid">
                @foreach(['Vue.js','React','Angular','Svelte','Next.js','Nuxt.js','Remix','Alpine.js','Htmx'] as $tech)
                  <label class="checkbox-item">
                    <input type="checkbox" name="tech_stack[]" value="{{ $tech }}"> {{ $tech }}
                  </label>
                @endforeach
              </div>
            </div>

            <div class="category-block">
              <div class="category-title">CSS Framework</div>
              <div class="checkbox-grid">
                @foreach(['TailwindCSS','Bootstrap','Bulma','Material UI','Ant Design','Chakra UI','Vuetify','DaisyUI','Shadcn UI'] as $tech)
                  <label class="checkbox-item">
                    <input type="checkbox" name="tech_stack[]" value="{{ $tech }}"> {{ $tech }}
                  </label>
                @endforeach
              </div>
            </div>

            <!-- Full Stack Integration -->
            <div class="category-block">
              <div class="category-title">Full-Stack Integration</div>
              <div class="checkbox-grid">
                @foreach(['Laravel Inertia','Laravel Livewire','Laravel Breeze','Laravel Jetstream'] as $tech)
                  <label class="checkbox-item">
                    <input type="checkbox" name="tech_stack[]" value="{{ $tech }}"> {{ $tech }}
                  </label>
                @endforeach
              </div>
            </div>

            <!-- Database -->
            <div class="category-block">
              <div class="category-title">Database</div>
              <div class="checkbox-grid">
                @foreach(['MySQL','PostgreSQL','SQLite','MongoDB','Redis','MariaDB','Microsoft SQL Server','Supabase','Firebase'] as $tech)
                  <label class="checkbox-item">
                    <input type="checkbox" name="tech_stack[]" value="{{ $tech }}"> {{ $tech }}
                  </label>
                @endforeach
              </div>
            </div>

            <div class="category-block">
              <div class="category-title">ORM & Query Builder</div>
              <div class="checkbox-grid">
                @foreach(['Eloquent ORM','Doctrine','Prisma','TypeORM','Sequelize','Mongoose','Drizzle ORM'] as $tech)
                  <label class="checkbox-item">
                    <input type="checkbox" name="tech_stack[]" value="{{ $tech }}"> {{ $tech }}
                  </label>
                @endforeach
              </div>
            </div>

            <!-- API & Communication -->
            <div class="category-block">
              <div class="category-title">API Architecture</div>
              <div class="checkbox-grid">
                @foreach(['REST API','GraphQL','gRPC','WebSocket','tRPC'] as $tech)
                  <label class="checkbox-item">
                    <input type="checkbox" name="tech_stack[]" value="{{ $tech }}"> {{ $tech }}
                  </label>
                @endforeach
              </div>
            </div>

            <div class="category-block">
              <div class="category-title">Message Broker & Queue</div>
              <div class="checkbox-grid">
                @foreach(['RabbitMQ','Apache Kafka','Redis Queue','Laravel Queue','BullMQ','Amazon SQS'] as $tech)
                  <label class="checkbox-item">
                    <input type="checkbox" name="tech_stack[]" value="{{ $tech }}"> {{ $tech }}
                  </label>
                @endforeach
              </div>
            </div>

            <div class="category-block">
              <div class="category-title">Real-time Communication</div>
              <div class="checkbox-grid">
                @foreach(['Socket.io','Pusher','Laravel Echo','Ably','Centrifugo'] as $tech)
                  <label class="checkbox-item">
                    <input type="checkbox" name="tech_stack[]" value="{{ $tech }}"> {{ $tech }}
                  </label>
                @endforeach
              </div>
            </div>

            <!-- Authentication & Security -->
            <div class="category-block">
              <div class="category-title">Authentication & Security</div>
              <div class="checkbox-grid">
                @foreach(['Laravel Sanctum','Laravel Passport','JWT','OAuth2','NextAuth','Auth0','Clerk','Firebase Auth'] as $tech)
                  <label class="checkbox-item">
                    <input type="checkbox" name="tech_stack[]" value="{{ $tech }}"> {{ $tech }}
                  </label>
                @endforeach
              </div>
            </div>

            <!-- Tools & Utilities -->
            <div class="category-block">
              <div class="category-title">Build Tools & Bundlers</div>
              <div class="checkbox-grid">
                @foreach(['Vite','Webpack','Laravel Mix','Rollup','Parcel','esbuild'] as $tech)
                  <label class="checkbox-item">
                    <input type="checkbox" name="tech_stack[]" value="{{ $tech }}"> {{ $tech }}
                  </label>
                @endforeach
              </div>
            </div>

            <div class="category-block">
              <div class="category-title">Testing</div>
              <div class="checkbox-grid">
                @foreach(['PHPUnit','Pest','Jest','Vitest','Cypress','Playwright','Testing Library'] as $tech)
                  <label class="checkbox-item">
                    <input type="checkbox" name="tech_stack[]" value="{{ $tech }}"> {{ $tech }}
                  </label>
                @endforeach
              </div>
            </div>

            <!-- Desktop & Mobile -->
            <div class="category-block">
              <div class="category-title">Desktop & Mobile Development</div>
              <div class="checkbox-grid">
                @foreach(['Electron','Tauri','React Native','Flutter','Ionic','Capacitor'] as $tech)
                  <label class="checkbox-item">
                    <input type="checkbox" name="tech_stack[]" value="{{ $tech }}"> {{ $tech }}
                  </label>
                @endforeach
              </div>
            </div>

            <!-- CMS -->
            <div class="category-block">
              <div class="category-title">CMS & Admin Panel</div>
              <div class="checkbox-grid">
                @foreach(['WordPress','Strapi','Contentful','Sanity','Filament','Statamic','Directus'] as $tech)
                  <label class="checkbox-item">
                    <input type="checkbox" name="tech_stack[]" value="{{ $tech }}"> {{ $tech }}
                  </label>
                @endforeach
              </div>
            </div>

            <!-- DevOps -->
            <div class="category-block">
              <div class="category-title">DevOps & Deployment</div>
              <div class="checkbox-grid">
                @foreach(['Docker','Kubernetes','GitHub Actions','GitLab CI/CD','Nginx','Apache','Vercel','Netlify','AWS','Google Cloud','Azure'] as $tech)
                  <label class="checkbox-item">
                    <input type="checkbox" name="tech_stack[]" value="{{ $tech }}"> {{ $tech }}
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

ClassicEditor
.create(document.querySelector('#editor_eng'))
.catch(error => {
    console.error(error);
});

ClassicEditor
.create(document.querySelector('#editor_ind'))
.catch(error => {
    console.error(error);
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

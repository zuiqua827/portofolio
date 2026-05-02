@extends('layouts.portfolio')

@section('title', 'Projects - Personal Portfolio')

@section('content')

<!-- Page Header -->
<section class="pj-header">
    <div class="pj-header-inner">
        <span class="pj-badge">Portfolio</span>
        <h1 class="pj-title">My <span class="pj-title-accent">Projects</span></h1>
        <p class="pj-subtitle">A showcase of my best work. Every project tells a story of problem-solving and creativity.</p>

        <!-- Filter Buttons -->
        <div class="pj-filters">
            <button onclick="filterProjects('all')" class="pj-filter-btn active" id="btn-all">All Projects</button>
            <button onclick="filterProjects('web')" class="pj-filter-btn" id="btn-web">Web Apps</button>
            <button onclick="filterProjects('mobile')" class="pj-filter-btn" id="btn-mobile">Mobile</button>
            <button onclick="filterProjects('design')" class="pj-filter-btn" id="btn-design">UI/UX</button>
        </div>
    </div>
</section>

<!-- Projects Grid -->
<section class="pj-body">
    <div class="pj-body-inner">

        @if($projects->count() > 0)
            <div class="pj-grid" id="projects-grid">
                @foreach($projects as $project)
                <div class="pj-card" data-category="web">
                    <div class="pj-thumb">
                        @if($project->image_url)
                            <img src="{{ $project->image_url }}" alt="{{ $project->title }}" class="pj-img">
                        @else
                            <div class="pj-placeholder">
                                <svg width="56" height="56" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color:rgba(255,255,255,0.6)">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                            </div>
                        @endif
                        <div class="pj-overlay"></div>
                        <span class="pj-type-badge">Web App</span>
                        @if($project->link && $project->link !== '#')
                            <a href="{{ $project->link }}" target="_blank" class="pj-visit-btn">
                                <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                </svg>
                                Visit
                            </a>
                        @endif
                    </div>
                    <div class="pj-body-card">
                        <h3 class="pj-card-title">{{ $project->title }}</h3>
                        <p class="pj-card-desc">{{ Str::limit($project->description, 100) }}</p>
                        <div class="pj-card-footer">
                            <span class="pj-card-date">{{ $project->created_at->format('M Y') }}</span>
                            @auth
                                <a href="{{ route('admin.projects.edit', $project) }}" class="pj-edit-btn">Edit</a>
                            @endauth
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="pj-pagination">
                {{ $projects->appends(request()->query())->links('pagination::tailwind') }}
            </div>

        @else
            <div class="pj-empty">
                <div style="font-size:3.5rem;margin-bottom:1rem;">📂</div>
                <h3 style="font-size:1.2rem;font-weight:800;color:#111827;margin-bottom:0.5rem">No projects yet</h3>
                <p style="color:#6b7280;margin-bottom:1.5rem">Add some projects from the admin dashboard.</p>
                @auth
                    <a href="{{ route('admin.projects.index') }}" class="pj-manage-btn">Manage Projects</a>
                @endauth
            </div>
        @endif

    </div>
</section>

<script>
function filterProjects(category) {
    // Update active button
    document.querySelectorAll('.pj-filter-btn').forEach(btn => btn.classList.remove('active'));
    document.getElementById('btn-' + category)?.classList.add('active');

    // Filter cards
    const projects = document.querySelectorAll('[data-category]');
    projects.forEach(project => {
        if (category === 'all' || project.dataset.category === category) {
            project.style.display = 'block';
            project.style.opacity = '1';
        } else {
            project.style.display = 'none';
        }
    });
}
</script>

<style>
/* =========================================
   PAGE HEADER
========================================= */
.pj-header {
    background: #f8f9fc;
    padding: 3.5rem 2rem 2.5rem;
    border-bottom: 1px solid #f0f0f0;
}
.dark .pj-header { background: #0f1117; border-color: #1f2937; }
.pj-header-inner { max-width: 800px; margin: 0 auto; }

.pj-badge {
    display: inline-block;
    font-size: 0.7rem; font-weight: 700; letter-spacing: 0.15em;
    text-transform: uppercase; color: #ef4444;
    background: rgba(239,68,68,0.08); border: 1px solid rgba(239,68,68,0.2);
    padding: 0.35rem 0.9rem; border-radius: 99px; margin-bottom: 0.9rem;
}

.pj-title {
    font-size: clamp(2rem, 4vw, 3rem); font-weight: 900;
    color: #111827; line-height: 1.1; margin-bottom: 0.6rem; letter-spacing: -0.03em;
}
.dark .pj-title { color: #f9fafb; }
.pj-title-accent { color: #ef4444; }

.pj-subtitle { font-size: 1rem; color: #6b7280; line-height: 1.7; margin-bottom: 1.8rem; }
.dark .pj-subtitle { color: #9ca3af; }

/* Filter Buttons */
.pj-filters { display: flex; gap: 0.6rem; flex-wrap: wrap; }

.pj-filter-btn {
    padding: 0.5rem 1.2rem;
    border-radius: 99px;
    font-size: 0.83rem;
    font-weight: 700;
    border: 1.5px solid #e5e7eb;
    background: #fff;
    color: #374151;
    cursor: pointer;
    transition: all 0.2s;
}
.pj-filter-btn:hover { border-color: #ef4444; color: #ef4444; }
.pj-filter-btn.active { background: #ef4444; border-color: #ef4444; color: #fff; }
.dark .pj-filter-btn { background: #1a1a1a; border-color: #374151; color: #d1d5db; }
.dark .pj-filter-btn.active { background: #ef4444; border-color: #ef4444; color: #fff; }

/* =========================================
   BODY / GRID
========================================= */
.pj-body { background: #f8f9fc; padding: 3.5rem 0 5rem; }
.dark .pj-body { background: #0f1117; }
.pj-body-inner { max-width: 1200px; margin: 0 auto; padding: 0 2rem; }

.pj-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 1.75rem;
    margin-bottom: 3rem;
}

/* =========================================
   PROJECT CARD
========================================= */
.pj-card {
    background: #fff;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 2px 16px rgba(0,0,0,0.06);
    border: 1px solid #f0f0f0;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.pj-card:hover { transform: translateY(-5px); box-shadow: 0 12px 40px rgba(0,0,0,0.11); }
.dark .pj-card { background: #1a1a1a; border-color: #2a2a2a; }

.pj-thumb { height: 200px; position: relative; overflow: hidden; }
.pj-img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s ease; }
.pj-card:hover .pj-img { transform: scale(1.05); }

.pj-placeholder {
    width: 100%; height: 100%;
    background: linear-gradient(135deg, #ef4444, #f97316);
    display: flex; align-items: center; justify-content: center;
}
.pj-overlay {
    position: absolute; inset: 0;
    background: linear-gradient(to top, rgba(0,0,0,0.4), transparent);
    opacity: 0; transition: opacity 0.3s;
}
.pj-card:hover .pj-overlay { opacity: 1; }

.pj-type-badge {
    position: absolute; top: 12px; left: 12px;
    background: rgba(255,255,255,0.92);
    backdrop-filter: blur(8px);
    border-radius: 99px;
    padding: 0.25rem 0.75rem;
    font-size: 0.72rem; font-weight: 700;
    color: #111827;
}
.dark .pj-type-badge { background: rgba(26,26,26,0.9); color: #f9fafb; }

.pj-visit-btn {
    position: absolute; bottom: 12px; right: 12px;
    display: inline-flex; align-items: center; gap: 4px;
    background: #ef4444; color: #fff;
    padding: 0.3rem 0.8rem; border-radius: 8px;
    font-size: 0.78rem; font-weight: 700;
    text-decoration: none;
    opacity: 0; transform: translateY(4px);
    transition: all 0.25s ease;
}
.pj-card:hover .pj-visit-btn { opacity: 1; transform: translateY(0); }

/* Card Body */
.pj-body-card { padding: 1.4rem; }

.pj-card-title {
    font-size: 1.1rem; font-weight: 800; color: #111827;
    margin-bottom: 0.5rem; transition: color 0.2s;
}
.dark .pj-card-title { color: #f9fafb; }
.pj-card:hover .pj-card-title { color: #ef4444; }

.pj-card-desc {
    font-size: 0.88rem; color: #6b7280; line-height: 1.7;
    margin-bottom: 1.1rem;
    display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;
}
.dark .pj-card-desc { color: #9ca3af; }

.pj-card-footer { display: flex; align-items: center; justify-content: space-between; }

.pj-card-date {
    font-size: 0.75rem; font-weight: 600; color: #9ca3af;
    text-transform: uppercase; letter-spacing: 0.06em;
}

.pj-edit-btn {
    font-size: 0.72rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.07em;
    color: #ef4444; background: rgba(239,68,68,0.08);
    border: 1px solid rgba(239,68,68,0.2);
    padding: 0.28rem 0.75rem; border-radius: 99px;
    text-decoration: none; transition: all 0.2s;
}
.pj-edit-btn:hover { background: #ef4444; color: #fff; }

/* Pagination */
.pj-pagination { display: flex; justify-content: center; margin-top: 2rem; }

/* Empty State */
.pj-empty { text-align: center; padding: 5rem 0; }
.pj-manage-btn {
    display: inline-flex; align-items: center; gap: 0.5rem;
    background: #111827; color: #fff;
    padding: 0.75rem 1.75rem; border-radius: 8px;
    font-weight: 700; font-size: 0.9rem; text-decoration: none;
    transition: all 0.2s; box-shadow: 0 4px 14px rgba(0,0,0,0.12);
}
.pj-manage-btn:hover { background: #ef4444; transform: translateY(-2px); box-shadow: 0 8px 22px rgba(239,68,68,0.3); }

/* =========================================
   RESPONSIVE
========================================= */
@media (max-width: 640px) {
    .pj-grid { grid-template-columns: 1fr; }
    .pj-filters { gap: 0.4rem; }
}
</style>

@endsection
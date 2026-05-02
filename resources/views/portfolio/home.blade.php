@extends('layouts.portfolio')

@section('title', 'Home - Personal Portfolio')

@section('content')

<!-- Greeting -->
<section class="home-greeting">
    <div class="home-greeting-inner">
        <span class="home-hello-badge">👋 Welcome To My World</span>
        <h1 class="home-hello-title">
            Hello, I'm <span class="home-hello-name">Muhammad Syahril</span>
        </h1>
        <p class="home-hello-sub">a <span class="home-hello-role">Full Stack Developer</span> — crafting clean & functional web apps.</p>
        <div class="home-greeting-btns">
            <a href="{{ route('portfolio.projects') }}" class="btn-primary-red">
                View My Projects
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
            <a href="{{ route('portfolio.about') }}" class="btn-outline-dark">About Me</a>
        </div>
    </div>
</section>

<!-- Featured Projects -->
<section class="home-projects">
    <div class="home-projects-inner">

        <div class="home-projects-head">
            <span class="home-section-badge">Portfolio</span>
            <h2 class="home-section-title">My <span style="color:#ef4444">Projects</span></h2>
            <p class="home-section-sub">Some of my latest works that showcase my skills and creativity</p>
        </div>

        @if($featuredProjects->count() > 0)
            <div class="proj-grid">
                @foreach($featuredProjects as $project)
                <div class="proj-card">
                    <div class="proj-thumb">
                        @if($project->image_url)
                            <img src="{{ $project->image_url }}" alt="{{ $project->title }}" class="proj-img">
                        @else
                            <div class="proj-placeholder">
                                <svg class="w-14 h-14 text-white opacity-60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                            </div>
                        @endif
                        <div class="proj-overlay"></div>
                    </div>
                    <div class="proj-body">
                        <h3 class="proj-title">{{ $project->title }}</h3>
                        <p class="proj-desc">{{ $project->description }}</p>
                        <div class="proj-footer">
                            <span class="proj-tag">Live Demo</span>
                            @if($project->link && $project->link !== '#')
                                <a href="{{ $project->link }}" target="_blank" class="proj-link">Visit →</a>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        @else
            <div class="proj-empty">
                <div style="font-size:3.5rem;margin-bottom:1rem;">📂</div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">No projects yet</h3>
                <p class="text-gray-500 dark:text-neutral-400 mb-6">Add some projects from the admin dashboard.</p>
                @auth
                    <a href="{{ route('admin.projects.index') }}" class="proj-manage-btn">Manage Projects</a>
                @endauth
            </div>
        @endif

        <div class="text-center mt-12">
            <a href="{{ route('portfolio.projects') }}" class="view-all-btn">
                View All Projects
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>

    </div>
</section>

<!-- ===== STATS SECTION ===== -->
<section class="stats-section">
    <div class="stats-inner">
        <div class="stat-item">
            <span class="stat-number" style="color:#ef4444">{{ $totalProjects ?? '3' }}</span>
            <span class="stat-label">Projects</span>
        </div>
        <div class="stat-divider"></div>
        <div class="stat-item">
            <span class="stat-number" style="color:#f97316">{{ $happyClients ?? '0' }}+</span>
            <span class="stat-label">Happy Clients</span>
        </div>
        <div class="stat-divider"></div>
        <div class="stat-item">
            <span class="stat-number" style="color:#ef4444">{{ $yearsExp ?? '1' }}+</span>
            <span class="stat-label">Years Experience</span>
        </div>
        <div class="stat-divider"></div>
        <div class="stat-item">
            <span class="stat-number" style="color:#f97316">24/7</span>
            <span class="stat-label">Support</span>
        </div>
    </div>
</section>

<style>
/* ---- GREETING ---- */
.home-greeting {
    padding: 6rem 2rem 5rem;
    background: #f8f9fc;
    border-bottom: 1px solid #f0f0f0;
}

.dark .home-greeting {
    background: #0f1117;
    border-color: #1f2937;
}

.home-greeting-inner {
    max-width: 800px;
    margin: 0 auto;
}

.home-hello-badge {
    display: inline-block;
    font-size: 1rem;
    font-weight: 700;
    letter-spacing: 0.1em;
    color: #9ca3af;
    text-transform: uppercase;
    margin-bottom: 1.2rem;
}

.home-hello-title {
    font-size: clamp(3rem, 6vw, 5.5rem);
    font-weight: 800;
    color: #111827;
    line-height: 1.15;
    margin-bottom: 1rem;
    letter-spacing: -0.02em;
}

.dark .home-hello-title { color: #f9fafb; }

.home-hello-name { color: #ef4444; }

.home-hello-sub {
    font-size: 1.4rem;
    color: #6b7280;
    margin: 0;
    line-height: 1.6;
}

.dark .home-hello-sub { color: #9ca3af; }

.home-hello-role {
    color: #f97316;
    font-weight: 700;
}

/* ---- PROJECTS ---- */
.home-projects {
    padding: 4rem 0 5rem;
    background: #f8f9fc;
}

.dark .home-projects { background: #0f1117; }

.home-projects-inner {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
}

.home-projects-head { margin-bottom: 2.5rem; }

.home-section-badge {
    display: inline-block;
    font-size: 0.7rem;
    font-weight: 700;
    letter-spacing: 0.15em;
    text-transform: uppercase;
    color: #ef4444;
    background: rgba(239,68,68,0.08);
    border: 1px solid rgba(239,68,68,0.2);
    padding: 0.35rem 0.9rem;
    border-radius: 99px;
    margin-bottom: 0.6rem;
}

.home-section-title {
    font-size: clamp(1.8rem, 3vw, 2.5rem);
    font-weight: 800;
    color: #111827;
    margin-bottom: 0.4rem;
    letter-spacing: -0.02em;
}

.dark .home-section-title { color: #f9fafb; }

.home-section-sub {
    font-size: 0.92rem;
    color: #6b7280;
}

.dark .home-section-sub { color: #9ca3af; }

/* Grid */
.proj-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(290px, 1fr));
    gap: 1.75rem;
}

.proj-card {
    background: #fff;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 2px 16px rgba(0,0,0,0.06);
    border: 1px solid #f0f0f0;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.proj-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 40px rgba(0,0,0,0.11);
}

.dark .proj-card { background: #1a1a1a; border-color: #2a2a2a; }

.proj-thumb {
    height: 190px;
    position: relative;
    overflow: hidden;
}

.proj-img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s ease; }
.proj-card:hover .proj-img { transform: scale(1.05); }

.proj-placeholder {
    width: 100%; height: 100%;
    background: linear-gradient(135deg, #ef4444, #f97316);
    display: flex; align-items: center; justify-content: center;
}

.proj-overlay {
    position: absolute; inset: 0;
    background: linear-gradient(to top, rgba(0,0,0,0.35), transparent);
    opacity: 0;
    transition: opacity 0.3s;
}

.proj-card:hover .proj-overlay { opacity: 1; }

.proj-body { padding: 1.4rem; }

.proj-title {
    font-size: 1.1rem;
    font-weight: 800;
    color: #111827;
    margin-bottom: 1rem;
    transition: color 0.2s;
}

.dark .proj-title { color: #f9fafb; }
.proj-card:hover .proj-title { color: #ef4444; }

.proj-desc {
    font-size: 0.88rem;
    color: #6b7280;
    line-height: 1.7;
    margin-bottom: 1.1rem;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.dark .proj-desc { color: #9ca3af; }

.proj-footer { display: flex; align-items: center; justify-content: space-between; }

.proj-tag {
    font-size: 0.72rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.07em;
    color: #9ca3af;
    background: #f3f4f6;
    padding: 0.28rem 0.7rem;
    border-radius: 99px;
}

.dark .proj-tag { background: #2a2a2a; }

.proj-link {
    font-size: 0.88rem;
    font-weight: 700;
    color: #ef4444;
    text-decoration: none;
    transition: letter-spacing 0.2s;
}

.proj-link:hover { letter-spacing: 0.04em; }

/* Empty */
.proj-empty { text-align: center; padding: 4rem 0; }

.proj-manage-btn, .view-all-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: #111827;
    color: #fff;
    padding: 0.75rem 1.75rem;
    border-radius: 8px;
    font-weight: 700;
    font-size: 0.9rem;
    text-decoration: none;
    transition: all 0.2s ease;
    box-shadow: 0 4px 14px rgba(0,0,0,0.12);
}

.proj-manage-btn:hover, .view-all-btn:hover {
    background: #ef4444;
    transform: translateY(-2px);
    box-shadow: 0 8px 22px rgba(239,68,68,0.3);
}

.dark .proj-manage-btn, .dark .view-all-btn { background: #f9fafb; color: #111827; }
.dark .proj-manage-btn:hover, .dark .view-all-btn:hover { background: #ef4444; color: #fff; }

/* ---- BUTTONS ---- */
.home-greeting-btns {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
    margin-top: 2.5rem;
    align-items: center;
}

.btn-primary-red {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: #111827;
    color: #fff;
    padding: 0.9rem 2.2rem;
    border-radius: 8px;
    font-weight: 700;
    font-size: 1.05rem;
    text-decoration: none;
    transition: all 0.2s ease;
    box-shadow: 0 4px 14px rgba(0,0,0,0.12);
}

.btn-primary-red:hover {
    background: #ef4444;
    transform: translateY(-2px);
    box-shadow: 0 8px 22px rgba(239,68,68,0.3);
}

.dark .btn-primary-red { background: #f9fafb; color: #111827; }
.dark .btn-primary-red:hover { background: #ef4444; color: #fff; }

.btn-outline-dark {
    display: inline-flex;
    align-items: center;
    padding: 0.9rem 2.2rem;
    border-radius: 8px;
    font-weight: 700;
    font-size: 1.05rem;
    text-decoration: none;
    border: 2px solid #e5e7eb;
    color: #374151;
    transition: all 0.2s ease;
}

.btn-outline-dark:hover {
    border-color: #ef4444;
    color: #ef4444;
    transform: translateY(-2px);
}

.dark .btn-outline-dark { border-color: #374151; color: #d1d5db; }
.dark .btn-outline-dark:hover { border-color: #ef4444; color: #ef4444; }


/* ---- STATS SECTION ---- */
.stats-section {
    background: #f8f9fc;
    padding: 3rem 2rem;
    border-top: 1px solid #f0f0f0;
}
.dark .stats-section { background: #0a0d14; border-color: #1f2937; }
.stats-inner {
    max-width: 900px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
}
.stat-item {
    flex: 1;
    min-width: 160px;
    text-align: center;
    padding: 1.2rem 1.5rem;
}
.stat-number {
    display: block;
    font-size: clamp(2.2rem, 4vw, 3rem);
    font-weight: 900;
    line-height: 1;
    margin-bottom: 0.4rem;
    letter-spacing: -0.03em;
}
.stat-label {
    display: block;
    font-size: 0.85rem;
    font-weight: 600;
    color: #6b7280;
    text-transform: uppercase;
    letter-spacing: 0.08em;
}
.dark .stat-label { color: #9ca3af; }
.stat-divider {
    width: 1px;
    height: 50px;
    background: linear-gradient(to bottom, transparent, #e5e7eb, transparent);
    flex-shrink: 0;
}
.dark .stat-divider { background: linear-gradient(to bottom, transparent, #374151, transparent); }
@media (max-width: 640px) {
    .stat-divider { display: none; }
    .stat-item { min-width: 45%; }
}

</style>

@endsection
@extends('layouts.portfolio')

@section('title', 'About - Personal Portfolio')

@section('content')

<!-- Hero About Section -->
<section class="about-hero-section">
    <div class="about-hero-container">
        <!-- LEFT: Text Content -->
        <div class="about-hero-left">
            <span class="about-badge">About Me</span>

            <h1 class="about-heading">
                Creative <br>
                <span class="about-heading-accent">Front End</span><br>
                Developer
            </h1>

            <p class="about-desc">
                I'm a passionate developer crafting beautiful, functional web applications.
                I love turning complex problems into simple, elegant solutions using modern technologies.
            </p>

            <!-- Skills -->
            <div class="about-skills">
                <h3 class="about-skills-title">Best Skill On</h3>
                <div class="skills-grid">

                    <div class="skill-card">
                        <div class="skill-icon skill-php">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                            </svg>
                        </div>
                        <span class="skill-label">PHP</span>
                    </div>

                    <div class="skill-card">
                        <div class="skill-icon skill-html">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M1.5 0h21l-1.91 21.563L11.977 24l-8.564-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059.003.23-2.622L5.412 4.41l.698 8.01h9.126l-.326 3.426-2.91.804-2.955-.81-.188-2.11H6.248l.33 4.171L12 19.351l5.379-1.443.744-8.157H8.531z"/>
                            </svg>
                        </div>
                        <span class="skill-label">HTML</span>
                    </div>

                    <div class="skill-card">
                        <div class="skill-icon skill-css">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M1.5 0h21l-1.91 21.563L11.977 24l-8.565-2.438L1.5 0zm17.09 4.413L5.41 4.41l.213 2.622 10.125.002-.255 2.716h-6.64l.24 2.573h6.182l-.366 3.523-2.91.804-2.956-.81-.188-2.11h-2.61l.29 3.855L12 19.288l5.373-1.53L18.59 4.414z"/>
                            </svg>
                        </div>
                        <span class="skill-label">CSS</span>
                    </div>

                    <div class="skill-card">
                        <div class="skill-icon skill-js">
                            <svg class="w-6 h-6 text-gray-900" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M0 0h24v24H0V0zm22.034 18.276c-.175-1.095-.888-2.015-3.003-2.873-.736-.345-1.554-.585-1.797-1.14-.091-.33-.105-.51-.046-.705.15-.646.915-.84 1.515-.66.39.12.75.42.976.9 1.034-.676 1.034-.676 1.755-1.125-.27-.42-.404-.601-.586-.78-.63-.705-1.469-1.065-2.834-1.034l-.705.089c-.676.165-1.32.525-1.71 1.005-1.14 1.291-.811 3.541.569 4.471 1.365 1.02 3.361 1.244 3.616 2.205.24 1.17-.87 1.545-1.966 1.41-.811-.18-1.26-.586-1.755-1.336l-1.83 1.051c.21.48.45.689.81 1.109 1.74 1.756 6.09 1.666 6.871-1.004.029-.09.24-.705.074-1.65l.046.067zm-8.983-7.245h-2.248c0 1.938-.009 3.864-.009 5.805 0 1.232.063 2.363-.138 2.711-.33.689-1.18.601-1.566.48-.396-.196-.597-.466-.83-.855-.063-.105-.11-.196-.127-.196l-1.825 1.125c.305.63.75 1.172 1.324 1.517.855.51 2.004.675 3.207.405.783-.226 1.458-.691 1.811-1.411.51-.93.402-2.07.397-3.346.012-2.054 0-4.109 0-6.179l.004-.056z"/>
                            </svg>
                        </div>
                        <span class="skill-label">JavaScript</span>
                    </div>

                    <div class="skill-card">
                        <div class="skill-icon skill-laravel">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.642 5.43a.364.364 0 01.014.1v5.149c0 .135-.073.26-.189.326l-4.323 2.49v4.934a.378.378 0 01-.188.326L9.93 23.949a.316.316 0 01-.066.027.298.298 0 01-.033.01.3.3 0 01-.153 0 .29.29 0 01-.031-.009.319.319 0 01-.066-.027L.553 18.755a.378.378 0 01-.188-.326V2.974c0-.036.005-.072.014-.106a.371.371 0 01.02-.052.373.373 0 01.015-.023.348.348 0 01.05-.063.327.327 0 01.023-.02L5.044.126a.377.377 0 01.377 0L9.998 2.85a.378.378 0 01.19.326V12.81l3.758-2.161V5.556a.377.377 0 01.19-.326l4.576-2.724a.376.376 0 01.377 0l4.576 2.724a.378.378 0 01.012.007.344.344 0 01.051.064c.006.008.01.017.015.023a.37.37 0 01.02.052z"/>
                            </svg>
                        </div>
                        <span class="skill-label">Laravel</span>
                    </div>

                </div>
            </div>

            <!-- CTA Buttons -->
            <div class="about-cta-group">
                <a href="{{ route('portfolio.contact') }}" class="btn-primary">
                    Get In Touch
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
                <div class="find-with-me">
                    <span class="find-label">Find With Me</span>
                    <div class="social-icons">
                        <a href="https://github.com/zuiqua827" class="social-icon" title="Github">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303   3.438 9.8 8.205 11.387.6.113.82-.258.82-.577   0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61  -4.042-1.61-.546-1.387-1.333-1.756-1.333-1.756  -1.089-.745.083-.729.083-.729 1.205.084  1.84 1.236 1.84 1.236 1.07 1.835 2.809  1.305 3.495.998.108-.776.418-1.305.76-1.605  -2.665-.3-5.466-1.332-5.466-5.93   0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176   0 0 1.005-.322 3.3 1.23.96-.267   1.98-.399 3-.405 1.02.006 2.04.138   3 .405 2.28-1.552 3.285-1.23   3.285-1.23.645 1.653.24 2.873.12 3.176.765.84   1.23 1.91 1.23 3.22 0 4.61-2.805   5.625-5.475 5.92.42.36.81 1.096.81 2.22   0 1.606-.015 2.896-.015 3.286   0 .315.21.69.825.57C20.565 22.092 24   17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                        </a>
                        <a href="https://www.instagram.com/ssyahril_r/" class="social-icon" title="Instagram">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                        </a>
                        <a href="https://www.linkedin.com/in/aril-syahril-9644143aa/" class="social-icon" title="LinkedIn">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- RIGHT: Profile Image -->
        <div class="about-hero-right">
            <div class="profile-image-wrapper">
                <div class="profile-image-card">
                    <img src="{{ asset('Assets/profil.jpeg') }}" alt="Profile Photo" class="profile-img">
                </div>
                <div class="profile-deco-1"></div>
                <div class="profile-deco-2"></div>
                <div class="profile-badge-exp">
                    <span class="badge-num">1+</span>
                    <span class="badge-text">Year<br>Experience</span>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* ============================
   ABOUT HERO SECTION
   ============================ */
.about-hero-section {
    padding: 5rem 0 6rem;
    background: #f8f9fc;
    position: relative;
    overflow: hidden;
}

.dark .about-hero-section {
    background: #0f1117;
}

.about-hero-section::before {
    content: '';
    position: absolute;
    top: -120px;
    right: -120px;
    width: 500px;
    height: 500px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(239,68,68,0.07) 0%, transparent 70%);
    pointer-events: none;
}

.about-hero-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
    display: flex;
    align-items: center;
    gap: 5rem;
    flex-wrap: wrap;
}

/* LEFT */
.about-hero-left {
    flex: 1;
    min-width: 300px;
}

.about-badge {
    display: inline-block;
    font-size: 0.75rem;
    font-weight: 700;
    letter-spacing: 0.15em;
    text-transform: uppercase;
    color: #ef4444;
    background: rgba(239,68,68,0.08);
    border: 1px solid rgba(239,68,68,0.2);
    padding: 0.4rem 1rem;
    border-radius: 99px;
    margin-bottom: 1.5rem;
}

.about-heading {
    font-size: clamp(2.6rem, 5vw, 4.2rem);
    font-weight: 800;
    line-height: 1.1;
    color: #111827;
    margin-bottom: 1.5rem;
    letter-spacing: -0.02em;
}

.dark .about-heading {
    color: #f9fafb;
}

.about-heading-accent {
    color: #ef4444;
}

.about-desc {
    font-size: 1rem;
    color: #6b7280;
    line-height: 1.8;
    max-width: 480px;
    margin-bottom: 2.5rem;
}

.dark .about-desc {
    color: #9ca3af;
}

/* Skills */
.about-skills-title {
    font-size: 0.7rem;
    font-weight: 700;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: #9ca3af;
    margin-bottom: 1rem;
}

.skills-grid {
    display: flex;
    gap: 0.75rem;
    flex-wrap: wrap;
    margin-bottom: 2.5rem;
}

.skill-card {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 0.5rem;
    cursor: default;
}

.skill-icon {
    width: 52px;
    height: 52px;
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 14px rgba(0,0,0,0.12);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.skill-icon:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 22px rgba(0,0,0,0.18);
}

.skill-php    { background: linear-gradient(135deg, #7c3aed, #a855f7); }
.skill-html   { background: linear-gradient(135deg, #e34c26, #f06529); }
.skill-css    { background: linear-gradient(135deg, #264de4, #2965f1); }
.skill-js     { background: linear-gradient(135deg, #f7df1e, #f0c800); }
.skill-laravel { background: linear-gradient(135deg, #ff2d20, #ff6b35); }

.skill-label {
    font-size: 0.72rem;
    font-weight: 600;
    color: #374151;
    text-align: center;
}

.dark .skill-label {
    color: #d1d5db;
}

/* CTA */
.about-cta-group {
    display: flex;
    align-items: center;
    gap: 2.5rem;
    flex-wrap: wrap;
}

.btn-primary {
    display: inline-flex;
    align-items: center;
    gap: 0.6rem;
    background: #111827;
    color: #fff;
    padding: 0.85rem 2rem;
    border-radius: 8px;
    font-size: 0.95rem;
    font-weight: 700;
    text-decoration: none;
    letter-spacing: 0.01em;
    transition: background 0.2s ease, transform 0.2s ease, box-shadow 0.2s ease;
    box-shadow: 0 4px 14px rgba(0,0,0,0.15);
}

.btn-primary:hover {
    background: #ef4444;
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(239,68,68,0.35);
}

.dark .btn-primary {
    background: #f9fafb;
    color: #111827;
}

.dark .btn-primary:hover {
    background: #ef4444;
    color: #fff;
}

.find-with-me {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}

.find-label {
    font-size: 0.68rem;
    font-weight: 700;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: #9ca3af;
}

.social-icons {
    display: flex;
    gap: 0.6rem;
}

.social-icon {
    width: 40px;
    height: 40px;
    border-radius: 10px;
    background: #fff;
    border: 1px solid #e5e7eb;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #374151;
    text-decoration: none;
    transition: all 0.2s ease;
    box-shadow: 0 2px 8px rgba(0,0,0,0.06);
}

.social-icon:hover {
    background: #ef4444;
    color: #fff;
    border-color: #ef4444;
    transform: translateY(-3px);
}

.dark .social-icon {
    background: #1f2937;
    border-color: #374151;
    color: #d1d5db;
}

/* RIGHT: Profile Image */
.about-hero-right {
    flex: 0 0 auto;
    display: flex;
    justify-content: center;
}

.profile-image-wrapper {
    position: relative;
    width: 340px;
    height: 400px;
}

.profile-image-card {
    width: 100%;
    height: 100%;
    border-radius: 28px;
    overflow: hidden;
    box-shadow: 0 24px 64px rgba(0,0,0,0.18);
    border: 4px solid #fff;
    position: relative;
    z-index: 2;
}

.dark .profile-image-card {
    border-color: #1f2937;
}

.profile-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.profile-deco-1 {
    position: absolute;
    top: -18px;
    right: -18px;
    width: 100%;
    height: 100%;
    border-radius: 28px;
    border: 2px solid rgba(239,68,68,0.35);
    z-index: 1;
}

.profile-deco-2 {
    position: absolute;
    bottom: -12px;
    left: -12px;
    width: 80px;
    height: 80px;
    border-radius: 18px;
    background: linear-gradient(135deg, #ef4444, #f97316);
    z-index: 1;
    opacity: 0.8;
}

.profile-badge-exp {
    position: absolute;
    bottom: 30px;
    right: -20px;
    background: #fff;
    border-radius: 16px;
    padding: 0.75rem 1.2rem;
    box-shadow: 0 8px 28px rgba(0,0,0,0.14);
    z-index: 3;
    display: flex;
    align-items: center;
    gap: 0.6rem;
    border: 1px solid #f3f4f6;
}

.dark .profile-badge-exp {
    background: #1f2937;
    border-color: #374151;
}

.badge-num {
    font-size: 1.8rem;
    font-weight: 900;
    color: #ef4444;
    line-height: 1;
}

.badge-text {
    font-size: 0.7rem;
    font-weight: 700;
    color: #6b7280;
    line-height: 1.4;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

.dark .badge-text {
    color: #9ca3af;
}

/* Timeline dots & connectors */
.timeline-dot {
    position: absolute;
    left: calc(50% - 10px);
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background: linear-gradient(135deg, #ef4444, #f97316);
    border: 3px solid #fff;
    box-shadow: 0 0 0 3px rgba(239,68,68,0.25);
    z-index: 10;
}

.dark .timeline-dot {
    border-color: #111827;
}

.timeline-connector-right {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translateY(-50%);
    width: calc(50% - 10px - 2.5rem);
    height: 2px;
    background: linear-gradient(to right, #ef4444, rgba(239,68,68,0.15));
    z-index: 5;
}

.timeline-connector-left {
    position: absolute;
    right: 50%;
    top: 50%;
    transform: translateY(-50%);
    width: calc(50% - 10px - 2.5rem);
    height: 2px;
    background: linear-gradient(to left, #f97316, rgba(249,115,22,0.15));
    z-index: 5;
}

@media (max-width: 768px) {
    .timeline-dot { left: 22px; }
    .timeline-connector-right,
    .timeline-connector-left {
        left: 42px;
        right: auto;
        width: 2rem;
        background: linear-gradient(to right, #ef4444, rgba(239,68,68,0.15));
        transform: translateY(-50%);
    }
}

/* Responsive */
@media (max-width: 900px) {
    .about-hero-container {
        flex-direction: column-reverse;
        gap: 3rem;
        text-align: center;
    }
    .about-desc { margin-left: auto; margin-right: auto; }
    .skills-grid { justify-content: center; }
    .about-cta-group { justify-content: center; }
    .profile-image-wrapper { width: 280px; height: 330px; }
    .profile-badge-exp { right: 0; }
}
</style>

<!-- Timeline -->
<section class="py-32 bg-white dark:bg-neutral-900">
    <div class="container mx-auto px-4 max-w-4xl">
        <div class="text-center mb-24">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-6">My <span style="color:#ef4444">Journey</span></h2>
            <p class="text-xl text-gray-600 dark:text-neutral-400">A brief timeline of my learning journey</p>
        </div>

        <div class="tl-wrap">

            <!-- Item 1: card kanan -->
            <div class="tl-item tl-right">
                <div class="tl-dot"></div>
                <div class="tl-card">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">Started Coding</h3>
                    <p class="text-gray-600 dark:text-neutral-400 mb-4">2024-2025 Aku Mempelajari Coding Pertama kali Di SMK Negeri 1 Bangsri</p>
                    <span class="text-sm text-red-500 font-semibold">First HTML, CSS, JavaScript project</span>
                </div>
            </div>

            <!-- Item 2: card kiri -->
            <div class="tl-item tl-left">
                <div class="tl-dot"></div>
                <div class="tl-card">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">Projek Pertama</h3>
                    <p class="text-gray-600 dark:text-neutral-400 mb-4">2025-2026 Saya Membuat Tugas Projek</p>
                    <span class="text-sm text-orange-500 font-semibold">Learned Laravel & Teamwork</span>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
/* ============================
   TIMELINE
   ============================ */
.tl-wrap {
    position: relative;
    padding-bottom: 2rem;
}

/* Garis vertikal di tengah */
.tl-wrap::before {
    content: '';
    position: absolute;
    left: 50%;
    top: 0;
    bottom: 0;
    width: 3px;
    transform: translateX(-50%);
    background: linear-gradient(to bottom, #ef4444, #f97316);
    border-radius: 99px;
    z-index: 1;
}

.tl-item {
    position: relative;
    display: flex;
    align-items: center;
    margin-bottom: 5rem;
}

/* Dot di tengah */
.tl-dot {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    width: 22px;
    height: 22px;
    border-radius: 50%;
    background: linear-gradient(135deg, #ef4444, #f97316);
    border: 4px solid #fff;
    box-shadow: 0 0 0 3px rgba(239,68,68,0.3);
    z-index: 10;
}

.dark .tl-dot { border-color: #171717; }

/* Card */
.tl-card {
    width: calc(50% - 50px);
    background: #fff;
    border: 1px solid #f3f4f6;
    border-radius: 1rem;
    padding: 2rem;
    box-shadow: 0 4px 24px rgba(0,0,0,0.07);
    position: relative;
    z-index: 5;
}

.dark .tl-card {
    background: #262626;
    border-color: #404040;
}

/* Card kanan */
.tl-right .tl-card {
    margin-left: auto;
}

/* Garis horizontal kanan + arrow */
.tl-right .tl-card::before {
    content: '';
    position: absolute;
    left: -50px;
    top: 50%;
    transform: translateY(-50%);
    width: 40px;
    height: 2px;
    background: linear-gradient(to right, rgba(239,68,68,0.2), #ef4444);
}

.tl-right .tl-card::after {
    content: '';
    position: absolute;
    left: -10px;
    top: 50%;
    transform: translateY(-50%);
    border-width: 8px 8px 8px 0;
    border-style: solid;
    border-color: transparent #fff transparent transparent;
    filter: drop-shadow(-1px 0 0 #f3f4f6);
}

.dark .tl-right .tl-card::after {
    border-color: transparent #262626 transparent transparent;
}

/* Card kiri */
.tl-left .tl-card {
    margin-right: auto;
}

/* Garis horizontal kiri + arrow */
.tl-left .tl-card::before {
    content: '';
    position: absolute;
    right: -50px;
    top: 50%;
    transform: translateY(-50%);
    width: 40px;
    height: 2px;
    background: linear-gradient(to left, rgba(249,115,22,0.2), #f97316);
}

.tl-left .tl-card::after {
    content: '';
    position: absolute;
    right: -10px;
    top: 50%;
    transform: translateY(-50%);
    border-width: 8px 0 8px 8px;
    border-style: solid;
    border-color: transparent transparent transparent #fff;
    filter: drop-shadow(1px 0 0 #f3f4f6);
}

.dark .tl-left .tl-card::after {
    border-color: transparent transparent transparent #262626;
}

/* Mobile */
@media (max-width: 768px) {
    .tl-wrap::before {
        left: 22px;
    }
    .tl-item {
        padding-left: 55px;
        display: block;
    }
    .tl-dot {
        left: 22px;
        top: 24px;
        transform: translate(-50%, 0);
    }
    .tl-card {
        width: 100%;
        margin: 0 !important;
    }
    .tl-right .tl-card::before,
    .tl-left .tl-card::before {
        display: none;
    }
    .tl-right .tl-card::after,
    .tl-left .tl-card::after {
        display: none;
    }
}
</style>
@endsection 
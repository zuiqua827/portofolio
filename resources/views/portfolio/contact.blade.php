@extends('layouts.portfolio')

@section('title', 'Contact - Personal Portfolio')

@section('content')

<!-- Page Header -->
<section class="ct-header">
    <div class="ct-header-inner">
        <span class="ct-badge">Get In Touch</span>
        <h1 class="ct-title">Let's work <span class="ct-title-accent">together</span></h1>
        <p class="ct-subtitle">Ready to bring your next big idea to life? I'd love to hear about your project.</p>
    </div>
</section>

<!-- Contact Body -->
<section class="ct-body">
    <div class="ct-body-inner">

        <!-- LEFT: Info -->
        <div class="ct-info">

            <div class="ct-info-card">
                <div class="ct-info-icon">
                    <svg width="22" height="22" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.27 7.27c.883.883 2.317.883 3.2 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <div>
                    <p class="ct-info-label">Email</p>
                    <p class="ct-info-value">ariljepara08@gmail.com</p>
                </div>
            </div>

            <div class="ct-info-card">
                <div class="ct-info-icon">
                    <svg width="22" height="22" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                </div>
                <div>
                    <p class="ct-info-label">Phone</p>
                    <p class="ct-info-value">+62 821 3183 3341</p>
                </div>
            </div>

            <div class="ct-info-card">
                <div class="ct-info-icon">
                    <svg width="22" height="22" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <div>
                    <p class="ct-info-label">Location</p>
                    <p class="ct-info-value">Jepara, Jawa Tengah</p>
                </div>
            </div>

            <div class="ct-social-row">
                <p class="ct-info-label" style="margin-bottom:0.75rem">Find Me On</p>
                <div class="ct-socials">
                    <a href="https://wa.me/6282131833341" class="ct-social-btn" title="Whatsapp">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M16 .4C7.5.4.6 7.3.6 15.8c0 2.8.7 5.5 2.1 7.9L.3 31.6l8.2-2.2c2.3 1.2 4.9 1.9 7.5 1.9h.1c8.5 0 15.4-6.9 15.4-15.4C31.5 7.3 24.6.4 16 .4zm0 28c-2.4 0-4.7-.6-6.7-1.8l-.5-.3-4.9 1.3 1.3-4.8-.3-.5c-1.3-2.1-2-4.5-2-7C3 8.9 8.9 3 16 3c7.1 0 13 5.9 13 13s-5.9 12.9-13 12.9zm7.2-9.7c-.4-.2-2.3-1.1-2.6-1.2-.3-.1-.6-.2-.9.2-.3.4-1 1.2-1.2 1.4-.2.2-.5.3-.9.1-.4-.2-1.6-.6-3-1.8-1.1-1-1.8-2.2-2-2.6-.2-.4 0-.6.2-.8.2-.2.4-.5.6-.7.2-.2.3-.4.4-.6.1-.2.1-.5 0-.7-.1-.2-.9-2.2-1.2-3-.3-.8-.6-.7-.9-.7h-.8c-.3 0-.7.1-1 .5-.3.4-1.3 1.3-1.3 3.1s1.3 3.6 1.5 3.8c.2.2 2.6 4 6.3 5.6.9.4 1.6.6 2.1.8.9.3 1.7.2 2.3.1.7-.1 2.3-.9 2.6-1.8.3-.9.3-1.7.2-1.8-.1-.1-.3-.2-.7-.4z"/></svg>
                    </a>
                    <a href="https://www.instagram.com/ssyahril_r/" class="ct-social-btn" title="Instagram">
                        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                    </a>
                    <a href="https://www.linkedin.com/in/aril-syahril-9644143aa/" class="ct-social-btn" title="LinkedIn">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                    </a>
                    <a href="https://github.com/zuiqua827" class="ct-social-btn" title="GitHub">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 00-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0020 4.77 5.07 5.07 0 0019.91 1S18.73.65 16 2.48a13.38 13.38 0 00-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 005 4.77a5.44 5.44 0 00-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 009 18.13V22"/></svg>
                    </a>
                </div>
            </div>

        </div>

        <!-- RIGHT: Form -->
        <div class="ct-form-wrap">

            @if (session('success'))
                <div class="ct-success">
                    <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('portfolio.contact.store') }}" class="ct-form">
                @csrf
                <div class="ct-field">
                    <label class="ct-label">Full Name</label>
                    <input type="text" name="name" required
                           class="ct-input @error('name') ct-input-error @enderror"
                           placeholder="Your full name"
                           value="{{ old('name') }}">
                    @error('name')
                        <p class="ct-error-msg">{{ $message }}</p>
                    @enderror
                </div>

                <div class="ct-field">
                    <label class="ct-label">Email Address</label>
                    <input type="email" name="email" required
                           class="ct-input @error('email') ct-input-error @enderror"
                           placeholder="your.email@example.com"
                           value="{{ old('email') }}">
                    @error('email')
                        <p class="ct-error-msg">{{ $message }}</p>
                    @enderror
                </div>

                <div class="ct-field">
                    <label class="ct-label">Message</label>
                    <textarea name="message" required rows="6"
                              class="ct-input ct-textarea @error('message') ct-input-error @enderror"
                              placeholder="Tell me about your project...">{{ old('message') }}</textarea>
                    @error('message')
                        <p class="ct-error-msg">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="ct-submit">
                    Send Message
                    <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </button>
            </form>
        </div>

    </div>
</section>

<style>
.ct-header {
    background: #f8f9fc;
    padding: 3.5rem 2rem 2.5rem;
    border-bottom: 1px solid #f0f0f0;
}
.dark .ct-header { background: #0f1117; border-color: #1f2937; }
.ct-header-inner { max-width: 800px; margin: 0 auto; }

.ct-badge {
    display: inline-block;
    font-size: 0.7rem; font-weight: 700; letter-spacing: 0.15em;
    text-transform: uppercase; color: #ef4444;
    background: rgba(239,68,68,0.08); border: 1px solid rgba(239,68,68,0.2);
    padding: 0.35rem 0.9rem; border-radius: 99px; margin-bottom: 0.9rem;
}
.ct-title {
    font-size: clamp(2rem, 4vw, 3rem); font-weight: 900;
    color: #111827; line-height: 1.1; margin-bottom: 0.6rem; letter-spacing: -0.03em;
}
.dark .ct-title { color: #f9fafb; }
.ct-title-accent { color: #ef4444; }
.ct-subtitle { font-size: 1rem; color: #6b7280; line-height: 1.7; }
.dark .ct-subtitle { color: #9ca3af; }

/* Body */
.ct-body { background: #f8f9fc; padding: 3.5rem 2rem 5rem; }
.dark .ct-body { background: #0f1117; }
.ct-body-inner {
    max-width: 1100px; margin: 0 auto;
    display: grid; grid-template-columns: 320px 1fr;
    gap: 2.5rem; align-items: start;
}

/* Info Cards */
.ct-info { display: flex; flex-direction: column; gap: 1rem; }
.ct-info-card {
    background: #fff; border: 1px solid #f0f0f0; border-radius: 16px;
    padding: 1.2rem 1.4rem; display: flex; align-items: center; gap: 1rem;
    box-shadow: 0 2px 12px rgba(0,0,0,0.05);
    transition: transform 0.2s, box-shadow 0.2s;
}
.ct-info-card:hover { transform: translateY(-2px); box-shadow: 0 8px 28px rgba(0,0,0,0.09); }
.dark .ct-info-card { background: #1a1a1a; border-color: #2a2a2a; }

.ct-info-icon {
    width: 44px; height: 44px; border-radius: 11px;
    background: rgba(239,68,68,0.08); border: 1px solid rgba(239,68,68,0.15);
    display: flex; align-items: center; justify-content: center;
    color: #ef4444; flex-shrink: 0;
}
.ct-info-label {
    font-size: 0.7rem; font-weight: 700; letter-spacing: 0.1em;
    text-transform: uppercase; color: #9ca3af; margin-bottom: 0.2rem;
}
.ct-info-value { font-size: 0.9rem; font-weight: 600; color: #111827; }
.dark .ct-info-value { color: #f9fafb; }

.ct-social-row {
    background: #fff; border: 1px solid #f0f0f0; border-radius: 16px;
    padding: 1.2rem 1.4rem; box-shadow: 0 2px 12px rgba(0,0,0,0.05);
}
.dark .ct-social-row { background: #1a1a1a; border-color: #2a2a2a; }
.ct-socials { display: flex; gap: 0.6rem; }
.ct-social-btn {
    width: 40px; height: 40px; background: #f8f9fc; border-radius: 10px;
    display: flex; align-items: center; justify-content: center;
    color: #374151; border: 1px solid #f0f0f0; text-decoration: none;
    transition: all 0.2s;
}
.ct-social-btn:hover { background: #ef4444; color: #fff; border-color: #ef4444; transform: translateY(-2px); }
.dark .ct-social-btn { background: #0f1117; border-color: #374151; color: #d1d5db; }

/* Form */
.ct-form-wrap {
    background: #fff; border: 1px solid #f0f0f0; border-radius: 22px;
    padding: 2.5rem; box-shadow: 0 4px 24px rgba(0,0,0,0.06);
}
.dark .ct-form-wrap { background: #1a1a1a; border-color: #2a2a2a; }

.ct-success {
    display: flex; align-items: center; gap: 0.6rem;
    background: rgba(34,197,94,0.08); border: 1px solid rgba(34,197,94,0.25);
    color: #16a34a; padding: 1rem 1.2rem; border-radius: 12px;
    margin-bottom: 1.5rem; font-weight: 600; font-size: 0.9rem;
}

.ct-form { display: flex; flex-direction: column; gap: 1.4rem; }
.ct-field { display: flex; flex-direction: column; gap: 0.45rem; }
.ct-label { font-size: 0.82rem; font-weight: 700; color: #374151; letter-spacing: 0.03em; }
.dark .ct-label { color: #d1d5db; }

.ct-input {
    width: 100%; padding: 0.85rem 1.1rem;
    background: #f8f9fc; border: 1.5px solid #e5e7eb;
    border-radius: 12px; font-size: 0.93rem; color: #111827;
    outline: none; transition: border-color 0.2s, box-shadow 0.2s;
    font-family: inherit; box-sizing: border-box;
}
.ct-input:focus { border-color: #ef4444; box-shadow: 0 0 0 3px rgba(239,68,68,0.1); background: #fff; }
.ct-input::placeholder { color: #9ca3af; }
.dark .ct-input { background: #0f1117; border-color: #374151; color: #f9fafb; }
.dark .ct-input:focus { border-color: #ef4444; }
.ct-textarea { resize: vertical; min-height: 140px; }
.ct-input-error { border-color: #ef4444 !important; }
.ct-error-msg { font-size: 0.8rem; color: #ef4444; font-weight: 500; }

.ct-submit {
    display: inline-flex; align-items: center; justify-content: center; gap: 0.5rem;
    width: 100%; background: #111827; color: #fff;
    padding: 0.9rem 2rem; border-radius: 10px;
    font-weight: 700; font-size: 0.95rem; border: none; cursor: pointer;
    transition: all 0.2s ease; box-shadow: 0 4px 14px rgba(0,0,0,0.12);
}
.ct-submit:hover { background: #ef4444; transform: translateY(-2px); box-shadow: 0 8px 22px rgba(239,68,68,0.3); }
.dark .ct-submit { background: #f9fafb; color: #111827; }
.dark .ct-submit:hover { background: #ef4444; color: #fff; }

@media (max-width: 768px) {
    .ct-body-inner { grid-template-columns: 1fr; gap: 2rem; }
    .ct-form-wrap { padding: 1.8rem; }
}
</style>

@endsection
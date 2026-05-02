<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Baru dari Portfolio</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; background: #f4f6f9; color: #1f2937; }
        .wrapper { max-width: 580px; margin: 32px auto; background: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 24px rgba(0,0,0,0.08); }
        .header { background: #2563eb; padding: 36px 40px; text-align: center; }
        .header-icon { width: 56px; height: 56px; background: rgba(255,255,255,0.15); border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 16px; }
        .header h1 { color: #ffffff; font-size: 22px; font-weight: 700; letter-spacing: -0.3px; }
        .header p { color: rgba(255,255,255,0.75); font-size: 14px; margin-top: 6px; }
        .body { padding: 36px 40px; }
        .badge { display: inline-block; background: #eff6ff; color: #2563eb; font-size: 12px; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase; padding: 4px 12px; border-radius: 99px; margin-bottom: 24px; border: 1px solid #bfdbfe; }
        .sender-card { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 20px 24px; margin-bottom: 24px; display: flex; flex-direction: column; gap: 12px; }
        .sender-row { display: flex; align-items: center; gap: 12px; }
        .sender-label { font-size: 11px; font-weight: 700; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.08em; min-width: 60px; }
        .sender-value { font-size: 15px; font-weight: 600; color: #1e293b; }
        .sender-value a { color: #2563eb; text-decoration: none; }
        .divider { height: 1px; background: #e2e8f0; margin: 4px 0; }
        .message-label { font-size: 13px; font-weight: 700; color: #475569; margin-bottom: 12px; text-transform: uppercase; letter-spacing: 0.06em; }
        .message-box { background: #f8fafc; border: 1px solid #e2e8f0; border-left: 4px solid #2563eb; border-radius: 0 12px 12px 0; padding: 20px 24px; font-size: 15px; color: #374151; line-height: 1.7; white-space: pre-wrap; word-break: break-word; }
        .reply-btn { display: block; width: fit-content; margin: 28px auto 0; background: #2563eb; color: #ffffff; text-decoration: none; padding: 12px 32px; border-radius: 8px; font-size: 15px; font-weight: 600; text-align: center; }
        .footer { background: #f8fafc; border-top: 1px solid #e2e8f0; padding: 20px 40px; text-align: center; }
        .footer p { font-size: 12px; color: #94a3b8; line-height: 1.6; }
        .footer strong { color: #64748b; }
    </style>
</head>
<body>
    <div class="wrapper">
        <!-- Header -->
        <div class="header">
            <div class="header-icon">
                <svg width="28" height="28" fill="none" stroke="white" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.27 7.27c.883.883 2.317.883 3.2 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
            </div>
            <h1>Pesan Baru Masuk</h1>
            <p>Seseorang menghubungi Anda melalui halaman portofolio</p>
        </div>

        <!-- Body -->
        <div class="body">
            <div class="badge">📬 Pesan Kontak</div>

            <!-- Sender Info -->
            <div class="sender-card">
                <div class="sender-row">
                    <span class="sender-label">Nama</span>
                    <span class="sender-value">{{ $senderName }}</span>
                </div>
                <div class="divider"></div>
                <div class="sender-row">
                    <span class="sender-label">Email</span>
                    <span class="sender-value"><a href="mailto:{{ $senderEmail }}">{{ $senderEmail }}</a></span>
                </div>
            </div>

            <!-- Message -->
            <div class="message-label">💬 Isi Pesan</div>
            <div class="message-box">{{ $messageBody }}</div>

            <!-- Reply Button -->
            <a href="mailto:{{ $senderEmail }}" class="reply-btn">
                Balas Pesan Ini
            </a>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>Email ini dikirim otomatis dari form kontak di <strong>portofolio Anda</strong>.<br>
            Jika Anda merasa menerima email ini secara keliru, abaikan saja.</p>
        </div>
    </div>
</body>
</html>

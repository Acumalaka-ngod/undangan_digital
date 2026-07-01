<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $item['nama'] ?> - HJP Undangan Digital</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600&family=Great+Vibes&family=Sacramento&family=Lora:wght@400;600;700&family=Cormorant+Garamond:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --purple-deep: #c9a020;
            --purple-main: #f3cb51;
            --purple-light: #f7dc85;
            --purple-pale: #fef5e0;
            --gold: #c9a84c;
            --white: #ffffff;
            --gray-50: #f8f7fc;
            --gray-100: #f0ecf8;
            --gray-700: #3a3358;
            --gray-900: #1a1530;
            --green-wa: #25d366;
            --font-display: 'Playfair Display', serif;
            --font-body: 'Inter', sans-serif;
            --radius: 14px;
            --radius-pill: 999px;
            --shadow: 0 4px 24px rgba(201,160,32,0.15);
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: var(--font-body);
            background: var(--white);
            color: var(--gray-900);
            min-height: 100vh;
        }

        nav {
            background: var(--white);
            border-bottom: 1px solid var(--gray-100);
            padding: 14px 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky; top: 0; z-index: 100;
        }
        .nav-logo {
            height: 64px;
            width: auto;
            display: block;
            object-fit: contain;
        }
        .nav-back {
            color: var(--gray-700);
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 6px;
            transition: color 0.2s;
        }
        .nav-back:hover { color: var(--purple-main); }

        .preview-section {
            max-width: 1100px;
            margin: 0 auto;
            padding: 40px 24px 60px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: start;
        }

        .phone-wrapper {
            display: flex;
            justify-content: center;
            position: sticky;
            top: 90px;
        }
        .phone-mockup {
            width: min(320px, 90vw);
        }
        .phone-shell {
            background: #1a1530;
            border-radius: 42px;
            padding: 16px 12px;
            box-shadow: 0 30px 60px rgba(0,0,0,0.3), 0 0 0 2px rgba(255,255,255,0.1);
        }
        .phone-notch {
            width: 100px; height: 12px;
            background: #000;
            border-radius: 12px;
            margin: 0 auto 12px;
        }
        .phone-screen {
            border-radius: 28px;
            padding: 32px 20px 36px;
            aspect-ratio: 9 / 19;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
            overflow: hidden;
            background: <?= $item['theme_bg'] ?>;
        }

        .phone-screen .inv-label {
            font-family: 'Great Vibes', cursive;
            color: <?= $item['theme_accent'] ?>;
            opacity: 0.7;
            font-size: 1rem;
            letter-spacing: 2px;
            margin-bottom: 10px;
        }
        .phone-screen .inv-title {
            font-family: var(--font-display);
            color: <?= $item['theme_text'] ?>;
            font-size: 2rem;
            font-weight: 700;
            line-height: 1.1;
            margin-bottom: 6px;
        }
        .phone-screen .inv-names {
            color: <?= $item['theme_accent'] ?>;
            font-family: var(--font-display);
            font-size: 1rem;
            letter-spacing: 3px;
            margin-bottom: 20px;
        }
        .phone-screen .inv-divider {
            width: 70px; height: 1.5px;
            background: <?= $item['theme_accent'] ?>;
            opacity: 0.5;
            margin: 0 auto 18px;
        }
        .phone-screen .inv-date {
            color: <?= $item['theme_text'] ?>;
            opacity: 0.8;
            font-size: 0.85rem;
            letter-spacing: 1px;
        }
        .phone-screen .inv-location {
            color: <?= $item['theme_accent'] ?>;
            font-size: 0.75rem;
            letter-spacing: 2px;
            margin-top: 14px;
            opacity: 0.7;
            text-transform: uppercase;
        }
        .phone-screen .inv-ornament {
            margin-top: 24px;
            color: <?= $item['theme_accent'] ?>;
            opacity: 0.2;
            font-size: 1.4rem;
        }

        .detail-info { padding-top: 10px; }
        .detail-badge {
            display: inline-block;
            background: <?= $item['theme_accent'] ?>;
            color: #1a1130;
            font-size: 0.7rem;
            font-weight: 700;
            padding: 4px 12px;
            border-radius: var(--radius-pill);
            letter-spacing: 1px;
            margin-bottom: 14px;
        }
        .detail-name {
            font-family: var(--font-display);
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--gray-900);
            line-height: 1.15;
            margin-bottom: 8px;
        }
        .detail-desc {
            color: #6b6480;
            font-size: 0.95rem;
            line-height: 1.7;
            margin-bottom: 20px;
        }
        .detail-price {
            font-size: 1.6rem;
            font-weight: 700;
            color: var(--purple-main);
            margin-bottom: 24px;
        }
        .detail-price small {
            font-size: 0.85rem;
            font-weight: 400;
            color: #999;
        }
        .detail-actions {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            margin-bottom: 32px;
        }
        .btn-pesan {
            background: var(--green-wa);
            color: var(--white);
            border: none;
            padding: 14px 32px;
            border-radius: var(--radius-pill);
            font-size: 0.95rem;
            font-weight: 600;
            font-family: var(--font-body);
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: background 0.2s, transform 0.18s;
        }
        .btn-pesan:hover { background: #1da851; transform: translateY(-2px); }
        .btn-katalog {
            background: transparent;
            color: var(--purple-main);
            border: 1.5px solid var(--purple-main);
            padding: 13px 28px;
            border-radius: var(--radius-pill);
            font-size: 0.9rem;
            font-weight: 600;
            font-family: var(--font-body);
            cursor: pointer;
            text-decoration: none;
            transition: background 0.18s, color 0.18s;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }
        .btn-katalog:hover { background: var(--purple-main); color: var(--white); }
        .btn-demo {
            background: transparent;
            color: var(--gray-700);
            border: 1.5px solid #d5caea;
            padding: 13px 28px;
            border-radius: var(--radius-pill);
            font-size: 0.9rem;
            font-weight: 500;
            font-family: var(--font-body);
            cursor: pointer;
            text-decoration: none;
            transition: background 0.18s, border-color 0.18s, color 0.18s;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }
        .btn-demo:hover { border-color: var(--purple-main); color: var(--purple-main); background: var(--purple-pale); }

        .fitur-mini {
            background: var(--gray-50);
            border-radius: var(--radius);
            padding: 20px;
            margin-bottom: 24px;
        }
        .fitur-mini h4 {
            font-size: 0.8rem;
            font-weight: 600;
            color: var(--purple-main);
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 12px;
        }
        .fitur-mini-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }
        .fitur-mini-item {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.82rem;
            color: var(--gray-700);
        }
        .fitur-mini-item span {
            font-size: 1.1rem;
        }

        .include-list {
            list-style: none;
        }
        .include-list li {
            padding: 8px 0;
            font-size: 0.85rem;
            color: var(--gray-700);
            display: flex;
            align-items: center;
            gap: 10px;
            border-bottom: 1px solid var(--gray-100);
        }
        .include-list li:last-child { border-bottom: none; }
        .include-list li::before {
            content: '✓';
            color: var(--purple-main);
            font-weight: 700;
            width: 20px;
        }

        .other-section {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 24px 60px;
        }
        .other-section h3 {
            font-family: var(--font-display);
            font-size: 1.4rem;
            color: var(--gray-900);
            margin-bottom: 20px;
        }
        .other-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
        }
        .other-card {
            background: var(--white);
            border-radius: var(--radius);
            padding: 20px;
            box-shadow: 0 2px 12px rgba(201,160,32,0.08);
            text-decoration: none;
            transition: transform 0.2s, box-shadow 0.2s;
            display: block;
        }
        .other-card:hover { transform: translateY(-3px); box-shadow: 0 8px 24px rgba(201,160,32,0.12); }
        .other-card .thumb {
            height: 100px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: var(--font-display);
            font-style: italic;
            color: var(--white);
            margin-bottom: 12px;
        }
        .other-card .name {
            font-weight: 600;
            color: var(--gray-900);
            font-size: 0.9rem;
        }
        .other-card .price {
            font-size: 0.82rem;
            color: var(--purple-main);
            font-weight: 600;
            margin-top: 4px;
        }
        .other-card.active {
            border: 2px solid var(--purple-main);
        }

        footer {
            background: var(--gray-900);
            color: rgba(255,255,255,0.55);
            padding: 40px 24px 24px;
        }
        .footer-inner {
            max-width: 1100px;
            margin: 0 auto;
        }
        .footer-brand {
            height: 60px;
            width: auto;
            display: block;
            object-fit: contain;
            margin-bottom: 10px;
        }
        .footer-tagline {
            font-size: 0.82rem;
            color: rgba(255,255,255,0.4);
            margin-bottom: 20px;
        }
        .footer-social {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }
        .footer-social a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 34px; height: 34px;
            border-radius: 50%;
            background: rgba(255,255,255,0.06);
            color: rgba(255,255,255,0.4);
            text-decoration: none;
            font-size: 0.9rem;
            transition: background 0.18s, color 0.18s;
        }
        .footer-social a:hover {
            background: var(--purple-main);
            color: var(--gray-900);
        }
        .footer-bottom {
            padding-top: 20px;
            border-top: 1px solid rgba(255,255,255,0.06);
            font-size: 0.72rem;
            color: rgba(255,255,255,0.3);
        }

        @media (max-width: 768px) {
            nav { padding: 12px 20px; }
            .nav-logo { height: 52px; }

            .preview-section {
                grid-template-columns: 1fr;
                padding: 24px 20px 40px;
                gap: 28px;
            }
            .phone-wrapper { position: static; }
            .phone-mockup { width: min(280px, 75vw); }
            .phone-screen { min-height: 400px; }
            .detail-info { padding-top: 0; }
            .detail-name { font-size: 1.8rem; }

            .other-grid { grid-template-columns: 1fr 1fr; gap: 14px; }
            .other-section { padding: 0 20px 40px; }
        }

        @media (max-width: 480px) {
            nav { padding: 10px 16px; }
            .nav-back { font-size: 0.82rem; }

            .preview-section { padding: 16px 16px 32px; gap: 24px; }
            .phone-mockup { width: min(240px, 80vw); }
            .phone-shell { padding: 12px 10px; border-radius: 32px; }
            .phone-notch { width: 80px; height: 10px; }
            .phone-screen { padding: 22px 14px 26px; border-radius: 22px; }
            .phone-screen .inv-title { font-size: 1.6rem; }
            .phone-screen .inv-names { font-size: 0.85rem; letter-spacing: 2px; }
            .phone-screen .inv-date { font-size: 0.75rem; }

            .detail-name { font-size: 1.5rem; }
            .detail-desc { font-size: 0.85rem; }
            .detail-price { font-size: 1.3rem; }
            .detail-actions { flex-direction: column; }
            .btn-pesan, .btn-katalog, .btn-demo { width: 100%; justify-content: center; }

            .fitur-mini { padding: 16px; }
            .fitur-mini h4 { font-size: 0.72rem; }
            .fitur-mini-grid { grid-template-columns: 1fr; gap: 8px; }
            .fitur-mini-item { font-size: 0.78rem; }
            .include-list li { font-size: 0.8rem; padding: 6px 0; }

            .other-section { padding: 0 16px 32px; }
            .other-section h3 { font-size: 1.2rem; margin-bottom: 16px; }
            .other-grid { grid-template-columns: 1fr; gap: 12px; }
            .other-card { padding: 16px; }
            .other-card .thumb { height: 80px; }
            .other-card .name { font-size: 0.82rem; }

            footer { padding: 32px 16px 20px; text-align: center; }
            .footer-brand { height: 50px; }
            .footer-tagline { font-size: 0.78rem; }
            .footer-social { justify-content: center; }
        }

        @media (max-width: 360px) {
            nav { padding: 8px 12px; }
            .nav-back { font-size: 0.75rem; }

            .preview-section { padding: 12px 12px 24px; gap: 18px; }
            .phone-mockup { width: min(180px, 70vw); }
            .phone-shell { padding: 10px 8px; border-radius: 26px; }
            .phone-notch { width: 60px; height: 8px; margin-bottom: 8px; }
            .phone-screen { padding: 18px 8px 18px; border-radius: 18px; }
            .phone-screen .inv-title { font-size: 1.2rem; }
            .phone-screen .inv-names { font-size: 0.75rem; letter-spacing: 1px; }
            .phone-screen .inv-date { font-size: 0.68rem; }
            .phone-screen .inv-location { font-size: 0.62rem; }

            .detail-name { font-size: 1.2rem; }
            .detail-desc { font-size: 0.8rem; }
            .detail-price { font-size: 1.1rem; margin-bottom: 18px; }
            .detail-actions { gap: 8px; }
            .btn-pesan, .btn-katalog, .btn-demo { padding: 11px 20px; font-size: 0.82rem; }

            .fitur-mini { padding: 12px; }
            .fitur-mini h4 { font-size: 0.68rem; }
            .fitur-mini-item { font-size: 0.72rem; gap: 6px; }
            .include-list li { font-size: 0.72rem; padding: 5px 0; }

            .other-section { padding: 0 12px 24px; }
            .other-section h3 { font-size: 1rem; margin-bottom: 12px; }
            .other-grid { gap: 10px; }
            .other-card { padding: 12px; }
            .other-card .thumb { height: 70px; }
            .other-card .name { font-size: 0.75rem; }
            .other-card .price { font-size: 0.72rem; }

            footer { padding: 24px 12px 18px; text-align: center; }
            .footer-brand { height: 44px; }
            .footer-tagline { font-size: 0.72rem; }
            .footer-social { justify-content: center; }
            .footer-social a { width: 28px; height: 28px; font-size: 0.75rem; }
            .footer-bottom { font-size: 0.65rem; }
        }
    </style>
</head>
<body>

<nav>
    <a href="<?= base_url() ?>"><img src="<?= base_url('assets/images/hjp-logo.png') ?>" alt="HJP" class="nav-logo"></a>
    <a href="<?= base_url() ?>" class="nav-back">← Kembali</a>
</nav>

<div class="preview-section">
    <div class="phone-wrapper">
        <div class="phone-mockup">
            <div class="phone-shell">
                <div class="phone-notch"></div>
                <div class="phone-screen">
                    <div class="inv-label">Undangan Pernikahan</div>
                    <div class="inv-title" style="font-family:<?= explode(',', $item['font_pair'])[0] ?>"><?= explode(' &', $item['couple'])[0] ?></div>
                    <div class="inv-names" style="font-family:<?= explode(',', $item['font_pair'])[0] ?>">&</div>
                    <div class="inv-title" style="font-family:<?= explode(',', $item['font_pair'])[0] ?>"><?= explode('& ', $item['couple'])[1] ?? '' ?></div>
                    <div class="inv-divider"></div>
                    <div class="inv-date"><?= $item['tanggal'] ?></div>
                    <div class="inv-location">Gedung Serbaguna Merdeka, Jakarta</div>
                    <div class="inv-ornament">✿ ✿ ✿</div>
                </div>
            </div>
        </div>
    </div>

    <div class="detail-info">
        <?php if ($item['badge']): ?>
            <div class="detail-badge"><?= $item['badge'] ?></div>
        <?php endif; ?>

        <h1 class="detail-name"><?= $item['nama'] ?></h1>
        <p class="detail-desc"><?= $item['deskripsi'] ?></p>
        <div class="detail-price">Rp <?= number_format($item['harga'], 0, ',', '.') ?> <small>paket dasar</small></div>

        <div class="detail-actions">
            <?php
                $wa_text = urlencode("Halo HJP, saya tertarik dengan tema {$item['nama']} (Rp " . number_format($item['harga'], 0, ',', '.') . "). Mohon informasi lebih lanjut.");
            ?>
            <a href="https://wa.me/6289505799964?text=<?= $wa_text ?>" target="_blank" class="btn-pesan">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.025.507 3.934 1.395 5.608L0 24l6.545-1.371A11.945 11.945 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-1.89 0-3.663-.524-5.18-1.433l-.371-.222-3.884.814.826-3.778-.241-.388A9.946 9.946 0 012 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
                Pesan via WhatsApp
            </a>
            <a href="<?= base_url('#pesan') ?>" class="btn-katalog">Pesan via Form</a>
            <a href="<?= $item['demo_url'] ?>" target="_blank" class="btn-demo">👁 Lihat Demo</a>
        </div>

        <div class="fitur-mini">
            <h4>Yang Termasuk</h4>
            <ul class="include-list">
                <li>Desain eksklusif tema <?= $item['nama'] ?></li>
                <li>Halaman utama undangan digital</li>
                <li>Informasi acara lengkap</li>
                <li>Google Maps terintegrasi</li>
                <li>RSVP online</li>
                <li>Buku tamu digital</li>
                <li>Music player latar</li>
                <li>Gallery foto momen</li>
            </ul>
        </div>

        <div class="fitur-mini">
            <h4>Keunggulan</h4>
            <div class="fitur-mini-grid">
                <?php foreach ($fitur as $f): ?>
                <div class="fitur-mini-item">
                    <span><?= $f['icon'] ?></span>
                    <?= $f['judul'] ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<div class="other-section">
    <h3>Template Lainnya</h3>
    <div class="other-grid">
        <?php foreach ($katalog as $t): ?>
        <a href="<?= site_url('detail/'.$t['id']) ?>" class="other-card <?= ($t['id'] === $item['id']) ? 'active' : '' ?>">
            <div class="thumb" style="overflow:hidden;">
                <img src="<?= base_url($t['gambar']) ?>" alt="<?= $t['nama'] ?>" style="width:100%;height:100%;object-fit:cover;display:block;">
            </div>
            <div class="name"><?= $t['nama'] ?></div>
            <div class="price">Rp <?= number_format($t['harga'], 0, ',', '.') ?></div>
        </a>
        <?php endforeach; ?>
    </div>
</div>

<footer>
    <div class="footer-inner">
        <img src="<?= base_url('assets/images/hjp-logo.png') ?>" alt="HJP" class="footer-brand">
        <p class="footer-tagline">Undangan digital premium untuk momen berharga Anda.</p>
        <div class="footer-social">
            <a href="https://wa.me/6289505799964" target="_blank" aria-label="WhatsApp">&#120143;</a>
            <a href="#" aria-label="Instagram">&#120157;</a>
            <a href="#" aria-label="TikTok">&#120143;</a>
        </div>
        <div class="footer-bottom">&copy; <?= date('Y') ?> HJP Digital Invitation</div>
    </div>
</footer>

</body>
</html>

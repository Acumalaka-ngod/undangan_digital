    <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HJP - Undangan Digital Premium</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
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
            line-height: 1.6;
        }

        nav {
            position: sticky; top: 0; z-index: 100;
            background: var(--white);
            border-bottom: 1px solid var(--gray-100);
            padding: 14px 24px;
            display: flex; align-items: center; justify-content: space-between;
        }
        .nav-logo {
            height: 64px;
            width: auto;
            display: block;
            object-fit: contain;
        }
        .btn-primary {
            background: var(--purple-main);
            color: var(--white);
            border: none; cursor: pointer;
            padding: 10px 22px;
            border-radius: var(--radius-pill);
            font-size: 0.875rem; font-weight: 600;
            font-family: var(--font-body);
            transition: background 0.2s;
            text-decoration: none;
        }
        .btn-primary:hover { background: var(--purple-deep); }

        .hero {
            background: linear-gradient(135deg, #6b4a10 0%, #c9a020 50%, #f3cb51 100%);
            overflow: hidden;
            position: relative;
        }
        .hero::before {
            content: '';
            position: absolute; top: 0; left: 0; right: 0; bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.04'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
        .hero-inner {
            max-width: 1100px;
            margin: 0 auto;
            padding: 50px 24px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
            position: relative;
            min-height: min(70vh, 520px);
        }
        .hero-text {
            text-align: left;
        }
        .hero-eyebrow {
            font-size: 0.8rem; font-weight: 600; letter-spacing: 3px;
            text-transform: uppercase;
            color: rgba(255,255,255,0.65);
            margin-bottom: 14px;
            display: block;
        }
        .hero h1 {
            font-family: var(--font-display);
            font-size: clamp(1.8rem, 4vw, 2.8rem);
            color: var(--white);
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 16px;
        }
        .hero p {
            color: rgba(255,255,255,0.78);
            font-size: 0.95rem;
            line-height: 1.7;
            margin-bottom: 28px;
            max-width: 440px;
        }
        .hero-btns {
            display: flex; gap: 12px; flex-wrap: wrap;
        }
        .btn-white {
            background: var(--white); color: var(--purple-main);
            border: none; cursor: pointer; padding: 14px 28px;
            border-radius: var(--radius-pill); font-size: 0.95rem; font-weight: 600;
            font-family: var(--font-body); text-decoration: none;
            transition: transform 0.18s, box-shadow 0.18s;
            box-shadow: 0 4px 16px rgba(0,0,0,0.15);
        }
        .btn-white:hover { transform: translateY(-2px); box-shadow: 0 8px 24px rgba(0,0,0,0.2); }
        .btn-outline {
            background: transparent; color: var(--white);
            border: 2px solid rgba(255,255,255,0.5);
            cursor: pointer; padding: 13px 28px;
            border-radius: var(--radius-pill); font-size: 0.95rem; font-weight: 600;
            font-family: var(--font-body); text-decoration: none;
            transition: background 0.18s, border-color 0.18s;
        }
        .btn-outline:hover { background: rgba(255,255,255,0.1); border-color: var(--white); }

        .hero-visual {
            display: flex;
            justify-content: center;
            align-items: flex-end;
            align-self: stretch;
            position: relative;
        }
        .phone-mockup {
            position: relative;
            width: min(260px, 28vw);
            margin-bottom: -30px;
        }
        .phone-shell {
            background: #1a1530;
            border-radius: 38px;
            padding: 14px 10px;
            box-shadow: 0 40px 80px rgba(0,0,0,0.5), 0 0 0 2px rgba(255,255,255,0.08);
            position: relative;
        }
        .phone-notch {
            width: 90px; height: 10px;
            background: #000;
            border-radius: 10px;
            margin: 0 auto 10px;
        }
        .phone-screen {
            background: linear-gradient(135deg, #1c1128 0%, #2d1860 100%);
            border-radius: 26px;
            padding: 28px 18px 32px;
            aspect-ratio: 9 / 19;
            display: flex; flex-direction: column; align-items: center; justify-content: center;
            text-align: center;
            overflow: hidden;
            position: relative;
        }
        .phone-screen::before {
            content: '✿ ✿ ✿';
            position: absolute; top: 16px; left: 0; right: 0;
            color: rgba(201,168,76,0.4);
            font-size: 1.2rem; letter-spacing: 8px;
        }
        .phone-screen .inv-label {
            font-family: var(--font-display);
            font-style: italic;
            color: rgba(255,255,255,0.6);
            font-size: 0.75rem; letter-spacing: 3px;
            margin-bottom: 10px;
        }
        .phone-screen .inv-title {
            font-family: var(--font-display);
            color: var(--white);
            font-size: 1.8rem; font-weight: 700;
            line-height: 1.1;
            margin-bottom: 6px;
        }
        .phone-screen .inv-names {
            color: var(--gold);
            font-size: 0.85rem; letter-spacing: 2px;
            margin-bottom: 20px;
        }
        .phone-screen .inv-divider {
            width: 60px; height: 1px;
            background: rgba(201,168,76,0.4);
            margin: 0 auto 16px;
        }
        .phone-screen .inv-date {
            color: rgba(255,255,255,0.75);
            font-size: 0.8rem; letter-spacing: 1px;
        }
        .phone-badge {
            position: absolute; bottom: 20px; right: -40px;
            background: var(--white);
            border-radius: 999px;
            padding: 10px 18px 10px 14px;
            box-shadow: 0 8px 32px rgba(201,160,32,0.25);
            font-size: 0.75rem; font-weight: 600;
            color: var(--purple-main);
            white-space: nowrap;
            display: flex;
            align-items: center;
            gap: 8px;
            animation: floatBadge 3s ease-in-out infinite;
            z-index: 10;
        }
        .phone-badge::before {
            content: '';
            position: absolute;
            left: -6px;
            bottom: 14px;
            width: 12px;
            height: 12px;
            background: var(--white);
            border-radius: 2px;
            transform: rotate(45deg);
        }
        @keyframes floatBadge {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-6px); }
        }

        section { padding: 64px 24px; max-width: 1100px; margin: 0 auto; }

        .section-label {
            font-size: 0.8rem; font-weight: 600; letter-spacing: 3px;
            text-transform: uppercase; color: var(--purple-main);
            margin-bottom: 10px;
        }
        .section-title {
            font-family: var(--font-display);
            font-size: clamp(1.5rem, 4vw, 2.2rem);
            font-weight: 700; color: var(--gray-900);
            margin-bottom: 8px; line-height: 1.25;
        }
        .section-sub {
            color: #6b6480; font-size: 0.95rem;
            margin-bottom: 36px;
        }

        .katalog-grid {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 20px;
        }
        .katalog-card {
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            background: var(--white);
            border: 1px solid var(--gray-100);
            transition: transform 0.2s, box-shadow 0.2s;
            display: flex;
            flex-direction: column;
        }
        .katalog-card:hover { transform: translateY(-4px); box-shadow: 0 16px 40px rgba(201,160,32,0.18); }
        .card-strip {
            height: 6px;
            flex-shrink: 0;
        }
        .card-dark .card-strip { background: linear-gradient(90deg, #2d1860, #4a28a0); }
        .card-green .card-strip { background: linear-gradient(90deg, #1e3528, #3a7a5a); }
        .card-royal .card-strip { background: linear-gradient(90deg, #2c1a0e, #6b4420); }
        .card-thumb {
            height: 170px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
            background: var(--gray-50);
        }
        .card-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }
        .card-badge {
            position: absolute; top: 10px; right: 10px;
            background: var(--gold); color: #1a1130;
            font-size: 0.55rem; font-weight: 700;
            padding: 3px 9px; border-radius: var(--radius-pill);
            letter-spacing: 0.5px;
            z-index: 2;
        }
        .card-info {
            padding: 20px 20px 22px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        .card-info h3 {
            font-family: var(--font-display);
            font-size: 1.1rem; font-weight: 600;
            color: var(--gray-900); margin-bottom: 4px;
        }
        .card-info p { font-size: 0.8rem; color: #7a7090; margin-bottom: 14px; flex: 1; line-height: 1.5; }
        .card-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: auto;
            padding-top: 14px;
            border-top: 1px solid var(--gray-100);
        }
        .card-footer .harga {
            font-size: 0.95rem; font-weight: 700;
            color: var(--purple-main);
        }
        .card-btns {
            display: flex;
            gap: 8px;
        }
        .btn-order {
            background: transparent; color: var(--purple-main);
            border: 1.5px solid var(--purple-main);
            padding: 7px 16px; border-radius: var(--radius-pill);
            font-size: 0.75rem; font-weight: 600;
            font-family: var(--font-body); cursor: pointer;
            text-decoration: none;
            transition: background 0.18s, color 0.18s;
        }
        .btn-order:hover { background: var(--purple-main); color: var(--white); }

        #fitur { background: var(--gray-50); border-radius: 24px; }
        .fitur-grid {
            display: grid; grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        .fitur-card {
            background: var(--white);
            border-radius: var(--radius);
            padding: 24px 20px;
            box-shadow: 0 2px 12px rgba(201,160,32,0.08);
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .fitur-card:hover { transform: translateY(-2px); box-shadow: 0 8px 24px rgba(201,160,32,0.12); }
        .fitur-icon {
            font-size: 1.3rem;
            background: var(--purple-pale);
            width: 44px; height: 44px;
            border-radius: 10px;
            display: flex; align-items: center; justify-content: center;
            margin-bottom: 12px;
        }
        .fitur-card h3 { font-size: 0.92rem; font-weight: 600; color: var(--gray-900); margin-bottom: 4px; }
        .fitur-card p { font-size: 0.8rem; color: #7a7090; line-height: 1.5; }

        .steps {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 32px;
            position: relative;
            padding-top: 16px;
        }
        .step {
            text-align: center;
            position: relative;
        }
        .step::before {
            content: '';
            position: absolute;
            top: 0; left: 50%;
            transform: translateX(-50%);
            width: 1px; height: 100%;
            background: linear-gradient(to bottom, var(--purple-main), var(--purple-pale));
            opacity: 0.3;
        }
        .step:first-child::before { display: none; }
        .step-num {
            width: 48px; height: 48px;
            margin: 0 auto 20px;
            background: var(--white);
            color: var(--purple-main);
            border: 2px solid var(--purple-main);
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-weight: 700; font-size: 1.1rem;
            font-family: var(--font-display);
            position: relative;
            z-index: 1;
            transition: background 0.2s, color 0.2s;
        }
        .step:hover .step-num {
            background: var(--purple-main);
            color: var(--white);
        }
        .step h3 {
            font-size: 1rem; font-weight: 600;
            color: var(--gray-900); margin-bottom: 6px;
        }
        .step p {
            font-size: 0.82rem; color: #6b6480;
            line-height: 1.6; max-width: 220px; margin: 0 auto;
        }

        #pesan {
            background: var(--gray-50);
            border-radius: 32px;
            margin-bottom: 48px;
            padding: 48px 40px;
        }
        #pesan .section-title { color: var(--gray-900); }
        #pesan .section-sub { margin-bottom: 0; }
        .form-card {
            background: var(--white);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.04), 0 8px 32px rgba(201,160,32,0.08);
            margin-top: 28px;
        }
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        .form-group {
            position: relative;
            margin-bottom: 20px;
        }
        .form-group .field-wrap {
            position: relative;
        }
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 22px 16px 8px;
            border: 1.5px solid #e5e0ef;
            border-radius: 12px;
            font-size: 0.9rem;
            font-family: var(--font-body);
            color: var(--gray-900);
            background: var(--white);
            outline: none;
            transition: border-color 0.2s, box-shadow 0.2s;
            -webkit-appearance: none;
            appearance: none;
        }
        .form-group textarea {
            padding: 22px 16px 10px;
            resize: vertical;
            min-height: 90px;
        }
        .form-group select {
            background-image: url("data:image/svg+xml,%3Csvg width='12' height='8' viewBox='0 0 12 8' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1 1.5L6 6.5L11 1.5' stroke='%236b6480' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 16px center;
            padding-right: 40px;
        }
        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: var(--purple-main);
            box-shadow: 0 0 0 3px rgba(243,203,81,0.15);
        }
        .form-group label {
            position: absolute;
            top: 50%;
            left: 16px;
            transform: translateY(-50%);
            font-size: 0.85rem;
            font-weight: 500;
            color: #8a7fa0;
            pointer-events: none;
            transition: all 0.18s ease;
            transform-origin: left center;
        }
        .form-group textarea ~ label {
            top: 16px;
            transform: none;
        }
        .form-group input:focus ~ label,
        .form-group input:not(:placeholder-shown) ~ label,
        .form-group select:focus ~ label,
        .form-group select:valid ~ label,
        .form-group textarea:focus ~ label,
        .form-group textarea:not(:placeholder-shown) ~ label {
            top: 8px;
            transform: scale(0.78);
            color: var(--purple-main);
            font-weight: 600;
        }
        .form-group input::placeholder,
        .form-group textarea::placeholder { color: transparent; }
        .form-group .field-hint {
            font-size: 0.72rem;
            color: #9a90ad;
            margin-top: 5px;
            padding-left: 4px;
        }
        .btn-submit {
            width: 100%;
            background: var(--green-wa); color: var(--white);
            border: none; cursor: pointer;
            padding: 16px;
            border-radius: 14px;
            font-size: 1rem; font-weight: 700;
            font-family: var(--font-body);
            display: flex; align-items: center; justify-content: center; gap: 10px;
            transition: background 0.2s, transform 0.18s, box-shadow 0.2s;
            margin-top: 8px;
            box-shadow: 0 4px 16px rgba(37,211,102,0.25);
        }
        .btn-submit:hover { background: #1da851; transform: translateY(-2px); box-shadow: 0 8px 28px rgba(37,211,102,0.35); }
        .btn-submit svg { flex-shrink: 0; }
        .form-footnote {
            text-align: center;
            font-size: 0.78rem;
            color: #9a90ad;
            margin-top: 18px;
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
            section { padding: 48px 20px; }
            .hero-inner { grid-template-columns: 1fr; gap: 24px; padding: 40px 24px; min-height: auto; text-align: center; }
            .hero-text { text-align: center; }
            .hero h1 { font-size: clamp(1.5rem, 4vw, 2.2rem); }
            .hero p { max-width: none; }
            .hero-btns { justify-content: center; }
            .hero-visual { align-items: center; }
            .phone-mockup { width: min(240px, 50vw); margin-bottom: -20px; }
            .fitur-grid { gap: 16px; }
            .steps { grid-template-columns: 1fr 1fr; gap: 24px 32px; }
            .step::before { display: none; }
            #pesan { padding: 40px 24px; }
            .form-card { padding: 32px 28px; }
        }

        @media (max-width: 480px) {
            nav { padding: 12px 16px; }
            .btn-primary { padding: 8px 16px; font-size: 0.8rem; }

            .hero-inner { padding: 32px 16px; gap: 20px; }
            .hero h1 { font-size: 1.5rem; }
            .hero p { font-size: 0.875rem; margin-bottom: 24px; }
            .hero-btns { flex-direction: column; align-items: center; gap: 10px; }
            .btn-white, .btn-outline { width: 100%; max-width: 280px; text-align: center; padding: 13px 20px; font-size: 0.875rem; }

            .phone-mockup { width: min(200px, 55vw); margin-bottom: -10px; }
            .phone-shell { padding: 12px 10px; border-radius: 32px; }
            .phone-notch { width: 80px; height: 10px; }
            .phone-screen { padding: 22px 14px 24px; border-radius: 22px; }
            .phone-screen .inv-title { font-size: 1.4rem; }
            .phone-screen .inv-names { font-size: 0.75rem; }
            .phone-badge { font-size: 0.65rem; padding: 7px 14px 7px 10px; right: -20px; bottom: 10px; }
            .phone-badge::before { bottom: 10px; left: -5px; width: 10px; height: 10px; }

            section { padding: 40px 16px; }
            .section-title { font-size: 1.35rem; }
            .section-sub { font-size: 0.85rem; margin-bottom: 28px; }

            .katalog-grid { grid-template-columns: 1fr; }
            .fitur-grid { grid-template-columns: 1fr; gap: 14px; }
            .card-thumb { height: 140px; }
            .card-info { padding: 16px 16px 18px; }
            .card-info h3 { font-size: 1rem; }
            .card-info p { font-size: 0.78rem; }
            .card-footer { padding-top: 12px; }
            .card-footer .harga { font-size: 0.85rem; }

            .steps { grid-template-columns: 1fr 1fr; gap: 24px 32px; }
            .step::before { display: none; }
            .step-num { width: 44px; height: 44px; font-size: 1rem; margin-bottom: 16px; }
            .step h3 { font-size: 0.92rem; }
            .step p { font-size: 0.8rem; max-width: none; }

            #pesan { padding: 32px 16px; }
            .form-card { padding: 24px 20px; }
            .form-row { grid-template-columns: 1fr; gap: 0; }
            .form-group input,
            .form-group select,
            .form-group textarea { padding: 20px 14px 8px; font-size: 0.85rem; }
            .form-group label { left: 14px; font-size: 0.8rem; }
            .form-group input:focus ~ label,
            .form-group input:not(:placeholder-shown) ~ label,
            .form-group select:focus ~ label,
            .form-group select:valid ~ label,
            .form-group textarea:focus ~ label,
            .form-group textarea:not(:placeholder-shown) ~ label { top: 6px; }
            .btn-submit { padding: 14px; font-size: 0.9rem; border-radius: 12px; }

            footer { padding: 32px 16px 20px; text-align: center; }
            .footer-brand { height: 50px; }
            .footer-tagline { font-size: 0.78rem; }
            .footer-social { justify-content: center; }
        }

        @media (max-width: 360px) {
            nav { padding: 10px 12px; }
            .btn-primary { padding: 6px 12px; font-size: 0.75rem; }

            .hero-inner { padding: 24px 12px; gap: 16px; }
            .hero h1 { font-size: 1.25rem; }
            .hero p { font-size: 0.8rem; margin-bottom: 20px; }
            .hero-btns { gap: 8px; }
            .btn-white, .btn-outline { padding: 11px 16px; font-size: 0.8rem; max-width: 220px; }

            .phone-mockup { width: min(170px, 65vw); margin-bottom: -6px; }
            .phone-shell { padding: 10px 8px; border-radius: 26px; }
            .phone-notch { width: 60px; height: 8px; margin-bottom: 8px; }
            .phone-screen { padding: 18px 10px 20px; border-radius: 18px; }
            .phone-screen .inv-title { font-size: 1.1rem; }
            .phone-screen .inv-names { font-size: 0.65rem; letter-spacing: 1px; }
            .phone-badge { font-size: 0.55rem; padding: 4px 8px 4px 6px; right: -8px; bottom: 4px; gap: 3px; }
            .phone-badge::before { bottom: 6px; left: -3px; width: 6px; height: 6px; }

            section { padding: 32px 12px; }
            .section-title { font-size: 1.2rem; }
            .section-sub { font-size: 0.8rem; margin-bottom: 22px; }

            .katalog-grid { gap: 14px; }
            .card-thumb { height: 120px; }
            .card-info { padding: 14px 14px 16px; }
            .card-info h3 { font-size: 0.9rem; }
            .card-info p { font-size: 0.72rem; }
            .card-footer { padding-top: 10px; }
            .card-footer .harga { font-size: 0.8rem; }
            .btn-order { padding: 5px 12px; font-size: 0.68rem; }

            .fitur-grid { gap: 10px; }
            .fitur-card { padding: 16px 14px; }
            .fitur-icon { width: 36px; height: 36px; font-size: 1.1rem; margin-bottom: 8px; }
            .fitur-card h3 { font-size: 0.82rem; }
            .fitur-card p { font-size: 0.72rem; }

            .steps { grid-template-columns: 1fr; gap: 20px; }
            .step::before { display: none; }
            .step { display: flex; align-items: flex-start; gap: 16px; text-align: left; }
            .step-num { width: 40px; height: 40px; font-size: 0.9rem; margin: 0; flex-shrink: 0; }
            .step h3 { font-size: 0.85rem; margin-bottom: 3px; }
            .step p { font-size: 0.75rem; max-width: none; }

            #pesan { padding: 20px 12px; margin-bottom: 32px; }
            .form-card { padding: 20px 16px; border-radius: 16px; }
            .form-group input,
            .form-group select,
            .form-group textarea { padding: 18px 12px 7px; font-size: 0.8rem; border-radius: 10px; }
            .form-group label { left: 12px; font-size: 0.78rem; }
            .form-group input:focus ~ label,
            .form-group input:not(:placeholder-shown) ~ label,
            .form-group select:focus ~ label,
            .form-group select:valid ~ label,
            .form-group textarea:focus ~ label,
            .form-group textarea:not(:placeholder-shown) ~ label { top: 5px; }
            .form-group textarea { min-height: 72px; padding: 18px 12px 7px; }
            .btn-submit { padding: 12px; font-size: 0.82rem; border-radius: 10px; }
            .form-footnote { font-size: 0.7rem; margin-top: 14px; }
            .form-group { margin-bottom: 16px; }

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
    <img src="<?= base_url('assets/images/hjp-logo.png') ?>" alt="HJP" class="nav-logo">
    <a href="<?= base_url('#pesan') ?>" class="btn-primary">Pesan Sekarang</a>
</nav>

<div class="hero">
    <div class="hero-inner">
        <div class="hero-text">
            <span class="hero-eyebrow">✦ Undangan Digital Premium ✦</span>
            <h1>Buat Undangan Digital Premium dalam Hitungan Menit</h1>
            <p>Sambut momen spesial bersama orang-orang yang kamu cintai dengan undangan digital yang elegan, interaktif, dan mudah dibagikan. Tersedia berbagai pilihan tema memukau untuk acara Anda.</p>
            <div class="hero-btns">
                <a href="<?= base_url('#katalog') ?>" class="btn-white">Lihat Katalog</a>
                <a href="https://wa.me/6289505799964" class="btn-outline" target="_blank">Pesan via WhatsApp</a>
            </div>
        </div>
        <div class="hero-visual">
            <div class="phone-mockup">
                    <div class="phone-shell">
                        <div class="phone-notch"></div>
                        <div class="phone-screen" style="padding:0;overflow:hidden;background:transparent;">
                        <img src="<?= base_url('assets/images/preview-modern.svg') ?>" alt="Modern Elegance" style="width:100%;height:100%;display:block;">
                    </div>
                </div>
                <div class="phone-badge">✦ Siap dalam 24 jam</div>
            </div>
        </div>
    </div>
</div>

<section id="katalog">
    <p class="section-label">Koleksi Pilihan</p>
    <h2 class="section-title">Katalog Tema</h2>
    <p class="section-sub">Pilih desain yang paling mencerminkan keindahan acara Anda.</p>

    <div class="katalog-grid">
        <?php foreach ($katalog as $i => $item): ?>
        <div class="katalog-card card-<?= str_replace('card-', '', $item['img_class']) ?>">
            <div class="card-strip"></div>
            <div class="card-thumb">
                <?php if ($item['badge']): ?>
                    <span class="card-badge"><?= $item['badge'] ?></span>
                <?php endif; ?>
                <img src="<?= base_url($item['gambar']) ?>" alt="<?= $item['nama'] ?>">
            </div>
            <div class="card-info">
                <h3><?= $item['nama'] ?></h3>
                <p><?= $item['deskripsi'] ?></p>
                <div class="card-footer">
                    <span class="harga">Rp <?= number_format($item['harga'], 0, ',', '.') ?></span>
                    <div class="card-btns">
                        <a href="<?= $item['demo_url'] ?>" target="_blank" class="btn-order" style="border-color:#d5caea;color:#7a7090;">Demo</a>
                        <a href="<?= site_url('detail/'.$i) ?>" class="btn-order">Detail</a>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<section id="fitur">
    <p class="section-label">Keunggulan</p>
    <h2 class="section-title">Mengapa HJP?</h2>
    <p class="section-sub">Dipercaya oleh ribuan pasangan dan keluarga di seluruh Indonesia.</p>
    <div class="fitur-grid">
        <?php foreach ($fitur as $f): ?>
        <div class="fitur-card">
            <div class="fitur-icon"><?= $f['icon'] ?></div>
            <h3><?= $f['judul'] ?></h3>
            <p><?= $f['desc'] ?></p>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<section>
    <p class="section-label">Panduan</p>
    <h2 class="section-title">Cara Pemesanan</h2>
    <p class="section-sub">Empat langkah mudah untuk mendapatkan undangan digital impian Anda.</p>
    <div class="steps">
        <?php $no = 1; foreach ($langkah as $judul => $desc): ?>
        <div class="step">
            <div class="step-num"><?= $no++ ?></div>
            <div>
                <h3><?= $judul ?></h3>
                <p><?= $desc ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<section id="pesan">
    <p class="section-label">Mulai Sekarang</p>
    <h2 class="section-title">Pesan Undangan Anda</h2>
    <p class="section-sub">Isi formulir di bawah ini, dan kami akan segera menghubungi Anda via WhatsApp.</p>

    <div class="form-card">
        <?= form_open(base_url()) ?>
            <div class="form-row">
                <div class="form-group">
                    <div class="field-wrap">
                        <input type="text" id="nama" name="nama" placeholder="Nama lengkap" required>
                        <label for="nama">Nama Lengkap</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="field-wrap">
                        <select id="jenis" name="jenis" required>
                            <option value="" disabled selected></option>
                            <?php foreach ($jenis_acara as $ja): ?>
                                <option value="<?= $ja ?>"><?= $ja ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label for="jenis">Jenis Acara</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <div class="field-wrap">
                        <select id="template" name="template" required>
                            <option value="" disabled selected></option>
                            <?php foreach ($template_pilihan as $tp): ?>
                                <option value="<?= $tp ?>"><?= $tp ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label for="template">Template Pilihan</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="field-wrap">
                        <input type="date" id="tanggal" name="tanggal" placeholder="Tanggal acara" required>
                        <label for="tanggal">Tanggal Acara</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="field-wrap">
                    <textarea id="catatan" name="catatan" placeholder="Catatan tambahan (opsional)"></textarea>
                    <label for="catatan">Catatan Tambahan</label>
                </div>
            </div>
            <button type="submit" class="btn-submit">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.025.507 3.934 1.395 5.608L0 24l6.545-1.371A11.945 11.945 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-1.89 0-3.663-.524-5.18-1.433l-.371-.222-3.884.814.826-3.778-.241-.388A9.946 9.946 0 012 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
                Kirim Pesanan via WhatsApp
            </button>
            <p class="form-footnote">Data Anda aman dan hanya digunakan untuk proses pemesanan.</p>
        <?= form_close() ?>
    </div>
</section>

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

<script>
    document.querySelectorAll('a[href^="#"]').forEach(a => {
        a.addEventListener('click', e => {
            const target = document.querySelector(a.getAttribute('href'));
            if (target) { e.preventDefault(); target.scrollIntoView({ behavior: 'smooth', block: 'start' }); }
        });
    });
</script>

</body>
</html>

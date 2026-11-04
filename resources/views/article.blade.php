<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article - Career Launch</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f3f3f3;
        }

        /*HEADER*/
        .topbar {
            background: #256d63;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 55px; 
        }

        .logo-box {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 24px;
            font-weight: bold;
        }

        .logo-box img {
            width: 36px;
        }

        .back-btn {
            background: #fff;
            color: #2f6f67;
            padding: 8px 16px;
            border-radius: 8px;
            text-decoration: none;
        }


        /*HERO*/
        .hero-container {
            width: 88%;
            margin: 25px auto;
            border-radius: 16px;
            overflow: hidden;
            position: relative;
        }

        .hero-image {
            width: 100%;
            height: 340px;
            object-fit: cover;
            filter: brightness(0.55);
        }

        .hero-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
        }

        .hero-text h1 {
            font-size: 48px;
            margin: 0;
            font-weight: bold;
        }

        .hero-text p {
            margin-top: 8px;
            font-size: 18px;
        }

        /*ARTICLE GRID*/
        .section {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto 40px auto;
            padding: 20px;
            background: white;
            border-radius: 14px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .card {
            background: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 6px rgba(0,0,0,0.08);
            cursor: pointer;
            transition: 0.2s;
            text-decoration: none;
            color: black;
        }

        .card:hover {
            transform: translateY(-4px);
        }

        .card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .card-title {
            padding: 14px;
            font-size: 16px;
            font-weight: normal;
        }

        @media (max-width: 768px) {
            .grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <!-- HEADER -->
    <div class="topbar">
        <div class="logo-box">
            <img src="https://cdn-icons-png.flaticon.com/512/4426/4426861.png">
            Career Launch
        </div>

        <a href="{{ route('dashboard') }}" class="back-btn">Back</a>
    </div>

    <!-- HERO -->
    <div class="hero-container">
        <img src="https://images.pexels.com/photos/6476580/pexels-photo-6476580.jpeg"
             class="hero-image">

        <div class="hero-text">
            <h1>Article</h1>
            <p>Find Articles to Boost Your Career Insights</p>
        </div>
    </div>

    <!-- SECTION - ARTICLE LIST -->
    <div class="section">
        <div class="grid">

            <!-- CARD 1 -->
            <a href="https://docif.telkomuniversity.ac.id/perkembangan-dunia-it/" target="_blank" class="card">
                <img src="https://docif.telkomuniversity.ac.id/wp-content/uploads/2024/12/Perkembangan-Teknologi-di-Dunia-Mendekati-Masa-Depan-yang-Luar-Biasa.png">
                <div class="card-title">Perkembangan Dunia IT</div>
            </a>

            <!-- CARD 2 -->
            <a href="https://www.dicoding.com/blog/bagaimana-sejarah-it-atau-teknologi-informasi/" target="_blank" class="card">
                <img src="https://dicoding-assets.sgp1.cdn.digitaloceanspaces.com/blog/wp-content/uploads/2024/02/BLOG-24-Februari-2024-Banner-Blog-Bagaimana-Sejarah-IT-atau-Teknologi-Informasi_.jpg">
                <div class="card-title">Bagaimana Sejarah IT atau Teknologi Informasi?</div>
            </a>

            <!-- CARD 3 -->
            <a href="https://id.techinasia.com/orang-indonesia-berprestasi-bidang-teknologi-kancah-internasional" target="_blank" class="card">
                <img src="data:image/png;base64,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">
                <div class="card-title">8 Anak Bangsa Berprestasi Pada Bidang Teknologi di Kancah Internasional</div>
            </a>

            <!-- CARD 4 -->
            <a href="https://www.tempo.co/digital/teknologi-ai-dan-kejahatan-bagi-manusia-1222366" target="_blank" class="card">
                <img src="https://statik.tempo.co/data/2025/01/25/id_1372288/1372288_720.jpg">
                <div class="card-title">Teknologi AI dan Kejahatan bagi Manusia</div>
            </a>

            <!-- CARD 5 -->
            <a href="https://www.liputan6.com/tekno/read/6116654/google-tambah-tombol-rahasia-untuk-akses-ai-di-android-bagaimana-cara-menggunakannya" target="_blank" class="card">
                <img src="https://cdn0-production-images-kly.akamaized.net/UXa1J1ETdNezJ8aJoArJmREjpMg=/0x356:3456x2304/1280x720/filters:quality(75):strip_icc()/kly-media-production/medias/4104946/original/042371200_1659067441-nathana-reboucas-c4aT8MfEzdw-unsplash.jpg">
                <div class="card-title">Google Tambah Tombol Rahasia untuk Akses AI di Android, Bagaimana Cara Menggunakannya?</div>
            </a>

            <!-- CARD 6 -->
            <a href="https://www.jpnn.com/news/inovasi-microsoft-dan-lg-memungkinkan-pengguna-mobil-menikmati-xbox-cloud-gaming" target="_blank" class="card">
                <img src="https://cloud.jpnn.com/photo/arsip/normal/2025/09/10/ilustrasi-perangkat-hiburan-di-kabin-mobil-foto-ini-head-uni-ypl0.jpg">
                <div class="card-title">Inovasi Microsoft dan LG Memungkinkan Pengguna Mobil Menikmati Xbox Cloud Gaming</div>
            </a>

        </div>
    </div>

</body>
</html>
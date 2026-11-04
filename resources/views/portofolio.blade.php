<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Portofolio - Career Launch</title>

<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background: #f5f5f5;
    }

    /* WRAPPER KONTEN SEJAJAR */
    .container {
        max-width: 1150px;
        margin: 0 auto;
    }

    /* HEADER */
    header {
        background: #296b63;
        padding: 20px 55px;
    }

    .header-inner {
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: white;
    }

    .logo {
        display: flex;
        align-items: center;
        gap: 12px;
        font-size: 24px;
        font-weight: bold;
    }



    /* TOMBOL BACK */
    .back-btn {
        background: #fff;
        color: #2f6f67;
        padding: 8px 16px;
        border-radius: 8px;
        text-decoration: none;
    }

    /* HERO */
    .hero {
        margin-top: 20px;
        border-radius: 12px;
        overflow: hidden;
        position: relative;
        height: 280px;
    }

    .hero img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: brightness(0.55);
    }

    .hero-text {
        position: absolute;
        top: 50%;
        width: 100%;
        text-align: center;
        transform: translateY(-50%);
        color: white;
    }

    .hero-text h1 {
        font-size: 48px;
        margin: 0;
    }

    /* LIST WORKING */
    .list-working {
        margin-top: 25px;
    }

    .list-working h2 {
        margin-bottom: 2px;
    }

    .jobs {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 22px;
        margin-top: 20px;
    }

    .job-card {
    display: block;
    background: #fff;
    border-radius: 12px;
    padding: 10px;
    text-decoration: none;
    color: #222;
    border: 1px solid #eaeaea;
    overflow: hidden;
    transition: 0.2s;
    }

    .job-card:hover {
    transform: translateY(-3px);
    box-shadow: 0px 6px 16px rgba(0,0,0,0.08);
    }

    .job-card img {
        width: 100%;
        height: 140px;
        border-radius: 10px;
        object-fit: cover;
    }

    .job-card h3 {
        margin: 10px 0 5px;
    }

</style>
</head>

<body>

<!-- HEADER -->
<header>
    <div class="container header-inner">
        <div class="logo">
            <img src="https://cdn-icons-png.flaticon.com/512/4426/4426861.png" width="35">
            Career Launch
        </div>

        <a href="{{ route('dashboard') }}" class="back-btn">Back</a>
    </div>
</header>

<div class="container">

    <!-- HERO SECTION -->
    <div class="hero">
        <img src="https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg">
        <div class="hero-text">
            <h1>Portofolio</h1>
            <p>Explore Your Template Portofolio</p>
        </div>
    </div>

    <!-- LIST WORKING -->
    <div class="list-working">
    <h2>List Working</h2>
    <p id="location">area, ...</p>

    <div class="jobs">

        <!-- CARD 1 -->
        <a href="https://www.notion.com/templates/business-analyst-portfolio?srsltid=AfmBOoqVJSEattdrGeRjQY84EYEFRJMMLEf5HvlmkCuox0pN-m8QMyvD" class="job-card">
            <img src="https://cdn.pixabay.com/photo/2015/09/16/09/48/programming-942487_640.jpg">
            <h3>IT Business Analyst</h3>
            <p>Menghubungkan bisnis  tim dan tim teknis untuk menghadirkan solusi digital yang tepat sasaran. Cocok bagi kamu yang suka menganalisis</p>
        </a>

        <!-- CARD 2 -->
        <a href="https://www.notion.com/templates/uiuxlayout" class="job-card">
            <img src="https://cdn.pixabay.com/photo/2021/08/04/13/06/software-developer-6521720_640.jpg">
            <h3>UI/UX Designer</h3>
            <p>Merancang tampilan dan pengalaman pengguna yang intuisif dan menarik. Cocok untuk kamu yang kreatif, detail oriented</p>
        </a>

        <!-- CARD 3 -->
        <a href="https://www.notion.com/templates/web-administrator-sops" class="job-card">
            <img src="https://cdn.pixabay.com/photo/2018/10/05/07/54/binary-3725324_640.jpg">
            <h3>Web Administrator</h3>
            <p>Mengelola dan memastikan website berjalan stabil, aman, dan cepat. Cocok untuk kamu yang teliti, paham server/hosting</p>
        </a>

        <!-- CARD 4 -->
        <a href="https://www.notion.com/templates/search?query=Mobile+App+Developer" class="job-card">
            <img src="https://cdn.pixabay.com/photo/2020/06/08/19/48/corona-5275916_960_720.jpg">
            <h3>Mobile App Developer</h3>
            <p>Mengembangkan aplikasi mobile yang responsif dan user-friendly untuk Android atau IOS. Cocok untuk kamu yang suka bagian digital</p>
        </a>

        <!-- CARD 5 -->
        <a href="https://www.notion.com/templates/search?query=Database+Administartor" class="job-card">
            <img src="https://cdn.pixabay.com/photo/2016/11/29/06/17/computer-1867758_960_720.jpg">
            <h3>Database Administrator</h3>
            <p>Mengelola, mengamankan, dan mengoptimalkan database agar tetap akurat dan mudah diakses. Cocok untuk kamu yang teliti data</p>
        </a>

        <!-- CARD 6 -->
        <a href="https://www.notion.com/templates/search?query=Database+Engineer" class="job-card">
            <img src="https://cdn.pixabay.com/photo/2017/07/06/03/01/data-center-2476790_640.jpg">
            <h3>Database Engineer</h3>
            <p>Membangun dan mengelola pipeline data agar informasi dapat diproses dengan cepat dan akurat. Cocok untuk kamu yang suka Big Data</p>
        </a>

    </div>
</div>

</div>

<script>

/* REALTIME LOCATION */
function getLocationRealtime() {
    if (!navigator.geolocation) {
        document.getElementById("location").innerText = "area, location unavailable";
        return;
    }

    navigator.geolocation.getCurrentPosition(async (pos) => {
        let lat = pos.coords.latitude;
        let lon = pos.coords.longitude;

        // API 
        let url = `https://nominatim.openstreetmap.org/reverse?lat=${lat}&lon=${lon}&format=json`;

        const res = await fetch(url);
        const data = await res.json();

        let city = data.address.city || data.address.town || data.address.village || "Unknown";

        document.getElementById("location").innerText = `area, ${city}`;
    });
}

getLocationRealtime();
</script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Career Launch – Dashboard</title>
  <style>
    :root{
      --sidebar-bg:#2f7167;      /* sidebar green */
      --page-bg:#f1f4f4;         /* main page background */
      --muted:#c7d7d4;           /* light card bg */
      --accent:#d9eae7;          /* right panel bg */
      --pill:#eef7f6;            /* white pill behind Dashboard text */
      --card-radius:16px;
      --shadow: 0 6px 18px rgba(17,17,17,0.12);
      --font-sans: "Inter", Arial, Helvetica, sans-serif;
    }
    html,body{height:100%;margin:0;font-family:var(--font-sans);background:var(--page-bg);color:#222}
    .layout{display:flex;min-height:100vh}
    /* -------------------- SIDEBAR -------------------- */
    .sidebar{
      width:280px;
      background:var(--sidebar-bg);
      color:#fff;
      padding:32px 22px;
      box-sizing:border-box;
      display:flex;
      flex-direction:column;
      gap:18px;
    }
    .logo{
      display:flex;align-items:center;gap:10px;font-weight:700;font-size:20px;
    }
    .logo .icon{
      width:26px;height:26px;background:#f0f6f5;border-radius:6px;display:inline-flex;align-items:center;justify-content:center;color:var(--sidebar-bg)
    }

    .overview{font-size:12px;opacity:0.9;margin-top:18px}
    .nav{margin-top:8px;display:flex;flex-direction:column;gap:14px}
    .nav a{
      display:flex;align-items:center;gap:12px;color:rgba(255,255,255,0.95);text-decoration:none;padding:10px 12px;border-radius:12px;
    }
    .nav a .ico{width:22px;height:22px;display:inline-flex;align-items:center;justify-content:center;opacity:0.95}
    .nav a:hover{background:rgba(255,255,255,0.06)}

    /* Dashboard pill */
    .nav a.active{
      background:var(--pill);
      color:var(--sidebar-bg);
      font-weight:700;
      box-shadow: none;
      padding-left:12px;
    }
    /* FRIENDS list */
    .friends{margin-top:26px;color:rgba(255,255,255,0.95)}
    .friend-item{display:flex;align-items:center;gap:10px;margin:10px 0;cursor:default}
    .friend-item img{width:36px;height:36px;border-radius:50%;object-fit:cover;border:3px solid rgba(255,255,255,0.08)}
    .friend-item .name{font-size:14px;font-weight:600}
    .friend-item .role{font-size:12px;opacity:0.8}

    .sidebar .settings{margin-top:auto;font-size:13px;opacity:0.95}
    .logout-btn{
      display: inline-block;
      margin-top: 12px;
      background: #ffffff;         
      color: #d9534f;             
      font-weight: 700;           
      border: none;
      padding: 10px 16px;         
      border-radius: 10px;         
      cursor: pointer;
      width: 100%;                 
      text-align: center;         
    }
    /* -------------------- MAIN AREA -------------------- */
    .main{
      flex:1;display:flex;gap:28px;padding:24px 34px;box-sizing:border-box;
    }

    .content{
      flex:1;display:flex;flex-direction:column;gap:22px;
    }

    .topbar{display:flex;align-items:center;justify-content:space-between;gap:20px}
    .search-wrap{display:flex;align-items:center;gap:12px;width:68%;}
    .search{
      flex:1;display:flex;align-items:center;background:#dae8e6;padding:12px 18px;border-radius:28px;box-shadow:none;
    }
    .search input{
      border:none;background:transparent;outline:none;font-size:14px;width:100%;
    }
    .search .magnifier{width:18px;height:18px;opacity:0.8;cursor:pointer}

    .top-actions{display:flex;align-items:center;gap:18px}
    .top-actions a{display:inline-flex;align-items:center;gap:8px;text-decoration:none;color:#333;opacity:0.9}
    .top-actions .avatar{width:36px;height:36px;border-radius:50%;object-fit:cover;border:3px solid #fff}

    /* -------------------- LAYOUT COLUMNS -------------------- */
    .columns{display:flex;gap:22px;align-items:flex-start}
    .col-left{flex:1}
    .col-right{width:320px}

    /* -------------------- BANNER -------------------- */
    .banner{
      display:flex;justify-content:space-between;align-items:center;background:var(--sidebar-bg);color:#fff;padding:28px;border-radius:18px;box-shadow:var(--shadow)
    }
    .banner .left{max-width:62%}
    .banner h1{font-size:30px;margin:0;line-height:1.05;font-weight:800}
    .banner .cta{display:inline-flex;align-items:center;gap:10px;margin-top:18px;background:var(--pill);color:var(--sidebar-bg);padding:10px 18px;border-radius:26px;border:none;cursor:pointer}
    .banner .visual{width:300px;height:140px;border-radius:12px;object-fit:cover;border-left:6px solid rgba(255,255,255,0.06)}

    /* -------------------- ACTION CARDS -------------------- */
    .action-row{display:flex;gap:18px;margin-top:18px}
    .action-card{
      background:var(--muted);padding:18px;border-radius:14px;flex:1;display:flex;align-items:center;gap:14px;box-shadow:0 6px 18px rgba(17,17,17,0.06)
    }
    .action-card .icon{width:42px;height:42;border-radius:10px;background:#fff;display:flex;align-items:center;justify-content:center;color:var(--sidebar-bg);font-weight:700}

    /* -------------------- CONTINUE WATCHING -------------------- */
    .section-header{display:flex;align-items:center;gap:12px;margin-top:18px}
    .section-header h3{margin:0;font-size:18px;font-weight:700}
    .section-header .line{height:2px;background:#bfcfcf;flex:1;border-radius:4px;position:relative}
    .section-header .line:after{content:'';position:absolute;right:6px;top:-4px;width:8px;height:8px;border-radius:50%;background:#d7e3e1;border:3px solid #ffffff}

    .watch-card{
      margin-top:14px;background:var(--sidebar-bg);padding:22px;border-radius:18px;box-shadow:var(--shadow);
    }
    .watch-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:18px}
    .video-card{background:var(--sidebar-bg);border-radius:12px;overflow:hidden;padding:0 0 14px 0}
    .video-card a{text-decoration:none;color:#fff;display:block}
    .video-thumb{width:100%;height:120px;object-fit:cover;border-radius:10px;margin:12px}
    .video-info{padding:0 12px 12px 12px}
    .video-info h4{margin:0;font-size:14px;font-weight:800;color:#f3f7f6}
    .video-info p{margin:8px 0 0 0;font-size:12px;color:#e7f0ef;opacity:0.9;line-height:1.3}

    /* -------------------- RIGHT PANEL -------------------- */
    .right-panel{background:var(--accent);border-radius:16px;padding:18px;box-shadow:var(--shadow)}
    .profile-top{display:flex;align-items:center;justify-content:space-between}
    .profile-box{background:var(--sidebar-bg);color:#fff;border-radius:14px;padding:16px;text-align:center;margin-top:12px}
    .profile-photo{width:86px;height:86px;border-radius:50%;object-fit:cover;border:6px solid var(--accent);margin:8px auto 6px}
    .profile-box h3{margin:6px 0 4px 0;color:#fff}
    .profile-box p{margin:0;font-size:13px;color:rgba(255,255,255,0.9);opacity:0.95}

    .skill-box{background:#e0efec;padding:12px;border-radius:12px;margin-top:14px;color:#2f7167}
    .skill-box h5{margin:0 0 8px 0;font-size:13px}
    .skill-box ul{margin:0;padding-left:18px}

    .mentor-list{margin-top:12px}
    .mentor-item{display:flex;align-items:center;gap:10px;background:#fff;padding:10px;border-radius:12px;margin-bottom:10px}
    .mentor-item img{width:40px;height:40px;border-radius:50%;object-fit:cover}

    /* small helpers */
    .icon-btn{background:transparent;border:none;cursor:pointer;padding:6px;border-radius:10px}
    a.icon-link{text-decoration:none;color:inherit}

  </style>
</head>
<body>

<div class="layout">

  <!-- SIDEBAR -->
  <aside class="sidebar" role="navigation" aria-label="Main sidebar">
    <div class="logo" style="display:flex;align-items:center;gap:10px;">
      <img src="https://cdn-icons-png.flaticon.com/512/4426/4426861.png"
          alt="Career Launch Logo"
          style="width:28px;height:28px;object-fit:contain;display:block;">
      <span style="font-size:20px;font-weight:600;color:#ffffff;">Career Launch</span>
    </div>


    <div class="overview">OVERVIEW</div>

    <nav class="nav" aria-label="Main menu">
      <!-- Dashboard pill (active) -->
      <a href="/dashboard" class="active" aria-current="page">
        <span class="ico">🏠</span>
        <span>Dashboard</span>
      </a>

      <!-- other menu items (clickable, will 404 if route not created) -->
      <a href="/inbox"><span class="ico">✉️</span><span>Inbox</span></a>
      <a href="/lesson"><span class="ico">📘</span><span>Lesson</span></a>
      <a href="/task"><span class="ico">✅</span><span>Task</span></a>
      <a href="/group"><span class="ico">👥</span><span>Group</span></a>
    </nav>

    <!-- FRIENDS -->
    <div class="friends">
      <div style="opacity:0.8;font-size:12px;margin-top:18px">FRIENDS</div>

      <!-- Friend Items -->
      <div class="friend-item">
        <img src="https://images.pexels.com/photos/614810/pexels-photo-614810.jpeg" alt="Junius">
        <div>
          <div class="name">Junius Tipagau</div>
          <div class="role">Friends</div>
        </div>
      </div>

      <div class="friend-item">
        <img src="https://images.pexels.com/photos/1516680/pexels-photo-1516680.jpeg" alt="Stevio"> 
        <div>
          <div class="name">Stevio Kogoya</div>
          <div class="role">Friends</div>
        </div>
      </div>

      <div class="friend-item">
        <img src="https://images.pexels.com/photos/91227/pexels-photo-91227.jpeg" alt="Bagas"> 
        <div>
          <div class="name">Bagas</div>
          <div class="role">Friends</div>
        </div>
      </div>
    </div>

    <div class="settings">
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="logout-btn" type="submit">⚠ Logout</button>
      </form>
    </div>
  </aside>

  <!-- MAIN AREA -->
  <main class="main" role="main">
    <section class="content">
      <!-- TOPBAR -->
      <div class="topbar">
        <div class="search-wrap">
          <div class="search" role="search">
            <svg class="magnifier" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" onclick="document.querySelector('.search input').focus()">
              <path d="M21 21l-4.35-4.35" stroke="#6e918d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <circle cx="11" cy="11" r="6" stroke="#6e918d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <form action="{{ route('dashboard.search') }}" method="GET">
                <input type="text" name="q" placeholder="Search something..." class="form-control">
            </form>
          </div>
        </div>

        <div class="top-actions">
          <!-- small separator -->
          <div style="width:1px;height:28px;background:transparent"></div>

          <!-- avatar & name -->
          <a href="/profile" class="icon-link" title="My profile">
            <img class="avatar" src="https://images.pexels.com/photos/2379004/pexels-photo-2379004.jpeg" alt="avatar" />
          </a>
        </div>
      </div>

      <!-- Banner + Actions -->
      <div class="columns">
        <div class="col-left">
          <div class="banner">
            <div class="left">
              <h1>Turn Academic Work<br/>Into Career Wins 🎓</h1>
            </div>

            <!-- banner -->
            <img class="visual" src="data:image/jpeg;base64,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" alt="banner visual" />  

          </div>

          <!-- small action cards -->
          <div class="action-row" style="display:flex; gap:20px;">
            <a href="{{ route('portofolio') }}" class="action-card" style="text-decoration:none; color:black; display:flex; align-items:flex-start; gap:10px; padding:10px; border:1px solid #ccc; border-radius:8px; flex:1;">
              <div class="icon" style="font-size:30px; line-height:1; display:inline-block; background:none; padding:0;">📁</div>
              <div>
                <div>Display your skills</div>
                <div style="font-weight:700; font-size:16px;">Portofolio</div>
              </div>
            </a>

            <a href="{{ route('article') }}" class="action-card" style="text-decoration:none; color:black; display:flex; align-items:flex-start; gap:10px; padding:10px; border:1px solid #ccc; border-radius:8px; flex:1;">
              <div class="icon" style="font-size:30px; line-height:1; display:inline-block; background:none; padding:0;">📝</div>
              <div>
                <div>Publish your thoughts</div>
                <div style="font-weight:700; font-size:16px;">Article</div>
              </div>
            </a>

            <a href="{{ route('exportpdf') }}" class="action-card" style="text-decoration:none; color:black; display:flex; align-items:flex-start; gap:10px; padding:10px; border:1px solid #ccc; border-radius:8px; flex:1;">
              <div class="icon" style="font-size:30px; line-height:1; display:inline-block; background:none; padding:0;">📤</div>
              <div>
                <div>Export profile</div>
                <div style="font-weight:700; font-size:16px;">Export PDF</div>
              </div>
            </a>
          </div>

          <!-- List Watching -->
          <div class="section-header">
            <h3>List Watching</h3>
            <div class="line"></div>
          </div>

          <!-- Video List Watching -->
          <div class="watch-card">
            <div class="watch-grid">
              <div class="video-card">
                <a href="https://www.youtube.com/watch?v=83bOmUHwboQ" target="_blank">
                  <img class="video-thumb" src="https://img.youtube.com/vi/83bOmUHwboQ/maxresdefault.jpg" alt="">
                  <div class="video-info">
                    <h4>How to Build a Standout Digital Portofolio</h4>
                    <p>Tips for creating a professional Portofolio that appeals to recruiters</p>
                  </div>
                </a>
              </div>

              <div class="video-card">
                <a href="https://www.youtube.com/shorts/PBxpHvs8-4Q?feature=share" target="_blank">
                  <img class="video-thumb" src="https://img.youtube.com/vi/PBxpHvs8-4Q/maxresdefault.jpg" alt="">
                  <div class="video-info">
                    <h4>Resume VS Portofolio: What Recruiters Actually Look For</h4>
                    <p>Tips for Creating a Professional UI/UX Portofolio</p>
                  </div>
                </a>
              </div>

              <div class="video-card">
                <a href="https://youtu.be/PkHbP3hX7XA?si=JGMtMEGvZJIaGWzD" target="_blank">
                  <img class="video-thumb" src="https://img.youtube.com/vi/PkHbP3hX7XA/maxresdefault.jpg" alt="">
                  <div class="video-info">
                    <h4>Personal Branding 101 for Students</h4>
                    <p>The basics of personal branding of fresh graduates</p>
                  </div>
                </a>
              </div>
            </div>
          </div>

          <!-- Job Vacancy -->
          <div class="section-header" style="margin-top: 40px;">
            <h3>Job Vacancy</h3>
            <div class="line"></div>
          </div>

          <div class="watch-card">
            <div class="watch-grid">

              <!-- Job 1 -->
              <div class="video-card">
                <a href="https://id.jobstreet.com/id/front-end-developer-jobs/in-Semarang-Jawa-Tengah" target="_blank">
                  <img class="video-thumb" src="data:image/jpeg;base64,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" alt="">
                  <div class="video-info">
                    <h4>Frontend Developer Intern</h4>
                    <p>Opportunity for fresh graduates with HTML/CSS/JS background</p>
                  </div>
                </a>
              </div>

              <!-- Job 2 -->
              <div class="video-card">
                <a href="https://id.jobstreet.com/id/ui+ux+design-jobs/in-Semarang-Jawa-Tengah" target="_blank">
                  <img class="video-thumb" src="data:image/png;base64,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" alt="">
                  <div class="video-info">
                    <h4>UI/UX Designer</h4>
                    <p>Junior-level UI/UX role for portfolio builders</p>
                  </div>
                </a>
              </div>

              <!-- Job 3 -->
              <div class="video-card">
                <a href="https://id.jobstreet.com/id/php-programmer-jobs/in-Semarang-Jawa-Tengah" target="_blank">
                  <img class="video-thumb" src="data:image/jpeg;base64,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" alt="">
                  <div class="video-info">
                    <h4>PHP Developer</h4>
                    <p>Looking for PHP beginners with Laravel basics</p>
                  </div>
                </a>
              </div>

            </div>
          </div>

        </div>

        <!-- RIGHT PANEL -->
        <aside class="col-right">
          <div class="right-panel">
            <div class="profile-top">
              <div style="display:flex;gap:8px;align-items:center">
                <a href="/profile" style="text-decoration:none;color:#3b3b3b">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M12 12a5 5 0 100-10 5 5 0 000 10zM2 22c0-4 4-6 10-6s10 2 10 6" stroke="#2f7167" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </a>
              </div>

              <div>
                <a href="/" title="Home" style="text-decoration:none;color:#2f7167">
                  <svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M3 10.5L12 4l9 6.5" stroke="#2f7167" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/><path d="M7 10.5v8h10v-8" stroke="#2f7167" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </a>
              </div>
            </div>
            
            @php
                $hour = now()->format('H');
                if ($hour < 12) {
                    $greeting = "Good Morning";
                } elseif ($hour < 18) {
                    $greeting = "Good Afternoon";
                } else {
                    $greeting = "Good Evening";
                }
            @endphp

            <div class="profile-box">
              <img class="profile-photo" src="https://images.pexels.com/photos/2379004/pexels-photo-2379004.jpeg" alt="profile">
              <h3>{{ $greeting }}, {{ auth()->user()->name }}</h3>
              <p style="opacity:0.95">Continue your learning to archive your target!</p>

              <style>
                .skill-box {
                background: #dceeea;
                padding: 20px;
                border-radius: 12px;
                color: #2f7167;
                font-family: sans-serif;
                }
    
                /* Header garis kiri kanan */
                .skill-heading {
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  gap: 12px;
                  font-weight: 700;
                  font-size: 15px;
                  margin-bottom: 18px;
                }

                .skill-heading::before,
                .skill-heading::after {
                  content: "";
                  flex: 1;
                  height: 2px;
                  background: #2f7167;
                  opacity: 0.4;
                }

                /* List utama */
                .skill-list {
                  list-style: none; 
                  padding-left: 0;
                  margin: 0;
                  text-align: left;  
                }

                /* Kategori (teks hijau) */
                .skill-category {
                  color: #2f7167;
                  font-weight: 700;
                  margin-top: 14px;
                  text-align: left !important;
                }

                /* Sub-item (teks abu) */
                .skill-sub {
                  color: #585252ff;
                  margin-left: 14px;
                  opacity: 0.8;
                  text-align: left !important;  
                }
              </style>

              <div class="skill-box">
                <div class="skill-heading">Skill Highlights</div>

                <ul class="skill-list">
                  <li class="skill-category">Frontend Development</li>
                  <li class="skill-sub">HTML, CSS</li>

                  <li class="skill-category">PHP</li>
                  <li class="skill-sub">Dasar & Implementasi</li>

                  <li class="skill-category">UI/UX Design</li>
                  <li class="skill-sub">Layouting, Prototyping</li>

                  <li class="skill-category">Figma</li>
                  <li class="skill-sub">Wireframe, Komponen, Design System</li>

                  <li class="skill-category">Tools & Workflow</li>
                  <li class="skill-sub">GitHub, VSCode</li>
                </ul>
              </div>

            <div style="margin-top:12px">
              <div style="font-weight:700;margin-bottom:8px">Your Mentor</div>
  
              <style>
                .mentor-list {
                  margin-top: 12px;
                }
               

                .mentor-item {
                  display: flex;
                  align-items: center;
                  gap: 10px;
                  background: #dceeea;       
                  padding: 12px;
                  border-radius: 12px;
                  margin-bottom: 10px;
                  color: #585252ff;            
                }

                .mentor-item div {
                  font-weight: 700;
                  color: #585252ff;            
                }
              </style>

              <div class="mentor-list">
                <div class="mentor-item"><img src="https://images.pexels.com/photos/733872/pexels-photo-733872.jpeg" alt="m1"><div style="font-weight:700">Emma</div></div>
                <div class="mentor-item"><img src="https://images.pexels.com/photos/2182970/pexels-photo-2182970.jpeg" alt="m2"><div style="font-weight:700">Yonathan</div></div>
                <div class="mentor-item"><img src="https://images.pexels.com/photos/1300402/pexels-photo-1300402.jpeg" alt="m3"><div style="font-weight:700">Marlon</div></div>
              </div>
            </div>
    </section>
  </main>

</div>

<script>
  // notification toggle (simple)
  function toggleNotif(){
    alert("No notifications yet.");
  }
</script>
</body>
</html>
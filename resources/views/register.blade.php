<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Register - Career Launch</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  
  <style>
    :root {
      --green:#2f6f67;
      --text-muted:#777;
    }

    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica, sans-serif;
        background: #222;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .frame {
        width: 1200px;
        height: 700px;
        background: #fff;
        display: flex;
        box-shadow: 0 0 0 24px #1f1f1f;
    }

    /* LEFT */
    .left {
        flex: 1;
        padding: 60px 70px;
        background: #fff;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    h1.logo {
      display:flex;
      align-items:center;
      gap:10px;
      color:var(--green);
      font-size:28px;
      margin:0;
    }

    h2 {
      font-size:36px;
      margin:20px 0 10px;
      color:#222;
    }

    .sub {
      color:var(--text-muted);
      margin-bottom:30px;
      font-size:14px;
    }

    /* FORM */
    .input {
      display:block;
      width:100%;
      padding:14px;
      border:1px solid #cfcfcf;
      border-radius:8px;
      margin-bottom:14px;
      font-size:15px;
    }

    .btn-login {
      width:100%;
      padding:14px;
      border-radius:8px;
      background:var(--green);
      color:#fff;
      border:none;
      cursor:pointer;
      font-size:16px;
      margin-top:4px;
    }

    /* RIGHT PANEL */
    .right {
      flex:1;
      background:var(--green);
      color:#fff;
      position:relative;
      display:flex;
      align-items:center;
      justify-content:center;
      padding:40px;
    }

    .illustration {
      position:absolute;
      right:100px;
      bottom:70px;
      width:340px;
      height:380px;
      background:#e9efec;
      border-radius:12px;
      padding:20px;
    }

    .item {
      display:flex;
      align-items:center;
      gap:12px;
      background:#fff;
      padding:12px;
      border-radius:8px;
      margin-bottom:14px;
    }

    .circle {
      width:36px;
      height:36px;
      border-radius:50%;
    }
  </style>
</head>

<body>

  <div class="frame">

    <!-- LEFT SIDE -->
    <div class="left">
      
      <h1 class="logo">
        <img src="https://cdn-icons-png.flaticon.com/512/4426/4426861.png" 
             style="width:32px;height:32px;">
        <strong>Career Launch</strong>
      </h1>

      <h2>Create your account</h2>
      <p class="sub">Register your new account</p>

      <form method="POST" action="{{ route('register.action') }}">
        @csrf

        @if($errors->any())
          <div style="color:#b00020;margin-bottom:12px;">
            {{ $errors->first() }}
          </div>
        @endif

        <input class="input" type="text" name="username" placeholder="Username" value="{{ old('username') }}" required>
        <input class="input" type="email" name="email" placeholder="Email" required>
        <input class="input" type="password" name="password" placeholder="Password" required>
        <input class="input" type="password" name="repassword" placeholder="Re-Password" required>

        <button class="btn-login">Create Account</button>
      </form>

    </div>

    <!-- RIGHT SIDE -->
    <div class="right">
      <div class="illustration">
        <div class="item">
          <div class="circle" style="background:#7f8c8a"></div> 
        </div>
        <div class="item">
          <div class="circle" style="background:#f1c40f"></div> 
        </div>
        <div class="item">
          <div class="circle" style="background:#e67e22"></div> 
        </div>
      </div>
    </div>

  </div>

</body>
</html>
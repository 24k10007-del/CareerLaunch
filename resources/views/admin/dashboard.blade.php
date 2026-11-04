<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <style>
        body {
            margin: 0;
            padding: 40px;
            background: #f4f7f7;
            font-family: 'Inter', sans-serif;
        }

        .box {
            max-width: 900px;
            margin: 0 auto;
            background: #fff;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
        }

        h2 {
            margin-bottom: 20px;
            color: #2b3a3a;
        }

        .menu {
            display: flex;
            gap: 20px;
            margin-top: 30px;
        }

        .menu a {
            flex: 1;
            text-align: center;
            background: #fff;
            border: 1px solid #d7e5e4;
            padding: 25px;
            border-radius: 14px;
            text-decoration: none;
            color: #2b3a3a;
            font-size: 18px;
            transition: 0.2s;
        }

        .menu a:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 18px rgba(0, 0, 0, 0.08);
        }
    </style>
</head>

<body>

    <div class="box">
        <h2>Admin Dashboard</h2>
        <p>Selamat datang, Admin! Silakan pilih menu di bawah.</p>

        <div class="menu">
            <a href="{{ route('admin.users') }}">
                👤 User List
            </a>
            <a href="/dashboard">
                📊 Back to Main Dashboard
            </a>
        </div>
    </div>

</body>

</html>

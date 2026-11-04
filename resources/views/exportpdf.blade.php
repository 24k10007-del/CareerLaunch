<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Export CV</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
            background: #2f6f67;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            background: white;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.07);
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            font-weight: 700;
            color: #2a3d3c;
        }

        .menu-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }

        .card {
            background: #ffffff;
            padding: 25px;
            border-radius: 14px;
            text-align: center;
            border: 1px solid #d9e5e4;
            transition: 0.2s ease;
            cursor: pointer;
            text-decoration: none;
            color: #2a3d3c;
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 18px rgba(0,0,0,0.08);
        }

        .card-icon {
            font-size: 45px;
            margin-bottom: 12px;
        }

        .btn-back {
            display: inline-block;
            margin-top: 40px;
            text-decoration: none;
            color: #1f7a74;
            font-weight: 600;
        }

        .btn-back:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Export CV Tools</h2>

    <div class="menu-grid">

        <!-- CREATE CV -->
        <a href="{{ route('export.create') }}" class="card">
            <div class="card-icon">📝</div>
            <div style="font-size:20px; font-weight:600;">Create Your CV</div>
            <small>Start creating a new CV fast & easy</small>
        </a>

        <!-- LIST / EDIT CV -->
        <a href="{{ route('export.index') }}" class="card">
            <div class="card-icon">✏️</div>
            <div style="font-size:20px; font-weight:600;">Edit Your CV</div>
            <small>View and edit your saved CVs</small>
        </a>

        <!-- EXPORT PDF -->
        <a href="{{ route('export.index') }}" class="card">
            <div class="card-icon">📄</div>
            <div style="font-size:20px; font-weight:600;">Export to PDF</div>
            <small>Choose your CV and download as PDF</small>
        </a>

        <!-- EXPORT DOCX -->
        <a href="{{ route('export.index') }}" class="card">
            <div class="card-icon">🗂️</div>
            <div style="font-size:20px; font-weight:600;">Export to DOCX</div>
            <small>Download your CV in Microsoft Word format</small>
        </a>

    </div>

    <a href="/dashboard" class="btn-back">Back</a>
</div>

</body>
</html>

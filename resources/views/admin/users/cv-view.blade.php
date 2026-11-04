<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CV Detail</title>

    <style>
        body {
            background: #f4f7f7;
            padding: 40px;
            font-family: 'Inter', sans-serif;
        }

        .box {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 40px;
            border-radius: 14px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
        }

        h2 {
            margin-bottom: 20px;
            color: #2a3a3a;
            text-align: center;
        }

        .label {
            font-size: 15px;
            font-weight: 600;
            margin-top: 20px;
            color: #314646;
        }

        .value {
            margin-top: 6px;
            background: #f1f5f5;
            padding: 12px;
            border-radius: 10px;
            border: 1px solid #dce5e4;
        }

        .back {
            margin-top: 30px;
            display: inline-block;
        }
    </style>
</head>

<body>

    <div class="box">

        <h2>CV: {{ $cv->title }}</h2>

        <div class="label">Full Name</div>
        <div class="value">{{ $cv->full_name }}</div>

        <div class="label">Email</div>
        <div class="value">{{ $cv->email }}</div>

        <div class="label">Phone</div>
        <div class="value">{{ $cv->phone }}</div>

        <div class="label">Summary</div>
        <div class="value">{{ $cv->summary }}</div>

        <div class="label">Experience</div>
        <div class="value">{{ $cv->experience }}</div>

        <div class="label">Education</div>
        <div class="value">{{ $cv->education }}</div>

        <div class="label">Skills</div>
        <div class="value">{{ $cv->skills }}</div>

        <a href="{{ url()->previous() }}" class="back">← Back</a>

    </div>

</body>

</html>
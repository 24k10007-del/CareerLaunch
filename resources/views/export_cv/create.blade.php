<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create CV</title>
    <style>
        body {
            background: #2f6f67;
            font-family: 'Inter', sans-serif;
        }
        .container {
            max-width: 850px;
            margin: 40px auto;
            background: #fff;
            padding: 30px 40px;
            border-radius: 16px;
            box-shadow: 0 4px 18px rgba(0,0,0,0.08);
        }
        h2 {
            text-align: center;
            color: #2a3d3c;
            margin-bottom: 30px;
        }
        label { font-weight: 600; color: #2a3d3c; }
        input, textarea {
            width: 100%;
            padding: 12px;
            margin-top: 4px;
            margin-bottom: 18px;
            border-radius: 8px;
            border: 1px solid #cdd7d6;
        }
        textarea { height: 120px; }
        button {
            background: #208b85;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            background: #1c7a74;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #1f7a74;
            font-weight: 600;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Create Your CV</h2>

    <form action="{{ route('export.store') }}" method="POST">
        @csrf

        <label>Full Name</label>
        <input type="text" name="name" required>

        <label>Professional Summary</label>
        <textarea name="summary"></textarea>

        <label>Experience</label>
        <textarea name="experience"></textarea>

        <label>Education</label>
        <textarea name="education"></textarea>

        <label>Skills (pisahkan dengan koma)</label>
        <input type="text" name="skills">

        <button type="submit">Create CV</button>
    </form>

    <a href="{{ route('export.index') }}">Back</a>
</div>

</body>
</html>

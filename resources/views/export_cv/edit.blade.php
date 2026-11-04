<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit CV</title>
    <style>
        body { background:#f4f7f7; font-family:'Inter', sans-serif; }
        .container {
            max-width: 850px; margin:40px auto; background:white;
            padding:35px; border-radius:16px; box-shadow:0 4px 18px rgba(0,0,0,0.08);
        }
        h2 { text-align:center; margin-bottom:25px; color:#2a3d3c; }
        label { font-weight:600; }
        input, textarea {
            width:100%; padding:12px; margin-top:4px; margin-bottom:18px;
            border:1px solid #cfd7d6; border-radius:8px;
        }
        textarea { height:120px; }
        button {
            background:#208b85; color:white; padding:12px 20px;
            border:none; border-radius:8px; width:100%; cursor:pointer;
        }
        button:hover { background:#1c7a74; }
    </style>
</head>
<body>

<div class="container">
    <h2>Edit CV</h2>

    <form action="{{ route('export.update', $cv->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Name</label>
        <input type="text" name="name" value="{{ $cv->name }}">

        <label>Professional Summary</label>
        <textarea name="summary">{{ $cv->summary }}</textarea>

        <label>Experience</label>
        <textarea name="experience">{{ $cv->experience }}</textarea>

        <label>Education</label>
        <textarea name="education">{{ $cv->education }}</textarea>

        <label>Skills</label>
        <input type="text" name="skills" value="{{ $cv->skills }}">

        <button type="submit">Update</button>
    </form>

    <a href="{{ route('export.index') }}" style="display:inline-block;margin-top:20px;">
        ← Back
    </a>
</div>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $cv->name }} - CV</title>

    <style>
        body { font-family: DejaVu Sans, sans-serif; margin:40px; }
        h1 { font-size:28px; margin-bottom:5px; }
        h2 { font-size:20px; margin-top:25px; border-bottom:1px solid #bbb; padding-bottom:4px; }
    </style>

</head>
<body>

<h1>{{ $cv->name }}</h1>

<h2>Professional Summary</h2>
<p>{{ $cv->summary }}</p>

<h2>Experience</h2>
<p>{{ $cv->experience }}</p>

<h2>Education</h2>
<p>{{ $cv->education }}</p>

<h2>Skills</h2>
<p>{{ $cv->skills }}</p>

</body>
</html>
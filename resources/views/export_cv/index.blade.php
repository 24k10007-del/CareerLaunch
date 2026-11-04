<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your CV List</title>
    <style>
        body {
            background: #2f6f67;
            font-family: 'Inter', sans-serif;
        }
        .container {
            max-width: 900px;
            margin: 40px auto;
            background: #fff;
            padding: 35px;
            border-radius: 16px;
            box-shadow: 0 4px 18px rgba(0,0,0,0.08);
        }
        h2 { text-align: center; color:#2a3d3c; margin-bottom: 30px; }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        th, td {
            padding: 14px;
            border-bottom: 1px solid #e3eaea;
        }
        th { background: #edf3f3; }
        a.btn {
            padding: 8px 14px;
            border-radius: 8px;
            font-size: 14px;
            text-decoration: none;
            margin-right: 4px;
            font-weight: 600;
        }
        .edit { background:#208b85; color:white; }
        .pdf { background:#4450a8; color:white; }
        .docx { background:#2973d0; color:white; }
        .add-btn {
            background:#208b85; color:white; padding:10px 18px; border-radius:10px;
            text-decoration:none; font-weight:600;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Your CVs</h2>

    <a href="{{ route('export.create') }}" class="add-btn">+ Create New CV</a>

    <table>
        <tr>
            <th>Name</th>
            <th>Updated</th>
            <th>Actions</th>
        </tr>

        @foreach ($cvs as $cv)
        <tr>
            <td>{{ $cv->name }}</td>
            <td>{{ $cv->updated_at->format('d M Y') }}</td>
            <td>
                <a href="{{ route('export.edit', $cv->id) }}" class="btn edit">Edit</a>
                <a href="{{ route('export.pdf', $cv->id) }}" class="btn pdf">PDF</a>
                <a href="{{ route('export.docx', $cv->id) }}" class="btn docx">DOCX</a>
            </td>
        </tr>
        @endforeach
    </table>

    <a href="/exportpdf" style="display:inline-block;margin-top:25px;">← Back</a>
</div>

</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ $user->name }} - CV List</title>

    <style>
        body {
            background: #f4f7f7;
            padding: 40px;
            font-family: 'Inter', sans-serif;
        }

        .box {
            max-width: 900px;
            background: #fff;
            margin: auto;
            padding: 40px;
            border-radius: 14px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #2b3a3a;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 25px;
        }

        th,
        td {
            padding: 14px;
            border-bottom: 1px solid #e1e8e7;
        }

        th {
            background: #eef3f3;
        }

        a.btn {
            text-decoration: none;
            background: #1f7a74;
            color: #fff;
            padding: 8px 16px;
            border-radius: 8px;
        }

        a.btn:hover {
            background: #155c58;
        }
    </style>
</head>

<body>

    <div class="box">

        <h2>CV List — {{ $user->name }}</h2>

        <table>
            <tr>
                <th>#</th>
                <th>CV Title</th>
                <th>Created</th>
                <th>Action</th>
            </tr>

            @foreach ($cvs as $cv)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $cv->title }}</td>
                    <td>{{ $cv->created_at->format('d M Y') }}</td>
                    <td>
                        <a href="{{ route('admin.cv.view', $cv->id) }}" class="btn">View CV</a>
                    </td>
                </tr>
            @endforeach
        </table>

        <a href="{{ route('admin.users') }}" style="display:block; margin-top:20px;">← Back</a>

    </div>

</body>

</html>
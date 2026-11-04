<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User List</title>
    <style>
        body {
            background: #f4f7f7;
            font-family: 'Inter', sans-serif;
            padding: 40px;
        }

        .box {
            max-width: 1000px;
            background: #fff;
            margin: auto;
            padding: 40px;
            border-radius: 14px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
        }

        h2 {
            color: #2b3a3a;
            margin-bottom: 20px;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 25px;
        }

        th,
        td {
            padding: 14px;
            border-bottom: 1px solid #e2e8e7;
            text-align: left;
        }

        th {
            background: #eef3f3;
        }

        a.btn {
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 8px;
            background: #1f7a74;
            color: #fff;
            font-size: 14px;
        }

        a.btn:hover {
            background: #18615d;
        }

        .back {
            margin-top: 30px;
            display: inline-block;
        }
    </style>
</head>

<body>

    <div class="box">
        <h2>User List</h2>

        <table>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Total CV</th>
                <th>Action</th>
            </tr>

            @foreach ($users as $u)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $u->name }}</td>
                    <td>{{ $u->email }}</td>
                    <td>{{ $u->cvs->count() }}</td>
                    <td>
                        <a href="{{ route('admin.users.cv', $u->id) }}" class="btn">View CV</a>
                    </td>
                </tr>
            @endforeach

        </table>

        <a href="{{ route('admin.dashboard') }}" class="back">← Back</a>
    </div>

</body>

</html>
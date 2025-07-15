<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #e3f2fd, #bbdefb);
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            padding: 30px;
        }

        h1 {
            text-align: center;
            color: #0d47a1;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            gap: 10px;
        }

        input[type="text"] {
            flex: 1;
            padding: 10px;
            border: 2px solid #64b5f6;
            border-radius: 6px;
            font-size: 16px;
        }

        button {
            padding: 10px 16px;
            background-color: #1976d2;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0d47a1;
        }

        a {
            text-decoration: none;
            color: #1565c0;
            margin-right: 8px;
        }

        a:hover {
            text-decoration: underline;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        thead {
            background-color: #1976d2;
            color: white;
        }

        th,
        td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }

        tbody tr:hover {
            background-color: #e3f2fd;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Tiket Kereta Api Indonesia</h1>
        <form action="/pages/searchResults" method="get">
            <input type="text" name="search" placeholder="search tiket">
            <button type="submit">Search</button>
        </form>
        <a href="/pages/create">Add Tiket</a>
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Asal</th>
                    <th>Tujuan</th>
                    <th>Harga</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tiket as $item): ?>
                    <tr>
                        <td><?= esc($item['nama']) ?></td>
                        <td><?= esc($item['asal']) ?></td>
                        <td><?= esc($item['tujuan']) ?></td>
                        <td><?= esc($item['harga']) ?></td>
                        <td>
                            <a href="/pages/edit/<?= $item['id'] ?>">Edit</a>
                            <a href="/pages/delete/<?= $item['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>
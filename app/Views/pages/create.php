<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Tiket</title>
    <link rel="stylesheet" href="<?= base_url('style.css') ?>">
    <style>
        body {
            background: #e3f2fd;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #0d47a1;
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 2px solid #64b5f6;
            border-radius: 6px;
        }

        .btn-add {
            background-color: #1976d2;
            color: white;
            border: none;
            padding: 10px 20px;
            margin-right: 10px;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-add:hover {
            background-color: #0d47a1;
        }

        .btn-cancel {
            text-decoration: none;
            padding: 10px 20px;
            background-color: #9e9e9e;
            color: white;
            border-radius: 6px;
            transition: 0.3s;
        }

        .btn-cancel:hover {
            background-color: #616161;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Tiket</h1>
        <form action="/pages/store" method="post">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" required>
            </div>
            <div class="form-group">
                <label for="asal">Asal</label>
                <input type="text" name="asal" id="asal" required>
            </div>
            <div class="form-group">
                <label for="tujuan">Tujuan</label>
                <input type="text" name="tujuan" id="tujuan" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" name="harga" id="harga" required>
            </div>

            <button type="submit" class="btn-add">Tambah</button>
            <a href="/pages" class="btn-cancel">Batal</a>
        </form>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Result</title>
    <link rel="stylesheet" href="<?= base_url('style.css') ?>">
    <style>
        .container {
            max-width: 800px;
            margin: 40px auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        h1 {
            text-align: center;
            color: #0d47a1;
            margin-bottom: 30px;
        }

        li {
            list-style: none;
            padding: 15px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        li:hover {
            background-color: #f1f1f1;
        }

        h2 {
            margin: 0;
            color: #1976d2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hasil Pencarian Tiket</h1>

        <?php if (!empty($tiket) && is_array($tiket)): ?>
            <ul>
                <?php foreach ($tiket as $item): ?>
                    <li>
                        <h2><?= esc($item['nama']) ?></h2>
                        <p>Asal: <?= esc($item['asal']) ?></p>
                        <p>Tujuan: <?= esc($item['tujuan']) ?></p>
                        <p>Harga: Rp <?= number_format($item['harga']) ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p style="text-align: center; color: red;">Tiket tidak ditemukan.</p>
        <?php endif; ?>
    </div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Genre & Author</title>
    <style>
        table { border-collapse: collapse; width: 50%; margin-bottom: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Tugas Brief - Booksales Dwi Fatwa Makarim Sabat</h1>
    <h2>Data Genre</h2>
    <table>
        <tr><th>ID</th><th>Nama Genre</th></tr>
        <?php foreach ($genres as $g): ?>
            <tr><td><?= $g['id'] ?></td><td><?= $g['nama'] ?></td></tr>
        <?php endforeach; ?>
    </table>

    <h2>Data Author</h2>
    <table>
        <tr><th>ID</th><th>Nama Author</th><th>Negara</th></tr>
        <?php foreach ($authors as $a): ?>
            <tr><td><?= $a['id'] ?></td><td><?= $a['nama'] ?></td><td><?= $a['negara'] ?></td></tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
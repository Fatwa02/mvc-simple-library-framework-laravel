<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku dan Penulis</h1>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Judul Buku</th>
                <th>Tahun Terbit</th>
                <th>Penulis</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->year }}</td>
                <td>{{ $book->author->name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
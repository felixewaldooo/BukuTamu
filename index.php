<!DOCTYPE html>
<html>

<head>
    <title>Buku Tamu</title>
</head>

<body>
    <h1>Buku Tamu</h1>
    <form action="submit_buku_tamu.php" method="POST">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" maxlength="200" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" maxlength="50" required><br><br>

        <label for="isi">Isi Pesan:</label><br>
        <textarea id="isi" name="isi" rows="5" required></textarea><br><br>

        <button type="submit">Kirim</button>
    </form>
</body>

</html>
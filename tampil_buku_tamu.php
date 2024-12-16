<?php
include 'koneksi.php';

$sql = "SELECT * FROM buku_tamu";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>Daftar Buku Tamu</h1>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nama</th><th>Email</th><th>Isi</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['ID_BT']}</td>
                <td>{$row['NAMA']}</td>
                <td>{$row['EMAIL']}</td>
                <td>{$row['ISI']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Belum ada data.";
}

$conn->close();
?>
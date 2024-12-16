<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $conn->real_escape_string($_POST['nama']);
    $email = $conn->real_escape_string($_POST['email']);
    $isi = $conn->real_escape_string($_POST['isi']);
    
    $sql = "INSERT INTO buku_tamu (NAMA, EMAIL, ISI) VALUES ('$nama', '$email', '$isi')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan! <a href='form_buku_tamu.php'>Kembali ke form</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['nim'])) {
    $nim = $_GET['nim'];

    $sql = "DELETE FROM tb_data WHERE nim='$nim'";

    if (mysqli_query($koneksi, $sql)) {
        echo '<script>alert("Data Berhasil Dihapus")</script>';
        header("Location: data.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
} else {
    echo "Permintaan tidak valid.";
}

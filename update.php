<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nim'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $hobi = $_POST['hobi'];
    $status = $_POST['status'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $nomor = $_POST['nomor'];

    $sql = "UPDATE tb_data SET nama='$nama', gender='$gender', hobi='$hobi', sts='$status', email='$email', alamat='$alamat', nomor='$nomor' WHERE nim='$nim'";

    if (mysqli_query($koneksi, $sql)) {
        echo "Data berhasil diperbarui.";
        // header("Location: data.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
} else {
    echo "Permintaan tidak valid.";
}

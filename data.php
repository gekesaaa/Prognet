<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="stylesheet" href="styleMenu.css" />

    <title>Rekap Data</title>
</head>

<body>
    <div class="container mt-5">
        <h2>Rekap Data</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("koneksi.php");

                $sql = "SELECT * FROM tb_data";
                $result = mysqli_query($koneksi, $sql);

                if (mysqli_num_rows($result) > 0) {
                    $counter = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<td>' . $counter . '</td>';
                        echo '<td>' . $row['nama'] . '</td>';
                        echo '<td>' . $row['nim'] . '</td>';
                        echo '<td>';
                        echo '<a href="edit.php?nim=' . $row['nim'] . '" class="btn btn-sm btn-warning mr-3 mb-2">Edit</a>';
                        echo '<a href="detail.php?nim=' . $row['nim'] . '" class="btn btn-sm btn-primary mr-3 mb-2">Lihat</a>';
                        echo '<a href="delete.php?nim=' . $row['nim'] . '" class="btn btn-sm btn-danger mr-3 mb-2">Hapus</a>';
                        echo '</td>';
                        echo '</tr>';
                        $counter++;
                    }
                } else {
                    echo '<tr><td colspan="4">Tidak ada data</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
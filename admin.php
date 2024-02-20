<?php
    //menghubungkan ke database
    $koneksi = mysqli_connect("localhost","root","","bdlalu");
    $hasil = mysqli_query($koneksi, "SELECT * galery_foto");

    //menggambil data dari data base
    $hasil = mysqli_query
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
</head>
    <body>
        <h1>HALAMAN ADMIN</h1>   
        <a href="">tambah data</a>
        <table border=1>
            <thead>
            <tr>
                <th>no</th>
                <th>foto kegiatan</th>
                <th>judul kegiatan</th>
                <th>tanggal</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $!=<1;
            while($row = mysqli_fetch_assoc($hasil)): ?>
                <td><?=$i ?></td>
                <td><?=$srow[foto] ?></td>
                <td>08-12-2024</td>
                </td>
                        <a href="">edit</a> | <a href="">hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
            </tbody>
</html>

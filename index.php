<?php 
    include("koneksi.php"); 
    // query untuk menampilkan data 
    $sql = 'SELECT * FROM data_barang'; 
    $result = mysqli_query($conn, $sql); 
?> 
<!DOCTYPE html> 
<html lang="en"> 
    <head>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet" type="text/css" />
        <title>Data Barang</title> 
    </head>
    <body> 
        <div class="container"> 
            <h1>Data Barang</h1> 
            <div class="main">
                <table class="tb1"> 
                    <tr class="tr1"> 
                        <th>Gambar</th> 
                        <th>Nama Barang</th> 
                        <th>Katagori</th> 
                        <th>Harga Jual</th> 
                        <th>Harga Beli</th> 
                        <th>Stok</th> 
                        <th>Aksi</th> 
                    </tr> 
                    <?php if($result): ?> 
                    <?php while($row = mysqli_fetch_array($result)): ?> 
                    <tr class="tr2"> 
                        <td><img src="gambar/<?= $row['gambar'];?>" alt="<?= $row['nama'];?>" class="img"></td> 
                        <td><?= $row['nama'];?></td> 
                        <td><?= $row['kategori'];?></td> 
                        <td><?= $row['harga_beli'];?></td> 
                        <td><?= $row['harga_jual'];?></td> 
                        <td><?= $row['stok'];?></td> 
                        <td>
                            <a href="ubah.php?id=<?= $row['id_barang'];?>">ubah</a>
                            <a href="hapus.php?id=<?= $row['id_barang'];?>">hapus</a>
                        </td> 
                    </tr> 
                    <?php endwhile; else: ?> 
                    <tr> 
                        <td colspan="7">Belum ada data</td>
                    </tr>
                    <?php endif; ?>
                </table>
            </div>
        </div>
        <div>
            <a href="tambah.php">tambah</a>
        </div>
    </body>
</html>
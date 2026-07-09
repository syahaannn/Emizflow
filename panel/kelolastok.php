<?php
require '../backend/model/Querybuilder.php';
$getter = new Querybuilder('kategori');
session_start();
$cat = $getter->selectAll("1 ORDER BY nama_kat ASC")['result'];
include 'sys/authchecker.php';

$prdGetter = new Querybuilder("produk");
$prd = $prdGetter->selectAll("1 ORDER BY qty ASC")['result'];
?>
<!DOCTYPE Html>
<html lang="id">
<head>
    <title>panel-kelola stok</title>
    <?php include 'temps/stylenscripts.php'?>
</head>
<body style="padding:0;margin:0;font-family: 'Rubiks'">
<?php include 'temps/sidebar.php' ?>
<div class="panel-sections">
    <div class="sect-heading">
        <h1>STOK</h1>
        <p>Buat & Kelola Stok</p>
        </div>

        <table cellpadding="10" border-collapse="collapse" class="table-styled">
            <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Deskripsi</th>
                <th>Foto</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $n=0;
            while($fetch = mysqli_fetch_array($prd))
            {
                $idKat = $fetch['kategori'];
                $kat = $getter->select("id_data = '$idKat'")['single'];
                $n++;
                if($fetch['qty'] == 0)
                {
                    ?>
                    <tr style="background-color: red">
                    <?php
                }
                else{
                    ?>
                    <tr>
                    <?php
                }
                ?>
                <td><?= $n ?></td>
                <td><?= $fetch['nama'] ?></td>
                <td><?= $kat['nama_kat'] ?></td>
                <td><?= $fetch['deskripsi'] ?></td>
                <td><img src="../image/<?= $fetch['foto'] ?>" style="width:70px;height:70px;border-radius:10px;object-fit: cover"/></td>
                <td>Rp.<?= number_format($fetch['harga']) ?></td>
                <td><?= $fetch['qty'] ?></td>
                <td>
                    <a href="produk-edit.php?id=<?= $fetch['id_data'] ?>" style="color:orange;text-decoration: none;padding:5px;font-size:12px;font-weight: bold">Edit</a>
                    <a href="actions/produk-delete.php?id=<?= $fetch['id_data'] ?>" style="color:red;text-decoration: none;padding:5px;font-size:12px;font-weight: bold">Hapus</a>
                </td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</body>
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
   <title>Panel - Tamabah produk</title>
   <?php include 'temps/stylenscripts.php'?>
</head>
<body style="padding:0;margin:0;font-family: 'Rubiks'">
   <?php include 'temps/sidebar.php' ?>
   <div class="panel-sections">
      <div class="sect-heading">
         <h1>Produk</h1>
         <p>Buat & Kelola produk</p>
      </div>

      <div class="sect-body">
         <div class="sect-col-half">
            <?php
            if(!empty($_GET['produk']))
            {
               if($_GET['produk'] == "true")
               {
                  ?>
                  <h4 class="alert alert-success">Produk berhasil disimpan!</h4>
                  <?php
               }
               else{
                  ?>
                  <h4 class="alert alert-danger">Gagal!</h4>
                  <?php
               }
            }

            if(!empty($_GET['foto']))
            {
               ?>
               <h4 class="alert alert-danger">Foto gagal diupload!</h4>
               <?php
            }
            ?>
            <form action="actions/produk-add.php" method="post" enctype="multipart/form-data">
               <div class="form-group">
                  <label>Nama Produk</label>
                  <input type="text" required name="name" placeholder="Ikan Cupang" value="">
               </div>
               <div class="form-group">
                  <label>Kategori</label>
                  <select required name="kat">
                     <?php
                     while($f = mysqli_fetch_array($cat))
                     {
                        ?>
                        <option value="<?= $f['id_data'] ?>"><?= $f['nama_kat'] ?></option>
                        <?php
                     }
                     ?>
                  </select>
               </div>
               <div class="form-group">
                  <label>Deskripsi</label>
                  <textarea name="descript" required placeholder="Produk ini sangat tidak bagus"></textarea>
               </div>
               <div class="form-group">
                  <label>Gambar Ikan</label>
                  <input type="file" accept=".jpg,.jpeg" name="foto">
               </div>
               <div class="form-group">
                  <label>Harga</label>
                  <input type="number" required name="harga" placeholder="Misal: 1000000">
               </div>
               <div class="form-group">
                  <label>Qty</label>
                  <input type="number" required name="qty" placeholder="Misal: 100">
               </div>
               <div class="form-group">
                  <button type="submit">Simpan</button>
               </div>
            </form>

</body>

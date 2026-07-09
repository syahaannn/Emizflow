<?php
require '../backend/model/Querybuilder.php';
session_start();
include 'sys/authchecker.php';
$mUser = new Querybuilder("user");
$mPrd = new Querybuilder("produk");
$mTrans = new Querybuilder("trans");
$mRec = new Querybuilder("receipt");
?>
<!DOCTYPE Html>
<html lang="id">
   <head>
      <title>Panel</title>
      <?php include 'temps/stylenscripts.php'?>
   </head>
   <body style="padding:0;margin:0;font-family: 'Rubiks'">
   <?php include 'temps/sidebar.php' ?>
   <div class="panel-sections">
      <div class="sect-heading">
         <h1>Dashboard</h1>
         <p>Selamat datang di panel admin</p>
      </div>

      <div class="sect-body" style="padding-top:100px;padding-bottom: 100px;">
         <div style="display: flex;flex-flow: row;justify-content: center;width:100%;margin-bottom: 20px;">
            <img style="width:100px;height:100px;object-fit: contain;background: #ddd;border-radius: 100px;padding:10px;" src="../image/logo.png">
         </div>
         <h1 style="text-align: center;width:100%;">Statistik Toko<br>E-MIZU FlowerHorn </h1>
         <div class="sect-stats">
            <div class="stats-grup">
               <h1 style="margin:0;padding:3px;"><i class="fas fa-users"></i></h1>
               <h1 style="margin:0;padding:3px;"><?= $mUser->selectAll("level = 'user'")['rows'] ?></h1>
               <h5 style="margin:0;padding:3px;">Pelanggan</h5>
            </div>

            <div class="stats-grup">
               <h1 style="margin:0;padding:3px;"><i class="fas fa-user-secret"></i></h1>
               <h1 style="margin:0;padding:3px;"><?= $mUser->selectAll("level = 'admin'")['rows'] ?></h1>
               <h5 style="margin:0;padding:3px;">Administrator</h5>
               <a style="text-transform:uppercase;color:#fff;text-decoration: none;color:blue" href="akun.php" style="text-align: center">Akun</a>
            </div>

            <div class="stats-grup">
               <h1 style="margin:0;padding:3px;"><i class="fas fa-bookmark"></i></h1>
               <h1 style="margin:0;padding:3px;"><?= $mTrans->selectAll("status = '0'")['rows'] ?></h1>
               <h5 style="margin:0;padding:3px;">Pesanan Belum Dibayar</h5>
               <a style="text-transform:uppercase;color:#fff;text-decoration: none;color:blue" href="trans.php" style="text-align: center">Tindak Lanjut</a>
            </div>

            <div class="stats-grup">
               <h1 style="margin:0;padding:3px;"><i class="fas fa-check"></i></h1>
               <h1 style="margin:0;padding:3px;"><?= $mTrans->selectAll("status = '1'")['rows'] ?></h1>
               <h5 style="margin:0;padding:3px;">Pesanan Udah Dibayar</h5>
               <a style="text-transform:uppercase;color:#fff;text-decoration: none;color:blue" href="trans.php" style="text-align: center">Lihat</a>
            </div>

            <div class="stats-grup">
               <h1 style="margin:0;padding:3px;"><i class="fas fa-inbox"></i></h1>
               <h1 style="margin:0;padding:3px;"><?= $mPrd->selectAll("1")['rows'] ?></h1>
               <h5 style="margin:0;padding:3px;">Produk</h5>
               <a style="text-transform:uppercase;color:#fff;text-decoration: none;color:blue" href="produk.php" style="text-align: center">Kelola Produk</a>
            </div>

            <div class="stats-grup">
               <h1 style="margin:0;padding:3px;"><i class="fas fa-inbox"></i></h1>
               <h1 style="margin:0;padding:3px;"><?= $mPrd->selectAll("qty = '0'")['rows'] ?></h1>
               <h5 style="margin:0;padding:3px;">Produk Habis Stok</h5>
               <a style="text-transform:uppercase;color:#fff;text-decoration: none;color:blue" href="kelolastok.php" style="text-align: center">Kelola Stok</a>
            </div>

            <div class="stats-grup">
               <h1 style="margin:0;padding:3px;"><i class="fas fa-file"></i></h1>
               <h1 style="margin:0;padding:3px;"><?= $mRec->selectAll("status = '0'")['rows'] ?></h1>
               <h5 style="margin:0;padding:3px;text-align: center">Pembayaran Menunggu Acc</h5>
               <a style="text-transform:uppercase;color:#fff;text-decoration: none;color:blue" href="trans.php" style="text-align: center">Tinjau</a>
            </div>
         </div>
      </div>
   </div>
   </body>
</html>
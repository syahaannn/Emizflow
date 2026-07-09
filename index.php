<?php
require 'backend/model/Querybuilder.php';
session_start();
$sCat = new Querybuilder("kategori");
$slick = new Querybuilder("produk");
$slickPrd =  $slick->selectAll(" kategori = '4' ORDER BY id_data ASC LIMIT 10");
?>
<!DOCTYPE Html>
<html>
<head>
      <title>E-MIZU FlowerHorn</title>
      <meta charset="UTF-8">
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"/>
      <link rel="stylesheet" href="assets/css/style.css"/>
      <script src="https://kit.fontawesome.com/45baddc7d9.js" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
      <script src="assets/js/script.js"></script>
   </head>
   <body style="padding:0;margin:0;box-sizing: border-box;font-family: 'Rubiks'">
   <?php
   include 'temps/navbar.php';
   if(!empty($_GET['reg']))
   {
      if($_GET['reg'] == "ok")
      {
         ?>
         <div class="alert-wrapper">
            <div class="alert-body">
               <h2 style="text-align: center">Akun Berhasil dibuat!</h2>
               <p>Selanjutnya, silahkan Masuk</p>
               <a href="javascript:void(0)" class="navacc" data-target=".nav-login"> Masuk</a>
            </div>
         </div>
         <?php
      }
      else if($_GET['reg'] == "exist")
      {
         ?>
         <div class="alert-wrapper">
            <div class="alert-body">
               <h2 style="text-align: center">Akun Sudah Ada!</h2>
               <p>Silahkan gunakan E-mail yang lain</p>
               <a href="javascript:void(0)" class="navacc" data-target=".nav-register"> Coba Lagi</a>
               <a style="margin-top: 10px;" href="javascript:void(0)" class="alert-dismiss">Tutup</a>
            </div>
         </div>
         <?php
      }
   }

   if(!empty($_GET['login']))
   {
      if($_GET['login'] == "unknown")
      {
         ?>
         <div class="alert-wrapper">
            <div class="alert-body">
               <h2 style="text-align: center">Login Gagal!</h2>
               <p>Akun tidak diketahui</p>
               <a href="javascript:void(0)" class="navacc" data-target=".nav-login"> Coba Lagi</a>
               <a style="margin-top: 10px;" href="javascript:void(0)" class="navacc" data-target=".nav-register">Buat Akun</a>
               <a style="margin-top: 10px;" href="javascript:void(0)" class="alert-dismiss">Tutup</a>
            </div>
         </div>
         <?php
      }
   }
   ?>

   <div class="wrapper">
      <div class="slick-wrapper">
         <?php
         while($mslick = mysqli_fetch_array($slickPrd['result']))
         {
            $idkat = $mslick['kategori'];
            $slickKat = $sCat->select("id_data = '$idkat'")['single'];
            ?>
            <div class="slick-i">
               <img src="image/<?= $mslick['foto'] ?>">
               <div class="slick-ovr">
                  <img src="image/<?= $mslick['foto'] ?>" style="width:80px;height:80px;border-radius:100px;object-fit: contain;background: #fff;padding:10px;">
                  <h1><?= $mslick['nama'] ?></h1>
                  <h2>Rp.<?= number_format($mslick['harga']) ?></h2>
                  <h2 style="font-size:12px;"><?= $slickKat['nama_kat'] ?></h2>
                  <div>
                     <?php
                     if(empty($_SESSION['user']))
                     {
                        ?>
                        <a href="javascript:void(0)" class="open-popup" data-target=".nav-login"><i class="fas fa-shopping-cart"></i> Masuk Keranjang</a>
                        <?php
                     }
                     else{
                        ?>
                        <a href="backend/cart.php?id=<?= $mslick['id_data'] ?>"><i class="fas fa-shopping-cart"></i> Masuk Keranjang</a>
                        <?php
                     }
                     ?>
                     <a href="produk.php?id=<?= $mslick['id_data']; ?>"><i class="fas fa-search"></i> </a>
                  </div>
               </div>
            </div>
            <?php
         }
         ?>
      </div>
   </div>

   <h1 style="text-align: center;margin-top:50px;">Pesan Sekarang!</h1>
   <div class="flex-container" style="padding:30px;">
      <?php
      $prod = new Querybuilder("produk");
      $prd1 = $prod->selectAll("1 ORDER BY id_data DESC");
      while($ff = mysqli_fetch_array($prd1['result']))
      {

         ?>
         <div class="product-wrapper">
            <img src="image/<?= $ff['foto'] ?>" style="width:100%;">
            <h3 style="margin-top:10px;"><?= $ff['nama'] ?></h3>
            <h5 style="margin:0;padding:0;">Rp.<?= number_format($ff['harga']) ?> &centerdot; <?= $ff['qty'] ?>x</h5>
            <?php
            if($ff['qty'] != 0)
            {
               if(empty($_SESSION['user']))
               {
                  ?>
                  <a href="produk.php?id=<?= $ff['id_data'] ?>"><i class="fas fa-search"></i> Lihat</a>
                  <a data-target=".nav-login" class="open-popup" href="#"><span class="fas fa-shopping-cart"></span> ke Keranjang</a>
                  <?php
               }
               else{
                  ?>
                  <a href="produk.php?id=<?= $ff['id_data'] ?>"><i class="fas fa-search"></i> Lihat</a>
                  <a href="backend/cart.php?id=<?= $ff['id_data'] ?>"><span class="fas fa-shopping-cart"></span> ke Keranjang</a>
                  <?php
               }
            }
            else{
               ?>
               <h5 style="color:#fff;text-align: center;padding:20px;background: red;margin-top:10px;border-radius: 5px;">STOK HABIS</h5>
               <?php
            }

            ?>
         </div>
         <?php
      }
      ?>
   </div>
   <script>
      $(document).ready(function () {
         $(".slick-wrapper").slick({
            arrows:false,
            dots:false,
            autoplay:true,
            centerMode:true,
            fade:true,
            cssEase:'linear',
            infinite:true,
            autoplaySpeed:1000
         });
      });
   </script>
   </body>
</html>

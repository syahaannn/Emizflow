<div class="panel-side">
   <a href="dash.php"><img src="../image/logo.png" style="padding:5px;background:#ddd;border-radius:130px;width:130px;height:100px;object-fit: contain"></a>
   <h4 style="margin:0;margin-top:10px;text-transform: uppercase"><?= $_SESSION['user'] ?></h4>
   <h4 style="margin:0;margin-top:10px;"><code><?= $_SESSION['level'] ?></code></h4>
   <div class="side-menu">
      <a href="dash.php">Beranda</a>
      <a href="akun.php">Akun</a>
      <a href="kategori.php">Kategori Produk</a>
      <a href="produk.php">Tambah Produk</a>
      <a href="trans.php">Transaksi</a>
       <a href="kelolastok.php">Kelola Stok</a>
      <a href="../index.php" style="border-top:1px solid #ddd;margin-top:20px;">Ke Halaman Awal</a>
      <a href="actions/logout.php" style="color:red;">Keluar</a>
   </div>
</div>
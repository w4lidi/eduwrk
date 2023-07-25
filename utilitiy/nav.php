<?php 
require_once("global_var.php");

 ?>
<nav class="text-center">
	<button class="btn btn-success ">
		<a class="text-info font-weight-bold" href='<?php echo $url_ ?>'>Home</a>
	</button>
		
	<button class="btn btn-outline-primary">
		<a href='<?php echo $url_."/read/data_kategori.php" ?>'>Data kategori barang</a>
	</button>

	<button class="btn btn-outline-primary">
		<a href='<?php echo $url_."/read/data_supplier.php" ?>'>Data suplier</a>
	</button>

	<button class="btn btn-outline-primary">
		<a href='<?php echo $url_."/read/data_kasir.php" ?>'>Data kasir</a>
	</button>
	
	<button class="btn btn-outline-primary">
		<a href='<?php echo $url_."/read/data_barang.php" ?>'>Data Barang</a>
	</button>

	<button class="btn btn-outline-primary">
		<a href='<?php echo $url_."/read/data_barang_masuk.php" ?>'>Data Barang Masuk</a>
	</button>

	<button class="btn btn-outline-primary">
		<a href='<?php echo $url_."/read/data_pelanggan.php" ?>'>Data pelanggan</a>
	</button>

	<button class="btn btn-outline-primary">
		<a href='<?php echo $url_."/read/data_pembelian.php" ?>'>Data Pembeli</a>
	</button>
</nav>

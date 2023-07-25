<?php 
	include("../config/koneksi.php");
	include ("../utilitiy/global_var.php");

	$sql = "SELECT barang.*, kategori_barang.* FROM barang INNER JOIN kategori_barang ON kategori_barang.id_kategori = barang.id_kategori";

	$read = mysqli_query($kon, $sql);
	if(!$read){
		echo "gagal read database". mysqli_error($kon);
	}

	//var_dump($read);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Data Barang | <?php echo $title_page; ?></title>
 	<?php include '../utilitiy/tag_head.php'; ?>
 </head>
 <body>
 	<?php include '../utilitiy/nav.php'; ?>
 	<h3>Data Barang</h3>
 	<table border="1">
 		<tr>
 			<th>No.</th>
 			<th>Id Barang</th>
 			<th>Nama Barang</th>
 			<th>Kategori</th>
 			<th>Stok</th>
 			<th>Harga</th>
 			<th>Exp.</th>
 			<th>Action</th>
 		</tr>
		<?php 
			$i = 1;
			foreach ($read as $value) {
				echo "<tr>";
					echo "<td>".$i."</td>";
					echo "<td>".$value['id_barang']."</td>";
					echo "<td>".$value['nama_barang']."</td>";
					echo "<td>".$value['nama_kategori']."</td>";
					echo "<td>".$value['stok']."</td>";
					echo "<td>".$value['harga']."</td>";
					echo "<td>".$value['tgl_exp']."</td>";
					echo "<td>
							<a href='../form/barang.php?
							id_barang=".$value['id_barang']."&
							nama_barang=".$value['nama_barang']."&
							nama_kategori=".$value['nama_kategori']."&
							exp=".$value['tgl_exp']."&
							stok=".$value['stok']."&
							harga=".$value['harga']."'>Edit</a>
						</td>";
					 echo "<td>
					 		<a href='../aksi/hapus/hapus.php?
					 		id=".$value['id_barang']."&
					 		tbl=barang&
					 		whr=id_barang'>Hapus</a>
					 	</td>";
				echo "</tr>";
				$i++;
			}
		 ?>
		 <tr class="text-center">
		 	<td colspan="7"></td>
		 	<td colspan="2">
		 		<button class="btn btn-outline-primary">
		<a href='<?php echo $url_."/form/barang.php" ?>'>Input Barang</a>
	</button>
		 	</td>
		 </tr>


 	</table>
 </body>
 </html>
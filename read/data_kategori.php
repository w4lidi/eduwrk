<?php 
	include("../config/koneksi.php");
	include ("../utilitiy/global_var.php");
	$sql = "SELECT * FROM kategori_barang";
	$read = mysqli_query($kon, $sql);
	if(!$sql){
		echo "gagal read ". mysql_error();
	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Data kategori | <?php echo $title_page; ?></title>
 	<?php include '../utilitiy/tag_head.php'; ?>
 </head>
 <body>
 	<?php include '../utilitiy/nav.php'; ?>
 	<h3>Data Kategori</h3>
 	<table border="1">
 		<tr>
 			<th>No.</th>
 			<th>Id. kategori</th>
 			<th>Nama Kategori</th>
 			<th colspan="2">Action</th>
 		</tr>	 		
		<?php 
			$i = 1;
			foreach ($read as $value) {
				echo "<tr>";
					echo "<td>".$i."</td>";
					echo "<td>".$value['id_kategori']."</td>";
					echo "<td>".$value['nama_kategori']."</td>";
					echo "<td>
							<a href='../form/kategori_barang.php?
							id_kategori=".$value['id_kategori']."&
							nama_kategori=".$value['nama_kategori']."'>Edit</a>
						</td>";
					echo "<td>
							<a href='../aksi/hapus/hapus.php?
							id=".$value['id_kategori']."&
							tbl=kategori_barang&whr=id_kategori'>Hapus</a>
						</td>";
				echo "</tr>";
				$i++;
			}
		 ?>

		 <tr class = "text-center">
		 	<td colspan="3"></td>
		 	<td colspan="2">
		 		<button class="btn btn-outline-primary">
		<a href='<?php echo $url_."/form/kategori_barang.php" ?>'>Tambah kategori</a>
	</button>

		 	</td>
		 </tr>
		 
 	</table>
 </body>
 </html>
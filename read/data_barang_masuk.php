<?php 
	include("../config/koneksi.php");
	include ("../utilitiy/global_var.php");

	$sql = "SELECT suplier.*, barang.*,barang_masuk.* FROM barang_masuk INNER JOIN 
 suplier on suplier.id_suplier = barang_masuk.id_suplier INNER JOIN
 barang on barang.id_barang = barang_masuk.id_barang";

	$read = mysqli_query($kon, $sql);
	if(!$read){
		echo "gagal read database". mysqli_error($kon);
	}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Data Barang Masuk | <?php echo $title_page; ?></title>
 	<?php include '../utilitiy/tag_head.php'; ?>
 </head>
 <body>
 	<?php include '../utilitiy/nav.php'; ?>
 	<h3>Data Barang Masuk</h3>
 	<table border="1">
 		<tr>
 			<th>No.</th>
 			<th>Id masuk</th>
 			<th>Nama Barang</th>
 			<th>Suplier</th>
 			<th>Tgl Masuk</th>
 			<th>Jumlah</th>
 			<th>action</th>
 		</tr>
		<?php 
			$i = 1;
			foreach ($read as $value) {
				echo "<tr>";
					echo "<td>".$i."</td>";
					echo "<td>".$value['id_barang']."</td>";
					echo "<td>".$value['nama_barang']."</td>";
					echo "<td>".$value['nama_suplier']."</td>";
					echo "<td>".$value['tgl_masuk']."</td>";
					echo "<td>".$value['jumlah']."</td>";
					echo "<td>
							<a href='../form/barang_masuk.php?
							jumlah=".$value['jumlah']."&
							id_masuk=".$value['id_masuk']."&
							nama_suplier=".$value['nama_suplier']."&
							nama_barang=".$value['nama_barang']."&
							nama_suplier=".$value['nama_suplier']."'>Edit</a>
						</td>";
					 echo "<td>
					 		<a href='../aksi/hapus/hapus.php?
					 		id=".$value['id_masuk']."&
					 		tbl=barang_masuk&
					 		whr=id_masuk'>Hapus</a>
					 	</td>";
				echo "</tr>";
				$i++;
			}
		 ?>
		 <tr class="text-center">
		 	<td colspan="6"></td>
		 	<td colspan="2">
		 		<button class="btn btn-outline-primary">
		<a href='<?php echo $url_."/form/barang_masuk.php" ?>'>Input Barang</a>
	</button>
		 	</td>
		 </tr>


 	</table>
 </body>
 </html>
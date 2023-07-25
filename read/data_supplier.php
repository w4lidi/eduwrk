<?php 
	include("../config/koneksi.php");
	include ("../utilitiy/global_var.php");
	$sql = "SELECT * FROM suplier";
	$read = mysqli_query($kon, $sql);
	if(!$sql){
		echo "gagal read ". mysql_error();
	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Data supplier | <?php echo $title_page; ?></title>
 	<?php include '../utilitiy/tag_head.php'; ?>
 </head>
 <body>
 	<?php include '../utilitiy/nav.php'; ?>
 	<h3>Data supplier</h3>
 	<table border="1">
 		<tr>
 			<th>No.</th>
 			<th>Id. suplier</th>
 			<th>Nama suplier</th>
 			<th>Alamat</th>
 			<th>NO.Hp</th>
 			<th colspan="2">Action</th>
 		</tr>	 		
		<?php 
			$i = 1;
			foreach ($read as $value) {
				echo "<tr>";
					echo "<td>".$i."</td>";
					echo "<td>".$value['id_suplier']."</td>";
					echo "<td>".$value['nama_suplier']."</td>";
					 echo "<td>".$value['alamat']."</td>";
					echo "<td>
							<a href='../form/supplier.php?
							id_suplier=".$value['id_suplier']."&
							nama_suplier=".$value['nama_suplier']."&
							alamat=".$value['alamat']."'>Edit</a>
						</td>";
					echo "<td>
							<a href='../aksi/hapus/hapus.php?
							id=".$value['id_suplier']."&
							tbl=suplier&whr=id_suplier'>Hapus</a>
						</td>";
				echo "</tr>";
				$i++;
			}
		 ?>
		 <tr class="text-center">
		 	<td colspan="4"></td>
		 	<td colspan="2">
		 		
		 		<button class="btn btn-outline-primary">
		<a href='<?php echo $url_."/form/supplier.php" ?>'> tambah suplier</a>
	</button>
		 	</td>

		 </tr>
 	</table>
 </body>
 </html>
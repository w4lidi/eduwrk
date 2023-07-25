<?php 
	include("../config/koneksi.php");
	include ("../utilitiy/global_var.php");
	$sql = "SELECT * FROM pelanggan";
	$read = mysqli_query($kon, $sql);
	if(!$sql){
		echo "gagal read ". mysql_error();
	}


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Data Pelanggan | <?php echo $title_page; ?></title>
 	<?php include '../utilitiy/tag_head.php'; ?>
 </head>
 <body>
 	<?php include '../utilitiy/nav.php'; ?>
 	<h3>Data Pelanggan</h3>
 	<table border="1">
 		<tr>
 			<th>No.</th>
 			<th>Id. pelanggan</th>
 			<th>Nama pelanggan</th>
 			<th>Alamat</th>
 			<th>NO.Hp</th>
 			<th colspan="2">Aktion</th>
 		</tr>	 		
		<?php 
			$i = 1;
			foreach ($read as $value) {
				echo "<tr>";
					echo "<td>".$i."</td>";
					echo "<td>".$value['id_pelanggan']."</td>";
					echo "<td>".$value['nama_pelanggan']."</td>";
					 echo "<td>".$value['alamat']."</td>";
					echo "<td>".$value['no_Hp']."</td>";
					echo "<td>
							<a href='../form/pelanggan.php?
							id_pelanggan=".$value['id_pelanggan']."&
							nama_pelanggan=".$value['nama_pelanggan']."&
							alamat=".$value['alamat']."&
							no_hp=".$value['no_Hp']."'>Edit</a>
						</td>";
					echo "<td>
							<a href='../aksi/hapus/hapus.php?
							id=".$value['id_pelanggan']."&
							tbl=pelanggan&whr=id_pelanggan'>Hapus</a>
						</td>";
				echo "</tr>";
				$i++;
			}
		 ?>

		 <tr class="text-center">
		 	<td colspan="5"></td>
		 	<td colspan="2">
		 		<button class="btn btn-outline-primary">
		<a href='<?php echo $url_."/form/pelanggan.php" ?>'>Input pelanggan</a>
	</button>
		 	</td>
		 </tr>
 	</table>
 </body>
 </html>
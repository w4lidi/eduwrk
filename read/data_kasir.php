<?php 
	include("../config/koneksi.php");
	include ("../utilitiy/global_var.php");
	$sql = "SELECT * FROM kasir";
	$read = mysqli_query($kon, $sql);
	if(!$sql){
		echo "gagal read ". mysql_error();
	}
	//var_dump($read);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Data kasir | <?php echo $title_page; ?></title>
 	<?php include '../utilitiy/tag_head.php'; ?>
 </head>
 <body>
 	<?php include '../utilitiy/nav.php'; ?>
 	<h3>Data Kasir</h3>
 	<table border="1">
 		<tr>
 			<th>No.</th>
 			<th>Id. kasir</th>
 			<th>Nama Kasir</th>
 			<th>Alamat</th>
 			<th>NO.Hp</th>
 			<th colspan="2">Action</th>
 		</tr>	 		
		<?php 
			$i = 1;
			foreach ($read as $value) {
				echo "<tr>";
					echo "<td>".$i."</td>";
					echo "<td>".$value['id_kasir']."</td>";
					echo "<td>".$value['nama_kasir']."</td>";
					 echo "<td>".$value['alamat']."</td>";
					echo "<td>".$value['no_Hp']."</td>";
					echo "<td>
							<a href='../form/kasir.php?
							id_kasir=".$value['id_kasir']."&
							nama_kasir=".$value['nama_kasir']."&
							alamat=".$value['alamat']."&
							no_hp=".$value['no_Hp']."'>Edit</a>
						</td>";
					echo "<td>
							<a href='../aksi/hapus/hapus.php?
							id=".$value['id_kasir']."&
							tbl=kasir&whr=id_kasir'>Hapus</a>
						</td>";
				echo "</tr>";
				$i++;
			}
		 ?>

		 <tr class="text-center">
		 	<td colspan="5"></td>
		 	<td colspan="2">
		 		<button class="btn btn-outline-primary">
		<a href='<?php echo $url_."/form/kasir.php" ?>'>Input Kasir</a>
	</button>
		 	</td>
		 </tr>
 	</table>
 </body>
 </html>
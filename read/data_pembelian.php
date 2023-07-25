<?php 
	include("../config/koneksi.php");
	include ("../utilitiy/global_var.php");

	$sql = "SELECT pembelian.*,barang.*, pelanggan.*, kasir.* FROM pembelian INNER JOIN 
	barang ON pembelian.id_barang = barang.id_barang INNER JOIN 
	pelanggan ON pembelian.id_pelanggan = pelanggan.id_pelanggan INNER JOIN 
	kasir ON pembelian.id_kasir = kasir.id_kasir";

	$read = mysqli_query($kon, $sql);
	if(!$read){
		echo "gagal read database". mysqli_error($kon);
	}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Data pembelian | <?php echo $title_page; ?></title>
 	<?php include '../utilitiy/tag_head.php'; ?>
 </head>
 <body>
 	<?php include '../utilitiy/nav.php'; ?>
 	<h3>Data pembelian</h3>
 	<table border="1">
 		<tr>
 			<th>No.</th>
 			<th>id beli</th>
 			<th>Nama Barang</th>
 			<th>Nama Pelanggan</th>
 			<th>Nama Kasir</th>
 			<th>Tgl Beli</th>
 			<th>Jumlah Barang</th>
 			<th>Total Harga</th>
 			<th>action</th>
 		</tr>
		<?php 
			$i = 1;
			foreach ($read as $value) {
				echo "<tr>";
					echo "<td>".$i."</td>";
					echo "<td>".$value['id_beli']."</td>";
					echo "<td>".$value['nama_barang']."</td>";
					echo "<td>".$value['nama_pelanggan']."</td>";
					echo "<td>".$value['nama_kasir']."</td>";
					echo "<td>".$value['tgl_beli']."</td>";
					echo "<td>".$value['jumlah_barang']."</td>";
					echo "<td>".$value['total_harga']."</td>";
					echo "<td>
							<a href='../form/pembelian.php?
							id_beli=".$value['id_beli']."&
							id_barang=".$value['id_barang']."&
							id_pelanggan=".$value['id_pelanggan']."&
							id_kasir=".$value['id_kasir']."&
							tgl_beli=".$value['tgl_beli']."&
							jumlah_barang=".$value['jumlah_barang']."&
							total_harga=".$value['total_harga']."'>Edit</a>
						</td>";
					 echo "<td>
					 		<a href='../aksi/hapus/hapus.php?
					 		id=".$value['id_beli']."&
					 		tbl=pembelian&
					 		whr=id_beli'>Hapus</a>
					 	</td>";
				echo "</tr>";
				$i++;
			}
		 ?>
		 <tr class="text-center">
		 	<td colspan="8"></td>
		 	<td colspan="2">
		 		<button class="btn btn-outline-primary">
		<a href='<?php echo $url_."/form/pembelian.php" ?>'>Input Barang</a>
	</button>
		 	</td>
		 </tr>


 	</table>
 </body>
 </html>
<?php 
	include '../config/koneksi.php';
	$sql_barang = "select * from barang";
	$sql_kasir = "select * from kasir";
	$sql_pelanggan = "select * from pelanggan";
	
	$read_barang = mysqli_query($kon, $sql_barang);
	$read_kasir = mysqli_query($kon, $sql_kasir);
	$read_pelanggan = mysqli_query($kon, $sql_pelanggan);

	if ($_GET) {
		$id_beli = $_GET['id_beli'];
		$nama_barang = $_GET['id_barang'];
		$nama_pelanggan = $_GET['id_pelanggan'];
		$nama_kasir = $_GET['id_kasir'];
		$tgl_beli = $_GET['tgl_beli'];
		$jumlah_barang =$_GET['jumlah_barang'] ;
		$total_harga =$_GET['total_harga'] ;


		$tgl_beli = $_GET['tgl_beli'];
		$btn_kirim = "<input type='submit' id='btn' name='ubah' value='Simpan Perubahan'>";
		$proses = "<form action='../aksi/edit/ubah_pembelian.php' method='post'>";
		$title = "Edit Pembelian";
		$subTitle = $title;
	}else{
		$id_beli = "";
		$total_harga;$nama_barang = "";$nama_pelanggan = "";$nama_kasir = "";$jumlah_barang = "";$tgl_beli="2022-01-01";
		$proses = "<form action='../aksi/save/simpan_pembelian.php' method='post'>";
		$btn_kirim = "<input type='submit' id='btn' name='simpan' value='Simpan Barang'>";
		$title = "New Pembelian";
		$subTitle = $title;
	}
		//echo "$id_menu"; trouble shoot only
 ?>
 <?php include '../utilitiy/global_var.php'; ?>
<!DOCTYPE html>
<html>
<head>
 	<title><?php echo $title ?> | <?php echo $title_page ; ?></title>
 	<?php include '../utilitiy/tag_head.php'; ?>
 </head>
 <body>
 	<?php include '../utilitiy/nav.php'; ?>
	<h3><?php echo $title; ?></h3>
	<?php echo $proses ;?>
	<input type='hidden'  value= '<?php echo $id_beli; ?>'  name='id_beli'>
		<table border="1">
			<tr>
				<td><label for="nama_barang" >Nama Barang</label></td>
				<td>:</td>
				<td>
					<select title="ch" name="nama_barang">
						<?php 
							$s = "";
							foreach ($read_barang as  $value) {
								if($nama_barang == $value['id_barang']){
									$s = "selected";
								}else{
									$s = "";
								}
							echo "<option";
							echo " $s ";
							echo "value='".$value['id_barang']."'>".$value['nama_barang']."</option>";
							}
						 ?>
					</select>
				</td>
			</tr>
			<tr>
				<td><label for="nama_pelanggan" >Nama Pelanggan</label></td>
				<td>:</td>
				<td>
					<select title="ch" name="nama_pelanggan">
						<?php 
							$s = "";
							foreach ($read_pelanggan as  $value) {
								if($nama_pelanggan == $value['id_pelanggan']){
									$s = "selected";
								}else{
									$s = "";
								}
							echo "<option";
							echo " $s ";
							echo "value='".$value['id_pelanggan']."'>".$value['nama_pelanggan']."</option>";
							}
						 ?>
					</select>
				</td>
			</tr>
			<tr>
				<td><label for="nama_kasir" >Nama Kasir</label></td>
				<td>:</td>
				<td>
					<select title="ch" name="nama_kasir">
						<?php 
							$s = "";
							foreach ($read_kasir as  $value) {
								if($nama_kasir == $value['id_kasir']){
									$s = "selected";
								}else{
									$s = "";
								}
							echo "<option";
							echo " $s ";
							echo "value='".$value['id_kasir']."'>".$value['nama_kasir']."</option>";
							}
						 ?>
					</select>
				</td>
			</tr>
			
			<tr>
				<td>
					<label for='jumlah_barang'>Jumlah Barang</label></td>
				<td>:</td>
				<td>
					 <input type='number' id='jumlah_barang' value= '<?php echo $jumlah_barang; ?>' name='jumlah_barang'>
					</td>
			</tr>
			<tr>
				<td>
					<label for='total_harga'>Total Harga</label></td>
				<td>:</td>
				<td>
					 <input type='number' id='total_harga' value= '<?php echo $total_harga; ?>' name='total_harga'>
					</td>
			</tr>
			<tr>
				<td colspan="3" style="text-align: center;">
					<?php 
						echo $btn_kirim;
					 ?>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
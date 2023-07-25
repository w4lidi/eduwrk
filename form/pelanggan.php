<?php 
	include '../utilitiy/global_var.php';
	$subTitle = "";

 ?>


	<?php 
	if ($_GET) {
		include '../config/koneksi.php';
		$id_pelanggan = $_GET['id_pelanggan'];
		$nama_pelanggan = $_GET['nama_pelanggan'];
		$alamat = $_GET['alamat'];
		$no_hp = $_GET['no_hp'];
		// $password = $_GET['password'];
		$btn_kirim = "<input type='submit' id='btn' name='ubah' value='Simpan Perubahan'>";
		$proses = "<form action='../aksi/edit/ubah_pelanggan.php' method='post'>";
		$titlehead = "Edit Pelanggan";
		$subTitle = $titlehead;
			}
	else{
		$id_pelanggan = "";
		$nama_pelanggan = "";$alamat = "";$no_hp = "";
		$proses = "<form action='../aksi/save/simpan_pelanggan.php' method='post'>";
		$btn_kirim = "<input type='submit' id='btn' name='simpan' value='Simpan'>";
		$titlehead = "New Pelanggan";
		$subTitle = $titlehead;
	}
	 ?>


<!DOCTYPE html>
<html>
<head>
 	<title><?php echo $subTitle; ?> | <?php echo $title_page  ?></title>
 	<?php include '../utilitiy/tag_head.php'; ?>
 </head>
 <body>
 	<?php include '../utilitiy/nav.php'; ?>

	<h3><?php echo $titlehead; ?></h3>
	<?php 
		 echo $proses ;
	 	echo "<input type='hidden'  value='".$id_pelanggan."'  name='id_pelanggan'>";
	 ?>
	<table border="1">
		<tr> 
			<td><label for='nama_pelanggan'>Nama Pelanggan</label></td>
			<td>:</td>
			<td>
				<input type='text' id='nama_pelanggan' value= '<?php echo $nama_pelanggan; ?>' name='nama_pelanggan'>
			</td>
		</tr>
		<tr>
			<td><label for='alamat'>Alamat</label></td>
			<td>:</td>
			<td>
				<input type='text' id='alamat' value= '<?php echo $alamat; ?>' name='alamat'>
			</td>
		</tr>
		<tr>
			<td>
				<label for='no_hp'>No. Hp</label></td>
			<td>:</td>
			<td>
				 <input type='number' id='no_hp' value= '<?php echo $no_hp; ?>' name='no_hp'>
			</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: center;">
				<?php echo $btn_kirim;?>
			</td>
		</tr>
</table>


</form>
</body>
</html>
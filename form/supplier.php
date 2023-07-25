<?php 
	include '../utilitiy/global_var.php';
	$subTitle = "";

 ?>


	<?php 
	if ($_GET) {
		include '../config/koneksi.php';
		$id_suplier = $_GET['id_suplier'];
		$nama_suplier = $_GET['nama_suplier'];
		$alamat = $_GET['alamat'];
		$btn_kirim = "<input type='submit' id='btn' name='ubah' value='Simpan Perubahan'>";
		$proses = "<form action='../aksi/edit/ubah_suplier.php' method='post'>";
		$titlehead = "Edit suplier";
		$subTitle = $titlehead;
			}
	else{
		$id_suplier = "";
		$nama_suplier = "";$alamat = "";
		$proses = "<form action='../aksi/save/simpan_supplier.php' method='post'>";
		$btn_kirim = "<input type='submit' id='btn' name='simpan' value='Simpan'>";
		$titlehead = "New suplier";
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
	 	 echo "<input type='hidden'  value='".$id_suplier."'  name='id_suplier'>";
	 ?>
	<table border="1">
		
		<tr>
			<td><label for='nama_suplier'>Nama suplier</label></td>
			<td>:</td>
			<td>
				<input type='text' id='nama_suplier' value= '<?php echo $nama_suplier; ?>' name='nama_suplier'>
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
			<td colspan="3" style="text-align: center;">
				<?php echo $btn_kirim;?>
			</td>
		</tr>
</table>


</form>
</body>
</html>
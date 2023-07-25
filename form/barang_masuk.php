<?php 
	include '../config/koneksi.php';
	$sql = "select * from barang";
	$sql_suplier = "select * from suplier";
	$read = mysqli_query($kon, $sql);
	$read_suplier = mysqli_query($kon, $sql_suplier);

	if ($_GET) {
		$id_masuk = $_GET['id_masuk'];
		$nama_suplier = $_GET['nama_suplier'];
		$jumlah = $_GET['jumlah'];
		$nama_barang =$_GET['nama_barang'] ;
		$btn_kirim = "<input type='submit' id='btn' name='ubah' value='Simpan Perubahan'>";
		$proses = "<form action='../aksi/edit/ubah_barang_masuk.php' method='post'>";
		$title = "Edit Barang masuk";
		$subTitle = $title;

		$sql = "SELECT barang.*, kategori_barang.* FROM barang INNER JOIN kategori_barang ON kategori_barang.id_kategori = barang.id_kategori";

		$read_id = mysqli_query($kon, $sql);
		$data = mysqli_fetch_assoc($read_id);
		if(!$read){
			echo "gagal read databse". mysqli_error($kon);
		}
	}else{
		$id_masuk = "";
		$nama_suplier = "";$nama_barang = "";$jumlah = "";
		$proses = "<form action='../aksi/save/simpan_barang_masuk.php' method='post'>";
		$btn_kirim = "<input type='submit' id='btn' name='simpan' value='Simpan Barang'>";
		$title = "New Barang Masuk";
		$subTitle = $title;
	}
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
	<input type='hidden'  value= '<?php echo $id_masuk; ?>'  name='id_masuk'>
		<table border="1">
			<tr>
				<td><label for="suplier" >suplier</label></td>
				<td>:</td>
				<td>
					<select title="ch" name="suplier">
						<?php 
							$s = "";
							foreach ($read_suplier as  $value) {
								if($nama_suplier == $value['nama_suplier']){
									$s = "selected";
								}else{
									$s = "";
								}
							echo "<option";
							echo " $s ";
							echo "value='".$value['id_suplier']."'>".$value['nama_suplier']."</option>";
							}
						 ?>
					</select>
					<?php 
					// 	echo "
					// <input type='text' id='nama_lengkap' value='".$nama_lengkap."' placeholder='nama_lengkap' name='nama_lengkap'>";
					 ?>
				</td>
			</tr>
			


			<tr>
				<td><label for="nama_barang" >nama Barang</label></td>
				<td>:</td>
				<td>
					<select title="ch" name="id_barang">
						<?php 
							$s = "";
							foreach ($read as  $value) {
								if($nama_barang == $value['nama_barang']){
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
				<td>
					<label for='jumlah'>jumlah</label></td>
				<td>:</td>
				<td>
					 <input type='number' id='jumlah' value= '<?php echo $jumlah; ?>' name='jumlah'>
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
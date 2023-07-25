<?php 
	include '../config/koneksi.php';
	$sql = "select * from kategori_barang";
	$read = mysqli_query($kon, $sql);

	if ($_GET) {
		$id_barang = $_GET['id_barang'];
		$nama_kategori = $_GET['nama_kategori'];
		$nama_barang =$_GET['nama_barang'] ;
		$stok = $_GET['stok'];
		$harga = $_GET['harga'];
		$exp = $_GET['exp'];
		$btn_kirim = "<input type='submit' id='btn' name='ubah' value='Simpan Perubahan'>";
		$proses = "<form action='../aksi/edit/ubah_barang.php' method='post'>";
		$title = "Edit Barang";
		$subTitle = $title;

		$sql = "SELECT barang.*, kategori_barang.* FROM barang INNER JOIN kategori_barang ON kategori_barang.id_kategori = barang.id_kategori";

		$read_id = mysqli_query($kon, $sql);
		$data = mysqli_fetch_assoc($read_id);
		//echo $data["jenis_menus"]; troble shoot only
		if(!$read){
			echo "gagal read databse". mysqli_error($kon);
		}
	}else{
		$id_barang = "";
		$nama_kategori = "";$nama_barang = "";$stok = "";$harga = "";$exp="2022-01-01";
		$proses = "<form action='../aksi/save/simpan_barang.php' method='post'>";
		$btn_kirim = "<input type='submit' id='btn' name='simpan' value='Simpan Barang'>";
		$title = "New Barang";
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
	<input type='hidden'  value= '<?php echo $id_barang; ?>'  name='id_barang'>
		<table border="1">
			
			<tr>
				<td><label for="kategori_barang" >Kategori Barang</label></td>
				<td>:</td>
				<td>
					<select title="ch" name="kategori_barang">
						<?php 
							$s = "";
							foreach ($read as  $value) {
								if($nama_kategori == $value['nama_kategori']){
									$s = "selected";
								}else{
									$s = "";
								}
							echo "<option";
							echo " $s ";
							echo "value='".$value['id_kategori']."'>".$value['nama_kategori']."</option>";
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
				<td><label for='nama_barang'>Nama Barang</label></td>
				<td>:</td>
				<td>
					<input type='text' id='nama_barang' value='<?php echo $nama_barang; ?>' name='nama_barang'>
				</td>
			</tr>
			<tr>
				<td><label for='tgl_exp'>Exp.</label></td>
				<td>:</td>
				<td>
					<input type='date' id='exp' value='<?php echo $exp; ?>' name='exp'>
				</td>
			</tr>
			<tr>
				<td><label for='stok'>Stok</label></td>
				<td>:</td>
				<td>
					<input type='number' id='stok' value='<?php echo $stok; ?>' name='stok'>
					 
					</td>
			</tr>
			<tr>
				<td>
					<label for='harga'>Harga</label></td>
				<td>:</td>
				<td>
					 <input type='number' id='harga' value= '<?php echo $harga; ?>' name='harga'>
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
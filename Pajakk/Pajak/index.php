<!DOCTYPE html>
<html>
<head>
	<title>MENAMPILKAN DATA DARI DATABASE SESUAI TANGGAL DENGAN PHP</title>
</head>
<body>

		<?php 
		include 'koneksi.php';
		?>

		<br/><br/><br/>

		<form method="post">
			<label>PILIH TANGGAL</label>
			<input type="date" name="TGL_PEMBAYARAN_SPPT">
			<button class="btn btn-primary">FILTER</button>
			<a href="result.php"><button>back</button></a>
		</form>


		<br/> <br/>

		<table border="5">
			<tr>
				<th>NOMOR</th>
				<th>KD_PROPINSI</th>
				<th>THN_PAJAK_SPPT</th>
				<th>TGL_PEMBAYARAN_SPPT</th>
			</tr>
			<?php 
			$no = 1;

			if(isset($_POST['TGL_PEMBAYARAN_SPPT'])){
				$tgl = $_POST['TGL_PEMBAYARAN_SPPT'];
				$sql = mysqli_query($koneksi,"select * from pembayaran_sppt where TGL_PEMBAYARAN_SPPT='$tgl'");


			}else{
				$sql = mysqli_query($koneksi,"select * from pembayaran_sppt");
				
			}
			
			while($data = mysqli_fetch_array($sql)){
			?>
			<tr>
				<td><?php echo $no++?></td>
				<td><?php echo $data['KD_PROPINSI']; ?>
				<?php echo $data['KD_DATI2']; ?>
				<?php echo $data['KD_KECAMATAN']; ?>
				<?php echo $data['KD_KELURAHAN']; ?>
				<?php echo $data['KD_BLOK']; ?>
				<?php echo $data['NO_URUT']; ?>
				<?php echo $data['KD_JNS_OP']; ?></td>
				<td><?php echo $data['THN_PAJAK_SPPT']; ?></td>
				<td><?php echo $data['TGL_PEMBAYARAN_SPPT']; ?></td>
				
			</tr>
			<?php 
			}
			?>
		</table>

		<table border="5">
			<tr>
				<th>NOMOR</th>
				<th>KD_KECAMATAN</th>
				<th>NAMA_KECAMATAN</th>

			</tr>
			<?php 
			$no = 1;

			if(isset($_POST['KD_KECAMATAN'])){
				$tgl = $_POST['KD_KECAMATAN'];

			}else{
				$sql = mysqli_query($koneksi,"select * from kecamatan");
				
			}
			
			while($data = mysqli_fetch_array($sql)){
			?>
			<tr>
				<td><?php echo $no++?></td>
				<td><?php echo $data['KD_KECAMATAN']; ?>
				<td><?php echo $data['NM_KECAMATAN']; ?></td>
				
			</tr>
			<?php 
			}
			?>
		</table>
</body>
</html>
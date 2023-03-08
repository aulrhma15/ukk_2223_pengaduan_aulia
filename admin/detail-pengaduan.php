<?php 
$id = &$_GET['id'];
if (empty($id)) {
	header("Location: masyarakat.php");
}

include '../koneksi.php';
$query = mysqli_query($koneksi,"SELECT * FROM pengaduan WHERE id_pengaduan='$id'");
$data = mysqli_fetch_array($query);
 ?>
<div class="card shadow">
	<div class="card-header">
		<a href="?url=verifikasi-pengaduan" class="btn btn-success btn-icon-split">
			<span class="icon text-white-5">
				<i class="fas fa-arrow-left"></i>
				</span>
				<span class="text"> Kembali </span>
			</a>

			<a href="proses.php?id=<?php echo $data ['id_pengaduan'];  ?>" class="btn btn-danger btn-icon-split" onclick="return confirm('yakin akan diproses?')">
			<span class="icon text-white-5">
				<i class="fa fa-check"></i>
				</span>
				<span class="text"> Proses Verifikasi</span>
			</a>
			<a href="tolak.php?id=<?php echo $data ['id_pengaduan'];  ?>" class="btn btn-danger btn-icon-split" onclick="return confirm('yakin akan ditolak?')">
			<span class="icon text-white-5">
				<i class="fa fa-times"></i>
				</span>
				<span class="text">Tolak</span>
			</a>
		</div>
		<div class="card-body">
			Detail Pengaduan
			<form method="post" action="proses-pengaduan.php" enctype="multipart/form-data">
				<div class="form-group">
					<label style="font-size: 14px;">Tanggal Pengaduan</label>
					<input type="text" name="tgl_pengaduan" class="form-control" readonly value="<?= $data['tgl_pengaduan'] ?>">
				</div>
				<div class="form-group">
					<label style="font-size: 14px;">Isi Laporan</label>
					<textarea name="isi_laporan" class="form-control" required readonly><?= $data['isi_laporan']?></textarea>
				</div>
				<div class="form-group">
					<label style="font-size: 14px;">Foto</label>
					<img class="img-thumbnail" src="../foto/<?= $data['foto']?>" width="300">
				</div>
				</form>
		</div>
	</div>
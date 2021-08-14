<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * from gaji WHERE nik='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>
<div class="row">

	<div class="col-md-8">
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Detail Karyawan</h3>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body p-0">
				<table class="table">
					<tbody>
						<tr>
							<td style="width: 150px">
								<b>NIK</b>
							</td>
							<td>:
								<?php echo $data_cek['nik']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Nama Karyawan</b>
							</td>
							<td>:
								<?php echo $data_cek['nama_karyawan']; ?>
							</td>
						</tr>
						<tr>
							<tr>
							<td style="width: 150px">
								<b>Nama Jabatan</b>
							</td>
	
							<td>:
								<?php echo $data_cek['nama_jabatan']; ?>
							</td>
						</tr>
						<tr>
							<tr>
							<td style="width: 150px">
								<b>Gaji Pokok</b>
							</td>
							<td>:
								<?php echo $data_cek['gaji_pokok']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Tanggal Gaji</b>
							</td>
							<td>:
								<?php echo $data_cek['tanggal_gaji']; ?>
							</td>
						</tr>
					</tr>
				</table>
				<div class="card-footer">
					<a href="?page=data-penggajian" class="btn btn-warning">Kembali</a>
				</div>
			</div>
		</div>
	</div>

</div>



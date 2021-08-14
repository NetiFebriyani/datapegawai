<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * from karyawan WHERE nik='".$_GET['kode']."'";
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
								<b>Tempat Lahir</b>
							</td>
							<td>:
								<?php echo $data_cek['tempat_lahir']; ?>
							</td>
						</tr>
						<tr>
							<tr>
							<td style="width: 150px">
								<b>Tanggal Lahir</b>
							</td>
							<td>:
								<?php echo $data_cek['tanggal_lahir']; ?>
							</td>
						</tr>
						<tr>
							<tr>
							<td style="width: 150px">
								<b>Jenis Kelamin</b>
							</td>
							<td>:
								<?php echo $data_cek['jenis_kelamin']; ?>
							</td>
						</tr>
							<td style="width: 150px">
								<b>Status</b>
							</td>
							<td>:
								<?php echo $data_cek['status']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Kode Jabatan</b>
							</td>
							<td>:
								<?php echo $data_cek['kode_jabatan']; ?>
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
								<b>Tanggal Masuk</b>
							</td>
							<td>:
								<?php echo $data_cek['tanggal_masuk']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Alamat</b>
							</td>
							<td>:
								<?php echo $data_cek['alamat']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>No HP</b>
							</td>
							<td>:
								<?php echo $data_cek['no_hp']; ?>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="card-footer">
					<a href="?page=data-karyawan" class="btn btn-warning">Kembali</a>
				</div>
			</div>
		</div>
	</div>
			</div>
		</div>
	</div>

</div>
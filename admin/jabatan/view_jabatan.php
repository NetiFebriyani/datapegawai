<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * from jabatan WHERE kode_jabatan='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>
<div class="row">

	<div class="col-md-8">
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Detail Jabatan</h3>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body p-0">
				<table class="table">
					<tbody>
						<tr>
							<td style="width: 150px">
								<b>Kode_jabatan</b>
							</td>
							<td>:
								<?php echo $data_cek['kode_jabatan']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Nama Jabatan</b>
							</td>
							<td>:
								<?php echo $data_cek['nama_jabatan']; ?>
							</td>
						</tr>
							<tr>
							<td style="width: 150px">
								<b>Gaji Pokok</b>
							</td>
							<td>:
								<?php echo $data_cek['gaji_pokok']; ?>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="card-footer">
					<a href="?page=data-jabatan" class="btn btn-warning">Kembali</a>
				</div>
			</div>
		</div>
	</div>
			</div>
		</div>
	</div>

</div>
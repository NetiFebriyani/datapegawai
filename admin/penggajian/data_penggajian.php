<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			 Data Penggajian
		</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-penggajian" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>NIK</th>
						<th>Nama Karyawan</th>
						<th>Nama Jabatan</th>
						<th>Gaji Pokok</th>
						<th>Tanggal Gaji</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
			  $sql = $koneksi->query("SELECT * from gaji");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td>
							<?php echo $data['nik']; ?>
						</td>
						<td>
							<?php echo $data['nama_karyawan']; ?>
						</td>
						<td>
							<?php echo $data['nama_jabatan']; ?>
						</td>
						<td>
							<?php echo $data['gaji_pokok']; ?>
						</td>
						<td>
							<?php echo $data['tanggal_gaji']; ?>
						</td>
						
						<td>
							<a href="?page=view-penggajian&kode=<?php echo $data['nik']; ?>" title="Detail">
								Detail
							</a>
							<a href="?page=edit-penggajian&kode=<?php echo $data['nik']; ?>" title="Ubah">
								Edit
							</a>
							<a href="?page=del-penggajian&kode=<?php echo $data['nik']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
							 title="Hapus">
								Hapus
						</td>
					</tr>

					<?php
              }
            ?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- /.card-body -->
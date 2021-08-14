<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			 Data Karyawan
		</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-karyawan" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>NIK</th>
						<th>Nama Karyawan</th>
						<th>Tanggal Lahir</th>
						<th>Tempat lahir</th>
						<th>Jenis Kelamin</th>
						<th>Status</th>
						<th>Kode Jabatan</th>
						<th>Gaji Pokok</th>
						<th>Tanggal Masuk</th>
						<th>Alamat</th>
						<th>No HP</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
			  $sql = $koneksi->query("SELECT * from Karyawan");
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
							<?php echo $data['tanggal_lahir']; ?>
						</td>
						<td>
							<?php echo $data['tempat_lahir']; ?>
						</td>
						<td>
							<?php echo $data['jenis_kelamin']; ?>
						</td>
						<td>
							<?php echo $data['status']; ?>
						</td>
						<td>
							<?php echo $data['kode_jabatan']; ?>
						</td>
						<td>
							<?php echo $data['gaji_pokok']; ?>
						</td>
						<td>
							<?php echo $data['tanggal_masuk']; ?>
						</td>
						<td>
							<?php echo $data['alamat']; ?>
						</td>
						<td>
							<?php echo $data['no_hp']; ?>
						</td>

						<td>
							<a href="?page=view-karyawan&kode=<?php echo $data['nik']; ?>" title="Detail">
								Detail 							
							</a>
							<a href="?page=edit-karyawan&kode=<?php echo $data['nik']; ?>" title="Ubah">
								Edit
							</a>
							<a href="?page=del-karyawan&kode=<?php echo $data['nik']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
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
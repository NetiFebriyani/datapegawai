<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			Data Jabatan
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-jabatan" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Kode Jabatan</th>
						<th>Nama Jabatan</th>
						<th>Gaji Pokok</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
			  $sql = $koneksi->query("SELECT * from jabatan");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td>
							<?php echo $data['kode_jabatan']; ?>
						</td>
						<td>
							<?php echo $data['nama_jabatan']; ?>
						</td>
						<td>
							<?php echo $data['gaji_pokok']; ?>
						</td>
						<td>
							<a href="?page=view-jabatan&kode=<?php echo $data['kode_jabatan']; ?>" title="detail"> Detail
							</a>
							<a href="?page=edit-jabatan&kode=<?php echo $data['kode_jabatan']; ?>" title="edit"> Edit
								
							</a>
							<a href="?page=del-jabatan&kode=<?php echo $data['kode_jabatan']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
							 title="Hapus"> Hapus
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
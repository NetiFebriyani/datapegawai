<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			Data User
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-pengguna" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Pengguna</th>
						<th>Username</th>
						<th>Level</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
              $sql = $koneksi->query("select * from pengguna");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td>
							<?php echo $data['nama_pengguna']; ?>
						</td>
						<td>
							<?php echo $data['username']; ?>
						</td>
						<td>
							<?php echo $data['level']; ?>
						</td>
						<td>
							<a href="?page=edit-pengguna&kode=<?php echo $data['id_pengguna']; ?>" title="Ubah"> Ubah
								
							</a>
							<a href="?page=del-pengguna&kode=<?php echo $data['id_pengguna']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
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
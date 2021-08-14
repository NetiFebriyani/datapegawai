<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIK</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nik" name="nik" placeholder="" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama karyawan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan" placeholder="">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Gaji Pokok</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="gaji_pokok" name="gaji_pokok" placeholder="">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label"> Nama Jabatan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama_jabatan" name="nama_jabatan" placeholder="">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal Gaji</label>
				<div class="col-sm-6">
					<input type="date" class="form-control" id="tanggal_gaji" name="tanggal_gaji" placeholder="">
				</div>
			</div>

			

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-pengguna" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

    if (isset ($_POST['Simpan'])){
    //mulai proses simpan data
        $sql_simpan = "INSERT INTO gaji (nik,nama_karyawan,nama_jabatan,gaji_pokok,tanggal_gaji) VALUES (
        '".$_POST['nik']."',
        '".$_POST['nama_karyawan']."',
        '".$_POST['nama_jabatan']."',
        '".$_POST['gaji_pokok']."',
        '".$_POST['tanggal_gaji']."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-penggajian';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-penggajian';
          }
      })</script>";
    }}
     //selesai proses simpan data

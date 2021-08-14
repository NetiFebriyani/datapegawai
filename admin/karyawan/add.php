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
					<input type="text" class="form-control" id="NIK" name="NIK" placeholder="" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Karyawan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan" placeholder="">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal Lahir</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tempat Lahir</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis kelamin</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Status</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kode Jabatan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="kode_jabatan" name="kode_jabatan" placeholder="">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Gaji Pokok</label>
				<div class="col-sm-6">
					<input type="bigint" class="form-control" id="gaji_pokok" name="gaji_pokok" placeholder="">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="alamat" name="alamat" placeholder="">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">No HP</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="">
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-karyawan" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>


<?php

    if (isset ($_POST['Simpan'])){
    //mulai proses simpan data
        $sql_simpan = "INSERT INTO karyawan (nik, nama_karyawan,tanggal_lahir,tempat_lahir,jenis_kelamin,status,kode_jabatan,gaji_pokok, tanggal_masuk, alamat,no_hp) VALUES (
       		'".$_POST['nik']."',
       		'".$_POST['nama_karyawan']."',
       		'".$_POST['tanggal_lahir']."',
       		'".$_POST['tempat_lahir']."',
       		'".$_POST['jenis_kelamin']."',
       		'".$_POST['status']."',
       		'".$_POST['kode_jabatan']."',
       		'".$_POST['gaji_pokok']."',
       		'".$_POST['tanggal_masuk']."',
       		'".$_POST['alamat']."',
       		'".$_POST['no_hp']."',)";

       if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-karyawan';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-karyawan';
          }
      })</script>";
    }}
     //selesai proses simpan data

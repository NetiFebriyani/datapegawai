<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM karyawan WHERE nik='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Edit Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">NIK</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="nik" name="nik" value="<?php echo $data_cek['nik']; ?>"
						 readonly/>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Nama Karyawan</label>
					<div class ="col-sm-6">
						<input type=" text" class="form-control" id="nama_karyawan" name="nama_karyawan"
						value ="<?php echo $data_cek['nama_karyawan']; ?>";
						/>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Tanggal lahir</label>
					<div class="col-sm-6">
						<input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $data_cek['tanggal_lahir']; ?>";
						/>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Tempat Lahir</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="" name="tempat_lahir" value="<?php echo $data_cek['tempat_lahir']; ?>";
						/>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Jenis Kelamin </label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?php echo $data_cek['jenis_kelamin']; ?>";
						/>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Status</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="status" name="status" value="<?php echo $data_cek['status']; ?>";
						/>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Kode Jabatan</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="kode_jabatan" name="kode_jabatan" value ="<?php echo $data_cek['kode_jabatan']; ?>";
						/>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Gaji Pokok</label>
					<div class="col-sm-6">
						<input type="bigint" class="form-control" id="gaji_pokok" name="gaji_pokok" value ="<?php echo $data_cek['gaji_pokok']; ?>";
						/>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Tanggal Masuk</label>
					<div class="col-sm-6">
						<input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk" value="<?php echo $data_cek['tanggal_masuk']; ?>";
						/>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Alamat</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $data_cek['alamat']; ?>";
						/>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">No HP</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="no_hp" name="no_hp" value="<?php echo $data_cek['no_hp']; ?>";
						/>
					</div>
				</div>

		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-karyawan" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php


	
if (isset ($_POST['Ubah'])){

    if(!empty($sumber)){

        $sql_ubah = "UPDATE karyawan SET
					
            WHERE nik='".$_POST['nik']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);

    }elseif(empty($sumber)){
		$sql_ubah = "UPDATE karyawan SET
		nik='".$_POST['nik']."',
		nama_karyawan='".$_POST['nama_karyawan']."',
		tanggal_lahir='".$_POST['tanggal_lahir']."',
		tempat_lahir='".$_POST['tempat_lahir']."',
		jenis_kelamin='".$_POST['jenis_kelamin']."',
		status='".$_POST['status']."',
		kode_jabatan='".$_POST['kode_jabatan']."',
		gaji_pokok='".$_POST['gaji_pokok']."',
		tanggal_masuk='".$_POST['tanggal_masuk']."',
		alamat='".$_POST['alamat']."',
		no_hp='".$_POST['no_hp']."'		
		WHERE nik='".$_POST['nik']."'";
	$query_ubah = mysqli_query($koneksi, $sql_ubah);
        }

    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-karyawan';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-karyawan';
            }
        })</script>";
    }
}


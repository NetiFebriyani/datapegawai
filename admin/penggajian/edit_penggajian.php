<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM gaji WHERE nik='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			Ubah Data
		</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<input type='hidden' class="form-control" name="nik" value="<?php echo $data_cek['nik']; ?>"
			 readonly/>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIK</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nik" name="nik" value="<?php echo $data_cek['nik']; ?>"
					/>
				</div>
			</div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama Karyawan</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan" value="<?php echo $data_cek['nama_karyawan']; ?>"
                    />
                </div>
            </div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Jabatan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama_jabatan" name="nama_jabatan" value="<?php echo $data_cek['nama_jabatan']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Gaji Pokok</label>
				<div class="col-sm-6">
					<input type="bigint" class="form-control" id="gaji_pokok" name="gaji_pokok" value="<?php echo $data_cek['gaji_pokok']; ?>"
                    />
				</div>

			</div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tanggal Gaji</label>
                <div class="col-sm-6">
                    <input type="bigint" class="form-control" id="tanggal_gaji" name="tanggal_gaji" value="<?php echo $data_cek['tanggal_gaji']; ?>"
                </div>
            </div>
        </div>

        </div>
		</div>
		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-penggajian" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>



<?php

    if (isset ($_POST['Ubah'])){
    $sql_ubah = "UPDATE gaji SET
        nik='".$_POST['nik']."',
        nama_karyawan='".$_POST['nama_karyawan']."',
        nama_jabatan='".$_POST['nama_jabatan']."',
        gaji_pokok='".$_POST['gaji_pokok']."',
        tanggal_gaji='".$_POST['tanggal_gaji']."'
        WHERE nik='".$_POST['nik']."'";
    $query_ubah = mysqli_query($koneksi, $sql_ubah);
    mysqli_close($koneksi);

    if ($query_ubah) {
        echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-penggajian';
        }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-penggajian';
        }
      })</script>";
    }}
?>

<script type="text/javascript">
    function change()
    {
    var x = document.getElementById('pass').type;

    if (x == 'password')
    {
        document.getElementById('pass').type = 'text';
        document.getElementById('mybutton').innerHTML;
    }
    else
    {
        document.getElementById('pass').type = 'password';
        document.getElementById('mybutton').innerHTML;
    }
    }
</script>

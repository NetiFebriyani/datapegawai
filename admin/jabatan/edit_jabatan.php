<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM jabatan WHERE kode_jabatan='".$_GET['kode']."'";
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

			<input type='hidden' class="form-control" name="kode_jabatan" value="<?php echo $data_cek['kode_jabatan']; ?>"
			 readonly/>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kode Jabatan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="kode_jabatan" name="kode_jabatan" value="<?php echo $data_cek['kode_jabatan']; ?>"
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
				</div>
			</div>
        </div>

        </div>
		</div>
		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-jabatan" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>



<?php

    if (isset ($_POST['Ubah'])){
    $sql_ubah = "UPDATE jabatan SET
        kode_jabatan='".$_POST['kode_jabatan']."',
        nama_jabatan='".$_POST['nama_jabatan']."',
        gaji_pokok='".$_POST['gaji_pokok']."'
        WHERE kode_jabatan='".$_POST['kode_jabatan']."'";
    $query_ubah = mysqli_query($koneksi, $sql_ubah);
    mysqli_close($koneksi);

    if ($query_ubah) {
        echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-jabatan';
        }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-jabatan';
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
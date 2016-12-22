<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Data Siswa Baru</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aplikasi CRUD Data Siswa Baru dengan Codeigniter dan Bootstrap">
    <link href="<?php echo base_url(); ?>asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/docs.css" rel="stylesheet">
	
    <script src="<?php echo base_url(); ?>asset/js/jquery-latest.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/application.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/bootstrap-tooltip.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/colorbox/colorbox.css" />
	<script src="<?php echo base_url(); ?>asset/colorbox/jquery.colorbox.js"></script>
	<script>
		  $(document).ready(function(){
			  $(".medium-box").colorbox({rel:'group', iframe:true, width:"90%", height:"90%"});	
		  });
	</script>
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="">SMK PGRI 2 GIRI</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="<?php echo base_url(); ?>"><i class="icon-home icon-white"></i> Beranda</a></li>
            </ul>
            <div class="btn-group pull-right">
			  <button class="btn btn-primary"><i class="icon-tasks icon-white"></i> Menu Utama</button>
			  <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
				<span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu">
				<li><a href="<?php echo base_url().'index.php/welcome/add' ?>"><i class="icon-user"></i> Tambah Siswa Baru</a></li>
			  </ul>
			</div>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <div class="container">
	
	<div class="well">
	  <div class="row">
		<div class="span">
		  <h3>Data Siswa Baru</h3>
		  
		</div>
	  </div>
	</div>

  <div class="well">  
		<section>
			<form action="<?php echo base_url().'index.php/welcome/simpan' ?>" class="form-horizontal" method="post" accept-charset="utf-8">
			<div class="control-group">
		  	<legend>Olah Data Siswa Baru (<?php echo $status; ?> Data)</legend>
			<label class="control-label" for="nama_unit_kerja">Nama</label>
			<div class="controls">
			  <input type="text" class="span" name="nama" id="nama" value="<?php echo $nama; ?>" placeholder="Nama">
			</div>
		  </div>
		  <div class="control-group">
			<label class="control-label" for="eselon">Asal Sekolah</label>
			<div class="controls">
			  <input type="text" class="span" name="asal_sekolah" id="asal_sekolah" value="<?php echo $asal_sekolah; ?>" placeholder="Asal Sekolah">
			</div>
		  </div>
		  <div class="control-group">
			<label class="control-label" for="parent_unit">Alamat</label>
			<div class="controls">
			  <input type="text" class="span" name="alamat" id="alamat" value="<?php echo $alamat; ?>" placeholder="Alamat">
			</div>
		  <div class="control-group"><br/>
			<label class="control-label" for="parent_unit">Telepon</label>
			<div class="controls">
			  <input type="text" class="span" name="telepon" id="telepon" value="<?php echo $telepon; ?>" placeholder="Telepon">
			</div>
		  <div class="control-group"><br/>
			<label class="control-label" for="parent_unit">Jurusan</label>
			<div class="controls">
			  <input type="text" class="span" name="jurusan" id="jurusan" value="<?php echo $jurusan; ?>" placeholder="Jurusan">
			</div>
		  </div>
		  <input type="hidden" name="status" value="<?php echo $status; ?>">
		  <input type="hidden" name="kode" value="<?php echo $id; ?>">
		  <div class="control-group">
			<div class="controls">
			  <button type="submit" class="btn btn-primary">Simpan Data</button>
			</div>
		  </div>
		</form>	
		</section>
  </div>
      <footer class="well">
        <p>
        	SMK PGRI 2 GIRI <br />
        </p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>

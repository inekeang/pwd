<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>"/>
<?php $this->load->view('header');?> 
<div class="blank">
    <div class="blank-page">
	 
		<h2 style="margin-top:0px">Hallo...</h2>
        <p><br /></p>
		<p align="justify">Selamat datang di website kami. Website ini kami buat untuk memenuhi tugas akhir Praktikum Web Desain & Pemrograman Web yang kami ambil di semester 6. Website ini berisi CRUD data Mahasiswa yang dibuat dengan menggunakan CodeIgniter dan database MySQL. Di dalamnya terdapat menu </p>
		<center>
			<ul>
				<li><a href="<?php echo base_url('index.php/Mahasiswa/create') ?>">Tambah Mahasiswa</a></li> 
				<li><a href="<?php echo base_url('index.php/Mahasiswa') ?>">List Mahasiswa</a></li>
				<li><a href="<?php echo base_url('index.php/Welcome/author') ?>">Profil Kelompok</a></li>
			</ul>
		</center>
		<p align="justify"><br />Selamat menjelajah.</p>

	</div>
</div>
<?php $this->load->view('footer');?>
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>"/>
<?php $this->load->view('header');?> 
<div class="blank">
    <div class="blank-page">

        <h2 style="margin-top:0px">Mahasiswa Read</h2>
        <p><br /></p>
        <table class="table table-bordered" style="margin-bottom: 6px">
    	    <tr><th width="20%">Nama</th><td width="30%"><?php echo $nama; ?></td></tr>
            <tr><th>NIM</th><td><?php echo $nim; ?></td></tr>
    	    <tr><th>Jenis Kelamin</th><td><?php echo $jenis_kelamin; ?></td></tr>
    	    <tr><th>Prodi</th><td><?php echo $prodi; ?></td></tr>
    	    <tr><th>Alamat</th><td><?php echo $alamat; ?></td></tr>
            <tr><td colspan="2" align="center"><a href="<?php echo site_url('mahasiswa') ?>" class="btn btn-default"><b>Cancel</b></a></td></tr>
    	</table>
   
   </div>
</div>
<?php $this->load->view('footer');?>
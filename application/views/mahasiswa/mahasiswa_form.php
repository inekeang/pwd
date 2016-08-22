<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>"/>
<?php $this->load->view('header');?> 
<div class="blank">
    <div class="blank-page">

        <h2 id="forms-example" class=""><?php echo $button ?> Mahasiswa </h2>
        <p><br /></p>
            <form action="<?php echo $action; ?>" method="post" class="form-horizontal">
                <div class="form-group">
                    <label class="col-sm-2 control-label">NIM</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="nim" id="nim" placeholder="NIM" value="<?php echo $nim; ?>" required />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" required />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Jenis Kelamin</label>
                    <div class="col-sm-8">
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Prodi</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="prodi" id="prodi" placeholder="Prodi" value="<?php echo $prodi; ?>" required />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?php echo $alamat; ?>" required />
                    </div>
                </div>
                <div><br /></div>
                <div class="form-group" align="center">
                    <button class="btn-primary btn"><?php echo $button ?></button>
                    <a href="<?php echo site_url('mahasiswa') ?>" class="btn btn-default">Cancel</a>
                </div>
        	</form>

    </div>
</div>
<?php $this->load->view('footer');?>
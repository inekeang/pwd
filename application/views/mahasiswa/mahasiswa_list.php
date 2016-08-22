<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>"/>
<?php $this->load->view('header');?> 
<div class="blank">
    <div class="blank-page">

        <h2 style="margin-top:0px">Daftar Mahasiswa</h2>
        <p><br /></p>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('mahasiswa/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('mahasiswa'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
                <?php echo anchor(site_url('mahasiswa/create'),'Create', 'class="btn btn-primary"'); ?>
                <button onclick="window.print()" class="btn btn-primary">Cetak Halaman Web</button>
        </div>
        <div><br /><br /></div>

        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>NO</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Prodi</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr><?php
            $start=0;
            foreach ($mahasiswa_data as $mahasiswa)
            {
                ?>
                <tr>
                    <td align="center"><?php echo ++$start ?></td>
                    <td><?php echo $mahasiswa->nim ?></td>
                    <td><?php echo $mahasiswa->nama ?></td>
                    <td><?php echo $mahasiswa->jenis_kelamin ?></td>
                    <td><?php echo $mahasiswa->prodi ?></td>
                    <td><?php echo $mahasiswa->alamat ?></td>
                    <td style="text-align:center" width="200px">
                        <?php 
                        echo anchor(site_url('mahasiswa/read/'.$mahasiswa->nim),'Read'); 
                        echo ' | ';
                        echo anchor(site_url('mahasiswa/update/'.$mahasiswa->nim),'Update'); 
                        echo ' | '; 
                        echo anchor(site_url('mahasiswa/delete/'.$mahasiswa->nim),'Delete','onclick="javasciprt: return confirm(\'Yakin Ingin Menghapus ?\')"'); 
                        ?>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                Total Record : <?php echo $total_rows ?>
            </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>

    </div>
</div>
<?php $this->load->view('footer');?>
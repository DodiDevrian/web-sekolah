<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading text-right">
            <a href="<?= base_url() ?>galeri/add" type="button" class="btn btn-success"><i class="fa fa-plus"></i> Add</a>
        </div>
        <div class="panel-body">
            <?php
            if ($this->session->flashdata('pesan')) {
                echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                echo $this->session->flashdata('pesan');
                echo '</div>';
            }
            ?>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Album Galeri</th>
                        <th>Sampul</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($galeri as $key => $value) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value->nama_galeri; ?></td>
                            <td class="text-center">
                                <img src="<?= base_url('sampul/' . $value->sampul) ?>" width="150" alt="Tidak Ada Foto"><br>
                                <i class="fa fa-image" style="margin-top: 15px; margin-bottom: 5px;">&nbsp;<?= $value->jml_foto ?> Foto</i><br>
                                <a href="<?= base_url('galeri/add_foto/' . $value->id_galeri) ?>" class="btn btn-success btn-sm"><i class="fa fa-folder-open"></i> Deatil Foto</a>
                            </td>
                            <td>
                                <a href="<?= base_url('galeri/edit/' . $value->id_galeri) ?>" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                <a href="<?= base_url('galeri/delete/' . $value->id_galeri) ?>" onclick="return confirm('Apakah Yakin Ingin Menghapus Data ?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
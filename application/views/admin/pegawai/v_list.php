<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading text-right">
            <a href="<?= base_url() ?>pegawai/add" type="button" class="btn btn-success"><i class="fa fa-plus"></i> Add</a>
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
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Foto</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($pegawai as $key => $value) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value->nip; ?></td>
                            <td><?= $value->nama; ?></td>
                            <td><?= $value->jabatan; ?></td>
                            <td><img src="<?= base_url('foto_pegawai/') . $value->foto_pegawai ?>" width="50"></td>
                            <td>
                                <a href="<?= base_url('pegawai/edit/' . $value->id_pegawai) ?>" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                <a href="<?= base_url('pegawai/delete/' . $value->id_pegawai) ?>" onclick="return confirm('Apakah Yakin Ingin Menghapus Data ?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
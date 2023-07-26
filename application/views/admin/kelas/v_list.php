<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading text-right">
            <a href="<?= base_url() ?>kelas/add" type="button" class="btn btn-success"><i class="fa fa-plus"></i> Add</a>
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
                        <th>Kelas</th>
                        <th>Angkatan</th>
                        <th>Slogan</th>
                        <th>Logo</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($kelas as $key => $value) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value->kelas; ?></td>
                            <td><?= $value->angkatan; ?></td>
                            <td><?= $value->moto; ?></td>
                            <td><img src="<?= base_url('logo/') . $value->logo ?>" width="50"></td>
                            <td>
                                <a href="<?= base_url('kelas/siswa/' . $value->id_kelas) ?>" class="btn btn-primary btn-sm"><i class="fa fa-users"></i> Lihat Siswa</a>
                                <a href="<?= base_url('kelas/edit/' . $value->id_kelas) ?>" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                <a href="<?= base_url('kelas/delete/' . $value->id_kelas) ?>" onclick="return confirm('Apakah Yakin Ingin Menghapus Data ?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
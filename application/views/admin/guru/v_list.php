<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading text-right">
            <a href="<?= base_url() ?>guru/add" type="button" class="btn btn-success"><i class="fa fa-plus"></i> Add</a>
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
            <table class="table table-striped table-bordered table-hover" id="example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Mata Pelajaran</th>
                        <th>Foto</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($guru as $key => $value) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value->nip; ?></td>
                            <td><?= $value->nama_guru; ?></td>
                            <td><?= $value->nama_mapel; ?></td>
                            <td><img src="<?= base_url('foto_guru/') . $value->foto_guru ?>" width="50"></td>
                            <td>
                                <a href="<?= base_url('guru/edit/' . $value->id_guru) ?>" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                <a href="<?= base_url('guru/delete/' . $value->id_guru) ?>" onclick="return confirm('Apakah Yakin Ingin Menghapus Data ?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
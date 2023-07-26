<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<link href="<?= base_url() ?>/template/back-end/css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="<?= base_url() ?>/template/back-end/css/metisMenu.min.css" rel="stylesheet">

<!-- DataTables CSS -->
<link href="<?= base_url() ?>/template/back-end/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

<!-- DataTables Responsive CSS -->
<link href="<?= base_url() ?>/template/back-end/css/dataTables/dataTables.responsive.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="<?= base_url() ?>/template/back-end/css/startmin.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="<?= base_url() ?>/template/back-end/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading text-right">
            <a href="<?= base_url() ?>siswa/add" type="button" class="btn btn-success"><i class="fa fa-plus"></i> Add</a>
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
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Tempat Tanggal Lahir</th>
                        <th>Kelas</th>
                        <th>Angkatan</th>
                        <th>Foto</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($siswa as $key => $value) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value->nis; ?></td>
                            <td><?= $value->nama_siswa; ?></td>
                            <td><?= $value->tempat_lahir; ?>, <?= $value->tgl_lahir; ?></td>
                            <td><?= $value->kelas; ?></td>
                            <td><?= $value->angkatan; ?></td>
                            <td><img src="<?= base_url('foto_siswa/') . $value->foto_siswa; ?>" width="50"></td>
                            <td>
                                <a href="<?= base_url('siswa/edit/' . $value->id_siswa) ?>" class="btn btn-warning btn-sm"><i class="fa fa-pencil" data-toggle="modal" data-target="#myModal<?= $value->id_siswa; ?>"></i></a>
                                <a href="<?= base_url('siswa/delete/' . $value->id_siswa) ?>" onclick="return confirm('Apakah Yakin Ingin Menghapus Data ?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading text-right">
            <a href="<?= base_url() ?>berita/add" type="button" class="btn btn-success"><i class="fa fa-plus"></i> Add</a>
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
                        <th>Judul Berita</th>
                        <th>Tanggal Posting</th>
                        <th>Penulis</th>
                        <th>Gambar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($berita as $key => $value) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value->judul_berita; ?></td>
                            <td><?= $value->tgl_berita; ?></td>
                            <td><?= $value->nama_user; ?></td>
                            <td><img src="https://drive.google.com/uc?export=view&id=<?= $value->gambar_berita ?>" width="50"></td>
                            <td>
                                <a href="<?= base_url('berita/edit/' . $value->id_berita) ?>" class="btn btn-warning btn-sm"><i class="fa fa-pencil" data-toggle="modal" data-target="#myModal<?= $value->id_berita; ?>"></i></a>
                                <a href="<?= base_url('berita/delete/' . $value->id_berita) ?>" onclick="return confirm('Apakah Yakin Ingin Menghapus Data ?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
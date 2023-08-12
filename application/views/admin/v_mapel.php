<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading text-right">
            <button type="button" class="btn btn-success" style="margin-bottom: 15px;" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Add</button>
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
                        <th style="width: 50px;">No</th>
                        <th>Mata Pelajaran</th>
                        <th style="width: 150px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($mapel as $key => $value) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value->nama_mapel; ?></td>
                            <td>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal<?= $value->id_mapel; ?>"><i class="fa fa-pencil"></i> Edit</button>
                                <a href="<?= base_url('mapel/delete/' . $value->id_mapel) ?>" onclick="return confirm('Apakah Yakin Ingin Menghapus Data ?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>&nbsp;&nbsp;Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Tambah Data -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Tambah Data Mata Pelajaran</h4>
            </div>
            <div class="modal-body">
                <?php echo form_open('mapel/add'); ?>
                <div class="form-group">
                    <label>Nama Mata Pelajaran</label>
                    <input class="form-control" type="text" name="nama_mapel" placeholder="Masukkan Nama Mata Pelajaran" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan Data</button>
            </div>
            <?php echo form_close(); ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Modal Edit Data -->
<?php foreach ($mapel as $key => $value) { ?>
    <div class="modal fade" id="myModal<?= $value->id_mapel; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Tambah Data Mata Pelajaran</h4>
                </div>
                <div class="modal-body">
                    <?php echo form_open('mapel/edit/' . $value->id_mapel); ?>
                    <div class="form-group">
                        <label>Nama Mata Pelajaran</label>
                        <input class="form-control" type="text" name="nama_mapel" value="<?= $value->nama_mapel; ?>" placeholder="Masukkan Nama Mata Pelajaran" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>
                <?php echo form_close(); ?>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>
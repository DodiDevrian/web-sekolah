<div class="col-lg-12" style="margin-top: 20px;">
    <div class="panel panel-primary">
        <div class="panel-body">
            <?php
            if (isset($error_upload)) {
                echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '</div>';
            }

            echo form_open_multipart('admin/edit/' . $agenda->id_agenda);
            ?>

            <div class="form-group">
                <label>Nama Agenda</label>
                <input class="form-control" type="text" name="nama_agenda" value="<?= $agenda->nama_agenda ?>" placeholder="Masukkan Judul agenda" required>
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <textarea name="keterangan" class="form-control" cols="30" rows="10" placeholder="Masukkan Keterangan Agenda" required><?= $agenda->keterangan ?></textarea>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tanggal Mulai</label>
                        <input id="tanggal" class="form-control" type="text" name="tgl_mulai" value="<?= $agenda->tgl_mulai ?>" placeholder="Masukkan Tanggal Pelaksanaan" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tanggal Akhir</label>
                        <input id="tanggal2" class="form-control" type="text" name="tgl_akhir" value="<?= $agenda->tgl_akhir ?>" placeholder="Masukkan Tanggal Pelaksanaan" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Link</label>
                <input class="form-control" type="text" name="link" value="<?= $agenda->link ?>">
            </div>

            <div class="form-group">
                <!-- <label>Foto</label> -->
                <input class="form-control" type="hidden" name="foto_agenda" value="<?= $agenda->foto_agenda ?>">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-danger">Bersihkan</button>
            </div>

            <?php echo form_close(); ?>
        </div>
    </div>
</div>
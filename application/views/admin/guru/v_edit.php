<div class="col-lg-12" style="margin-top: 20px;">
    <div class="panel panel-primary">
        <div class="panel-body">
            <?php

            echo validation_errors('<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div>');

            if (isset($error_upload)) {
                echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '</div>';
            }

            echo form_open_multipart('guru/edit/' . $guru->id_guru);
            ?>
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input class="form-control" type="text" name="nama_guru" value="<?= $guru->nama_guru ?>" placeholder="Masukkan Nama Lengkap Disertai Dengan Gelar" required>
            </div>

            <div class="form-group">
                <label>NIP</label>
                <input class="form-control" type="text" name="nip" value="<?= $guru->nip ?>" placeholder="Masukkan NIP" required>
            </div>


            <div class="form-group ">
                <label>Mata Pelajaran</label>
                <select name="id_mapel" id="single-select">
                    <option value="<?= $guru->id_mapel ?>"><?= $guru->nama_mapel ?></option>
                    <?php foreach ($mapel as $key => $value) { ?>
                        <option value="<?= $value->id_mapel;  ?>"><?= $value->nama_mapel;  ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Ubah Foto</label>
                                <input class="form-control" type="file" name="foto_guru" placeholder="Upload Foto Terbaru">
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="form-group">
                                <label>Foto Saat Ini</label><br>
                                <img src="<?= base_url('foto_guru/') . $guru->foto_guru ?>" width="100">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6"></div>

            </div>

            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-danger">Bersihkan</button>
            </div>

            <?php echo form_close(); ?>
        </div>
    </div>
</div>
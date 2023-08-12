<div class="col-lg-12" style="margin-top: 20px;">
    <div class="panel panel-primary">
        <div class="panel-body">
            <?php
            if (isset($error_upload)) {
                echo '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '</div>';
            }

            echo form_open_multipart('pegawai/edit/' . $pegawai->id_pegawai);
            ?>
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input class="form-control" type="text" name="nama" value="<?= $pegawai->nama ?> " placeholder=" Masukkan Nama Lengkap Disertai Dengan Gelar" required>
            </div>

            <div class="form-group">
                <label>NIP</label>
                <input class="form-control" type="text" name="nip" value="<?= $pegawai->nip ?>" placeholder="Masukkan NIP" required>
            </div>

            <div class="form-group">
                <label>Jabatan</label>
                <select name="jabatan" id="single-select">
                    <option value="<?= $pegawai->jabatan ?>"><?= $pegawai->jabatan ?></option>
                    <option value="Kepala Madrasah">Kepala Madrasah</option>
                    <option value="Wakil Kepala Bidang Kurikulum">Wakil Kepala Bidang Kurikulum</option>
                    <option value="Wakil Kepala Bidang Kesiswaan">Wakil Kepala Bidang Kesiswaan</option>
                    <option value="Wakil Kepala Bidang Sarana Prasarana">Wakil Kepala Bidang Sarana Prasarana</option>
                    <option value="Wakil Kepala Bidang Hubungan Masyarakat">Wakil Kepala Bidang Hubungan Masyarakat</option>
                </select>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Ubah Foto</label>
                                <input class="form-control" type="file" name="foto_pegawai" placeholder="Upload Foto Terbaru">
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="form-group">
                                <label>Foto Saat Ini</label><br>
                                <img src="<?= base_url('foto_pegawai/') . $pegawai->foto_pegawai ?>" width="100">
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
<div class="col-lg-12" style="margin-top: 20px;">
    <div class="panel panel-primary">
        <div class="panel-body">
            <?php
            if (isset($error_upload)) {
                echo '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '</div>';
            }

            echo form_open_multipart('pegawai/add');
            ?>
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input class="form-control" type="text" name="nama" placeholder="Masukkan Nama Lengkap Disertai Dengan Gelar" required>
            </div>

            <div class="form-group">
                <label>NIP</label>
                <input class="form-control" type="text" name="nip" placeholder="Masukkan NIP" required>
            </div>

            <div class="form-group">
                <label>Jabatan</label>
                <select name="jabatan" id="single-select">
                    <option value="" disabled selected>--Pilih Jabatan--</option>
                    <option value="Kepala Madrasah">Kepala Madrasah</option>
                    <option value="Wakil Kepala Bidang Kurikulum">Wakil Kepala Bidang Kurikulum</option>
                    <option value="Wakil Kepala Bidang Kesiswaan">Wakil Kepala Bidang Kesiswaan</option>
                    <option value="Wakil Kepala Bidang Sarana Prasarana">Wakil Kepala Bidang Sarana Prasarana</option>
                    <option value="Wakil Kepala Bidang Hubungan Masyarakat">Wakil Kepala Bidang Hubungan Masyarakat</option>
                </select>
            </div>

            <div class="form-group">
                <label>Foto Guru</label>
                <input class="form-control" type="file" name="foto_pegawai" required>
            </div>

            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-danger">Bersihkan</button>
            </div>

            <?php echo form_close(); ?>
        </div>
    </div>
</div>
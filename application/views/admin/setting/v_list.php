<?php foreach ($setting as $key => $value) { ?>

    <div class="row">
        <div class="col-md-3 text-center">
            <p>Kepala Sekolah</p>
            <img src="<?= base_url('foto_kepsek/') . $value->foto_kepsek ?>" alt=""><br>
        </div>

        <div class="col-md-8">
            <div class="form-group">
                <label>Nama Kepala Sekolah :</label>
                <p><?= $value->nama_kepsek ?></p>
            </div>
            <div class="form-group">
                <label>NIP :</label>
                <p><?= $value->nip_kepsek ?></p>
            </div>
            <div class="form-group">
                <label>Alamat Sekolah</label>
                <p><?= $value->alamat ?></p>
            </div>
            <div class="form-group">
                <label>Nomor Telepon</label>
                <p><?= $value->no_tel ?></p>
            </div>
            <div class="form-group">
                <label>Email</label>
                <p><?= $value->email ?></p>
            </div>
        </div>

        <div class="col-md-1">
            <a href="<?= base_url('setting/edit/' . $value->id_setting) ?>" class="btn btn-primary">
                <li class="fa fa-pencil-square-o"> Edit</li>
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label>Sejarah</label>
                <p><?= $value->sejarah ?></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label>Visi Misi</label>
                <p><?= $value->visi_misi ?></p>
            </div>
        </div>
    </div>

<?php } ?>
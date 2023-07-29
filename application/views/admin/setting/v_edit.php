<script src="<?= base_url() ?>/ckeditor/ckeditor.js"></script>
<script src="<?= base_url() ?>/ckeditor/sample.js"></script>
<link rel="stylesheet" href="<?= base_url() ?>/ckeditor/samples.css">
<link rel="stylesheet" href="<?= base_url() ?>/ckeditor/neo.css">

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

<?php
if (isset($error_upload)) {
    echo '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '</div>';
}

echo form_open_multipart('setting/edit');
?>

<div class="row">
    <div class="col-md-3 text-center">
        <p>Kepala Sekolah</p>
        <img src="<?= base_url('foto_kepsek/') . $setting->foto_kepsek ?>" alt=""><br>

        <div class="form-group">
            <label>Ubah Foto</label>
            <input class="form-control" type="file" name="foto_kepsek" placeholder="Masukkan Tempat Lahir">
        </div>
    </div>
    <div class="col-md-9">
        <div class="form-group">
            <label>Nama Kepala Sekolah</label>
            <input class="form-control" type="text" name="nama_kepsek" value="<?= $setting->nama_kepsek ?>" placeholder="Masukkan Nama Lengkap Kepala Sekolah Beserta Dengan Gelar" required>
        </div>
        <div class="form-group">
            <label>NIP</label>
            <input class="form-control" type="text" name="nip_kepsek" value="<?= $setting->nip_kepsek ?>" placeholder="Masukkan Nama Lengkap Kepala Sekolah Beserta Dengan Gelar" required>
        </div>
        <div class="form-group">
            <label>Alamat Sekolah</label>
            <input class="form-control" type="text" name="alamat" value="<?= $setting->alamat ?>" placeholder="Masukkan Nama Lengkap Kepala Sekolah Beserta Dengan Gelar" required>
        </div>
        <div class="form-group">
            <label>Nomor Telepon</label>
            <input class="form-control" type="text" name="no_tel" value="<?= $setting->no_tel ?>" placeholder="Masukkan Nama Lengkap Kepala Sekolah Beserta Dengan Gelar" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input class="form-control" type="text" name="email" value="<?= $setting->email ?>" placeholder="Masukkan Nama Lengkap Kepala Sekolah Beserta Dengan Gelar" required>
        </div>
    </div>
</div>


<div class="form-group">
    <label>Edit Sejarah</label>
    <textarea name="sejarah" class="form-control" id="editor" height="500" required><?= $setting->sejarah ?></textarea>
</div>

<div class="form-group">
    <label>Edit Visi Misi</label>
    <textarea name="sejarah" class="form-control" id="editor2" height="500" required><?= $setting->visi_misi ?></textarea>
</div>


<button type="submit" class="btn btn-primary">Simpan</button>


<?php echo form_close(); ?>

<script src="https://cdn.ckeditor.com/ckeditor5/38.1.1/classic/ckeditor.js"></script>

<script>
    ClassicEditor
        .create(document.querySelector('#editor2'))
        .catch(error => {
            console.error(error);
        });
</script>

<script>
    initSample();
</script>
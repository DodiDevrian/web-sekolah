<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<link href="<?= base_url() ?>template/back-end/css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="<?= base_url() ?>template/back-end/css/metisMenu.min.css" rel="stylesheet">

<!-- DataTables CSS -->
<link href="<?= base_url() ?>template/back-end/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

<!-- DataTables Responsive CSS -->
<link href="<?= base_url() ?>template/back-end/css/dataTables/dataTables.responsive.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="<?= base_url() ?>template/back-end/css/startmin.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="<?= base_url() ?>template/back-end/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Tambah Data Siswa
        </div>
        <div class="panel-body">
            <?php
            if (isset($error_upload)) {
                echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '</div>';
            }

            echo form_open_multipart('kelas/edit/' . $kelas->id_kelas); ?>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group search_select_box">
                        <label>Kelas</label>
                        <select name="kelas" class="form-control" data-live-search="true">
                            <option value="<?= $kelas->kelas ?>"><?= $kelas->kelas ?></option>
                            <option value="10 IPA 1">10 IPA 1</option>
                            <option value="10 IPA 2">10 IPA 2</option>
                            <option value="10 IPA 3">10 IPA 3</option>
                            <option value="10 IPA 4">10 IPA 4</option>
                            <option value="10 IPA 5">10 IPA 5</option>
                            <option value="10 IPS 1">10 IPS 1</option>
                            <option value="10 IPS 2">10 IPS 2</option>
                            <option value="10 IPS 3">10 IPS 3</option>
                            <option value="10 IPS 4">10 IPS 4</option>
                            <option value="10 IPS 5">10 IPS 5</option>
                            <option value="11 IPA 1">11 IPA 1</option>
                            <option value="11 IPA 2">11 IPA 2</option>
                            <option value="11 IPA 3">11 IPA 3</option>
                            <option value="11 IPA 4">11 IPA 4</option>
                            <option value="11 IPA 5">11 IPA 5</option>
                            <option value="11 IPS 1">11 IPS 1</option>
                            <option value="11 IPS 2">11 IPS 2</option>
                            <option value="11 IPS 3">11 IPS 3</option>
                            <option value="11 IPS 4">11 IPS 4</option>
                            <option value="11 IPS 5">11 IPS 5</option>
                            <option value="12 IPA 1">12 IPA 1</option>
                            <option value="12 IPA 2">12 IPA 2</option>
                            <option value="12 IPA 3">12 IPA 3</option>
                            <option value="12 IPA 4">12 IPA 4</option>
                            <option value="12 IPA 5">12 IPA 5</option>
                            <option value="12 IPS 1">12 IPS 1</option>
                            <option value="12 IPS 2">12 IPS 2</option>
                            <option value="12 IPS 3">12 IPS 3</option>
                            <option value="12 IPS 4">12 IPS 4</option>
                            <option value="12 IPS 5">12 IPS 5</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Angkatan</label>
                        <input class="form-control" value="<?= $kelas->angkatan ?>" type="text" name="angkatan" placeholder="Masukkan Angkatan" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Slogan Angkatan</label>
                <input class="form-control" type="text" name="moto" value="<?= $kelas->moto ?>" placeholder="Masukkan Moto Angkatan" required>
            </div>

            <div class="form-group">
                <label>Logo</label>
                <input class="form-control" type="text" name="logo" value="<?= $kelas->logo ?>" placeholder="Masukkan ID File Dari Google Drive" required>
            </div>

            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-danger">Bersihkan</button>
            </div>

            <?php echo form_close(); ?>
        </div>
    </div>
</div>






<script src="<?= base_url() ?>template/back-end/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?= base_url() ?>template/back-end/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?= base_url() ?>template/back-end/js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?= base_url() ?>template/back-end/js/startmin.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<script>
    $(document).ready(function() {
        $('.search_select_box select').selectpicker();
    })
</script>
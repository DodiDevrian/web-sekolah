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

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<link rel="stylesheet" href="<?= base_url() ?>/datepicker/css/datepicker.css">
<style>
    .datepicker {
        z-index: 1151;
    }
</style>

<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Ubah Data Siswa
        </div>
        <div class="panel-body">
            <?php

            echo validation_errors('<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div>');

            if (isset($error_upload)) {
                echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '</div>';
            }

            echo form_open_multipart('siswa/edit/' . $siswa->id_siswa);
            ?>

            <div class="form-group">
                <label>NIS</label>
                <input class="form-control" type="text" name="nis" value="<?= $siswa->nis ?>" placeholder="Masukkan NIS" required>
            </div>
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input class="form-control" type="text" name="nama_siswa" value="<?= $siswa->nama_siswa ?>" placeholder="Masukkan Nama Lengkap Disertai Dengan Gelar" required>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input class="form-control" type="text" name="tempat_lahir" value="<?= $siswa->tempat_lahir ?>" placeholder="Masukkan Tempat Lahir" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input id="tanggal" class="form-control" type="text" name="tgl_lahir" value="<?= $siswa->tgl_lahir ?>" placeholder="Masukkan Tanggal Lahir" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group search_select_box">
                        <label>Kelas</label>
                        <select name="kelas" class="form-control" data-live-search="true">
                            <option value="<?= $siswa->kelas ?>"><?= $siswa->kelas ?></option>
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
                        <input class="form-control" type="text" name="angkatan" value="<?= $siswa->angkatan ?>" placeholder="Masukkan Angkatan" required>
                    </div>
                </div>
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
                                <img src="<?= base_url('foto_siswa/') . $siswa->foto_siswa ?>" width="100">
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






<script src="<?= base_url() ?>/template/back-end/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?= base_url() ?>/template/back-end/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?= base_url() ?>/template/back-end/js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?= base_url() ?>/template/back-end/js/startmin.js"></script>

<!-- DataTables JavaScript -->
<script src="<?= base_url() ?>/template/back-end/js/dataTables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>/template/back-end/js/dataTables/dataTables.bootstrap.min.js"></script>

<script src="<?= base_url() ?>/datepicker/js/bootstrap-modal.js"></script>
<script src="<?= base_url() ?>/datepicker/js/bootstrap-transition.js"></script>
<script src="<?= base_url() ?>/datepicker/js/bootstrap-datepicker.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<script>
    $(function() {
        $("#tanggal").datepicker({
            format: 'yyyy-mm-dd'
        });
    });
</script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('.search_select_box select').selectpicker();
    })
</script>
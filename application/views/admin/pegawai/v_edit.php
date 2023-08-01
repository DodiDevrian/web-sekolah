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
<link rel="stylesheet" href="../datepicker/css/datepicker.css">
<style>
    .datepicker {
        z-index: 1151;
    }
</style>

<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Ubah Data Pegawai
        </div>
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

            <div class="form-group search_select_box">
                <label>Jabatan</label>
                <select name="jabatan" class="form-control" data-live-search="true">
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
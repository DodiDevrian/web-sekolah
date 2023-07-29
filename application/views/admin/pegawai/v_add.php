<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<link href="../template/back-end/css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="../template/back-end/css/metisMenu.min.css" rel="stylesheet">

<!-- DataTables CSS -->
<link href="../template/back-end/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

<!-- DataTables Responsive CSS -->
<link href="../template/back-end/css/dataTables/dataTables.responsive.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="../template/back-end/css/startmin.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="../template/back-end/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
            Tambah Data Pegawai
        </div>
        <div class="panel-body">
            <?php
            if (isset($error_upload)) {
                echo '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '</div>';
            }

            echo form_open_multipart('pegawai/add');
            ?>

            <div class="form-group">
                <label>NIP</label>
                <input class="form-control" type="text" name="nip" placeholder="Masukkan NIP" required>
            </div>
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input class="form-control" type="text" name="nama" placeholder="Masukkan Nama Lengkap Disertai Dengan Gelar" required>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input class="form-control" type="text" name="tempat_lahir" placeholder="Masukkan Tempat Lahir" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input id="tanggal" class="form-control" type="text" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group search_select_box">
                        <label>Jabatan</label>
                        <select name="jabatan" class="form-control" data-live-search="true">
                            <option value="" disabled selected>--Pilih Jabatan--</option>
                            <option value="Kepala Sekolah">Kepala Sekolah</option>
                            <option value="Wakil Kepala Bidang Kurikulum">Wakil Kepala Bidang Kurikulum</option>
                            <option value="Wakil Kepala Bidang Kesiswaan">Wakil Kepala Bidang Kesiswaan</option>
                            <option value="Wakil Kepala Bidang Sarana Prasarana">Wakil Kepala Bidang Sarana Prasarana</option>
                            <option value="Wakil Kepala Bidang Hubungan Masyarakat">Wakil Kepala Bidang Hubungan Masyarakat</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group search_select_box">
                        <label>Pendidikan</label>
                        <select name="pendidikan" class="form-control" data-live-search="true">
                            <option value="" disabled selected>--Pilih Pendidikan--</option>
                            <option value="D3">D3</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                    </div>
                </div>
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






<script src="../template/back-end/js/jquery.min.js"></script>
<script src="../assets/js/jquery-1.11.2.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../template/back-end/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../template/back-end/js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../template/back-end/js/startmin.js"></script>

<!-- DataTables JavaScript -->
<script src="../template/back-end/js/dataTables/jquery.dataTables.min.js"></script>
<script src="../template/back-end/js/dataTables/dataTables.bootstrap.min.js"></script>

<script src="../datepicker/js/bootstrap-modal.js"></script>
<script src="../datepicker/js/bootstrap-transition.js"></script>
<script src="../datepicker/js/bootstrap-datepicker.js"></script>


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
<script src="../ckeditor/ckeditor.js"></script>
<script src="../ckeditor/sample.js"></script>
<link rel="stylesheet" href="../ckeditor/samples.css">
<link rel="stylesheet" href="../ckeditor/neo.css">

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
            Tambah Berita
        </div>
        <div class="panel-body">
            <?php
            if (isset($error_upload)) {
                echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '</div>';
            }
            echo validation_errors('<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div>');

            echo form_open_multipart('berita/add');
            ?>

            <div class="form-group">
                <label>Judul Berita</label>
                <input class="form-control" type="text" name="judul_berita" placeholder="Masukkan Judul berita" required>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Upload Gambar</label>
                        <input class="form-control" type="text" name="gambar_berita" placeholder="Masukkan ID File Google Drive" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Isi Berita</label>
                <textarea name="isi_berita" class="form-control" id="editor" placeholder="Masukkan Isi berita" height="100" required></textarea>
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-danger">Bersihkan</button>
            </div>

            <?php echo form_close(); ?>
        </div>
    </div>
</div>






<script src="../template/back-end/js/jquery.min.js"></script>

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

<script>
    initSample();
</script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>
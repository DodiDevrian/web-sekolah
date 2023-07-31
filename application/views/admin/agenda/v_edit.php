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
            Edit Agenda
        </div>
        <div class="panel-body">
            <?php
            if (isset($error_upload)) {
                echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '</div>';
            }

            echo form_open_multipart('admin/edit/' . $agenda->id_agenda);
            ?>

            <div class="form-group">
                <label>Nama Agenda</label>
                <input class="form-control" type="text" name="nama_agenda" value="<?= $agenda->nama_agenda ?>" placeholder="Masukkan Judul agenda" required>
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <textarea name="keterangan" class="form-control" cols="30" rows="10" placeholder="Masukkan Keterangan Agenda" required><?= $agenda->keterangan ?></textarea>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tanggal Mulai</label>
                        <input id="tanggal" class="form-control" type="text" name="tgl_mulai" value="<?= $agenda->tgl_mulai ?>" placeholder="Masukkan Tanggal Pelaksanaan" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tanggal Akhir</label>
                        <input id="tanggal2" class="form-control" type="text" name="tgl_akhir" value="<?= $agenda->tgl_akhir ?>" placeholder="Masukkan Tanggal Pelaksanaan" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Link</label>
                <input class="form-control" type="text" name="link" value="<?= $agenda->link ?>">
            </div>

            <div class="form-group">
                <!-- <label>Foto</label> -->
                <input class="form-control" type="hidden" name="foto_agenda" value="<?= $agenda->foto_agenda ?>">
            </div>

            <div class="form-group">
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


<script>
    $(function() {
        $("#tanggal").datepicker({
            format: 'yyyy-mm-dd'
        });
        $("#tanggal2").datepicker({
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
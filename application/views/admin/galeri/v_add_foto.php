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

<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Tambah Foto Galeri
        </div>
        <div class="panel-body">
            <?php
            if (isset($error_upload)) {
                echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '</div>';
            }

            echo validation_errors('<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div>');

            if ($this->session->flashdata('pesan')) {
                echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                echo $this->session->flashdata('pesan');
                echo '</div>';
            }

            echo form_open_multipart('galeri/add_foto/' . $galeri->id_galeri);
            ?>


            <div class="row">

                <div class="col-md-3">
                    <div class="form-group">
                        <label>Upload Foto</label>
                        <input class="form-control" type="text" placeholder="Masuukan ID File Google Drive" name="foto" required>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="form-group">
                        <label>Caption</label>
                        <input class="form-control" type="text" name="ket" placeholder="Masukkan Caption" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?= base_url('galeri') ?>" class="btn btn-danger">Kembali</a>
            </div>


            <?php echo form_close(); ?>
            <hr class="container" style="border: solid 1px #e3e3e3;">
            <div class="text-center">
                <h3>List Foto Galeri <?= $galeri->nama_galeri ?></h3>
            </div>

            <div class="row">
                <?php foreach ($foto as $key => $value) { ?>
                    <div class="col-sm-3 col-3 col-lg-3 col-md-3 text-center add-foto">
                        <div style="
                        border: solid 1px #337ab7;
                        margin: 5px;
                        height: 400px;
                        border-radius: 10px;
                        display: flex;
                        flex-direction: column;
                        justify-content: space-around;
                    ">
                            <div>
                                <img src="https://drive.google.com/uc?export=view&id=<?= $value->foto ?>" style="margin: 10px; width: 90%; height: 198px; object-fit: cover; object-position: 20% 10%;"><br>
                            </div>
                            <div>
                                <p><?= $value->ket ?></p>
                                <a style="width: 75px;" href="<?= base_url('galeri/delete_foto/' . $value->id_galeri . '/' . $value->id_foto) ?>" onclick="return confirm('Apakah Yakin Ingin Menghapus Data ?')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
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

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>
</div>
</div>
</div>
</div>
</div>
<div class="footer">
    <div class="copyright">
        <!-- <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p> -->
    </div>
</div>
</div>
<!--**********************************
        Main wrapper end
    ***********************************-->

<!--**********************************
        Scripts
    ***********************************-->

<!-- Required vendors -->
<script src="<?= base_url() ?>template/back-end/vendor/global/global.min.js"></script>
<script src="<?= base_url() ?>template/back-end/js/quixnav-init.js"></script>
<script src="<?= base_url() ?>template/back-end/js/custom.min.js"></script>



<!-- Datatable -->
<script src="<?= base_url() ?>template/back-end/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>template/back-end/js/plugins-init/datatables.init.js"></script>

<!-- Daterangepicker -->
<!-- momment js is must -->
<script src="<?= base_url() ?>template/back-end/vendor/moment/moment.min.js"></script>
<script src="<?= base_url() ?>template/back-end/vendor/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- clockpicker -->
<script src="<?= base_url() ?>template/back-end/vendor/clockpicker/js/bootstrap-clockpicker.min.js"></script>
<!-- asColorPicker -->
<script src="<?= base_url() ?>template/back-end/vendor/jquery-asColor/jquery-asColor.min.js"></script>
<script src="<?= base_url() ?>template/back-end/vendor/jquery-asGradient/jquery-asGradient.min.js"></script>
<script src="<?= base_url() ?>template/back-end/vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js"></script>
<!-- Material color picker -->
<script src="<?= base_url() ?>template/back-end/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
<!-- pickdate -->
<script src="<?= base_url() ?>template/back-end/vendor/pickadate/picker.js"></script>
<script src="<?= base_url() ?>template/back-end/vendor/pickadate/picker.time.js"></script>
<script src="<?= base_url() ?>template/back-end/vendor/pickadate/picker.date.js"></script>



<!-- Daterangepicker -->
<script src="<?= base_url() ?>template/back-end/js/plugins-init/bs-daterange-picker-init.js"></script>
<!-- Clockpicker init -->
<script src="<?= base_url() ?>template/back-end/js/plugins-init/clock-picker-init.js"></script>
<!-- asColorPicker init -->
<script src="<?= base_url() ?>template/back-end/js/plugins-init/jquery-asColorPicker.init.js"></script>
<!-- Material color picker init -->
<script src="<?= base_url() ?>template/back-end/js/plugins-init/material-date-picker-init.js"></script>
<!-- Pickdate -->
<script src="<?= base_url() ?>template/back-end/js/plugins-init/pickadate-init.js"></script>

<!-- <script src="<?= base_url() ?>/datepicker/js/bootstrap-modal.js"></script> -->
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

<!-- Select Item -->
<script src="<?= base_url() ?>template/back-end/vendor/select2/js/select2.full.min.js"></script>
<script src="<?= base_url() ?>template/back-end/js/plugins-init/select2-init.js"></script>

</body>

</html>
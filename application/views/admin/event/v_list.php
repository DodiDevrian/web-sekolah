<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading text-right" style="height: 40px;">
        </div>
        <div class="panel-body">
            <?php
            if ($this->session->flashdata('pesan')) {
                echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                echo $this->session->flashdata('pesan');
                echo '</div>';
            }
            ?>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Event</th>
                        <th>Tanggal Pelaksanaan</th>
                        <th>Waktu</th>
                        <th>Foto</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($event as $key => $value) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value->nama_event; ?></td>
                            <td><?= $value->tgl_event; ?></td>
                            <td><?= $value->waktu_mulai . ' - ' . $value->waktu_selesai; ?></td>
                            <td class="text-center">
                                <img src="<?= base_url('foto_event/' . $value->foto_event) ?>" width="100" alt="Tidak Ada Foto"><br>
                            </td>
                            <td>
                                <a href="<?= base_url('events/edit/' . $value->id_event) ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
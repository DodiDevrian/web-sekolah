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
            <table class="table table-bordered table-hover display">
                <thead>
                    <tr style="color: black;">
                        <th style="width: 25px;">No</th>
                        <th>Nama Agenda</th>
                        <th>Keterangan</th>
                        <th>Tanggal</th>
                        <th>Link</th>
                        <th>Foto</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($agenda as $key => $value) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value->nama_agenda; ?></td>
                            <td><?= $value->keterangan; ?></td>
                            <td><?= $value->tgl_mulai . ' Sampai ' . $value->tgl_akhir; ?></td>
                            <td> <a target="_blank" href="<?php echo $value->link ?>"><?= $value->link; ?></a></td>
                            <td class="text-center">
                                <img src="<?= base_url('foto_agenda/' . $value->foto_agenda) ?>" width="100" alt="Tidak Ada Foto"><br>
                            </td>
                            <td>
                                <a href="<?= base_url('admin/edit/' . $value->id_agenda) ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
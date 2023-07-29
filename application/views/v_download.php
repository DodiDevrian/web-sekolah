<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/styles/contact.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/styles/contact_responsive.css">
<style>
    .dataTables_wrapper .dataTables_filter input {
        border: 1px solid #aaa;
        width: 300px;
        border-radius: 3px;
        padding: 5px;
        background-color: transparent;
        color: inherit;
        margin-left: 3px;
    }
</style>
<!-- Home -->

<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="<?= base_url('home') ?>">Home</a></li>
                            <li>Download</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact -->

<div class="contact">
    <!-- Contact Info -->


    <div class="contact_info_container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="mb-3">Download File</h2>
                    <table class="table table-bordered table-hover" id="myTable">
                        <thead>
                            <th>No</th>
                            <th>Keterangan File</th>
                            <th>Download</th>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($downloads as $key => $value) {
                            ?>
                                <tr>
                                    <td width="50px"><?= $no++ ?></td>
                                    <td class="text-left"><?= $value->ket_file ?></td>
                                    <td width="100px"><a href="<?= base_url('file/' . $value->file) ?>" onclick="return confirm('Download File <?= $value->ket_file ?>')" class="btn btn-danger btn-sm"><i class="fa fa-file-pdf-o fa-fw"></i> Download</a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Newsletter -->

<!-- <div class="newsletter">
    <div class="newsletter_background" style="background-image:url(../template/front-end/images/newsletter_background.jpg)"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">

                    <div class="newsletter_content text-lg-left text-center">
                        <div class="newsletter_title">sign up for news and offers</div>
                        <div class="newsletter_subtitle">Subcribe to lastest smartphones news & great deals we offer</div>
                    </div>

                    <div class="newsletter_form_container ml-lg-auto">
                        <form action="#" id="newsletter_form" class="newsletter_form d-flex flex-row align-items-center justify-content-center">
                            <input type="email" class="newsletter_input" placeholder="Your Email" required="required">
                            <button type="submit" class="newsletter_button">subscribe</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div> -->
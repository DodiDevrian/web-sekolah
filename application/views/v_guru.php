<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/styles/contact.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/styles/contact_responsive.css">
<!-- Home -->

<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="<?= base_url('home') ?>">Home</a></li>
                            <li>Guru</li>
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
    <div class="mt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="mb-3">Pegawai</h2>
                </div>
                <!-- Awal Perulangan -->
                <?php foreach ($pegawai as $key => $value) { ?>
                    <div class="col-lg-3 col-md-6 team_col">
                        <div class="team_item">
                            <div class="team_image"><img src="<?= base_url('foto_pegawai/') . $value->foto_pegawai ?>" alt=""></div>
                            <div class="team_body">
                                <div class="team_title"><a href="#"><?= $value->nama ?></a></div>
                                <div class="team_subtitle">NIP : <?= $value->nip ?></div>
                                <div class="team_subtitle"><?= $value->jabatan ?></div>
                                <div class="social_list">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <hr>
                <div class="col-lg-12 text-center">
                    <h2 class="mb-3" style="border-top: solid 1px lightgrey; padding-top: 20px;">Guru Sekolah</h2>
                </div>
                <!-- Awal Perulangan -->
                <?php foreach ($guru as $key => $value) { ?>
                    <div class="col-lg-3 col-md-6 team_col">
                        <div class="team_item">
                            <div class="team_image"><img src="<?= base_url('foto_guru/') . $value->foto_guru ?>" alt=""></div>
                            <div class="team_body">
                                <div class="team_title"><a href="#"><?= $value->nama_guru ?></a></div>
                                <div class="team_subtitle">NIP : <?= $value->nip ?></div>
                                <div class="team_subtitle"><?= $value->nama_mapel ?></div>
                                <div class="social_list">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <!-- Akhir Perulangan -->
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
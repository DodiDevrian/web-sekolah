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
                            <li><a href="<?= base_url('home/kelas') ?>">Kelas</a></li>
                            <li>Siswa Kelas <?= $kelas->kelas ?></li>
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
                    <h2 class="mb-3">Siswa Kelas <?= $kelas->kelas ?></h2>
                </div>
                <!-- Awal Perulangan -->
                <?php foreach ($siswa as $key => $value) {
                    if ($value->id_kelas == $id) { ?>
                        <div class="col-lg-3 col-md-6 team_col">
                            <div class="team_item">
                                <div class="team_image"><img src="<?= base_url('foto_siswa/') . $value->foto_siswa ?>" alt=""></div>
                                <div class="team_body">
                                    <div class="team_title" style="margin-bottom: 50px;"><a href="#"><?= $value->nama_siswa ?></a></div>
                                    <div class="team_subtitle"></div>
                                    <div class="social_list">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php }
                } ?><!-- Akhir Perulangan -->
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
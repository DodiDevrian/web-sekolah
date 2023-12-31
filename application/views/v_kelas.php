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
                            <li>Kelas</li>
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
                    <h2 class="mb-3">Kelas</h2>
                </div>
                <!-- Awal Perulangan -->
                <?php foreach ($kelas as $key => $value) {
                    # code...
                ?>
                    <div class="col-lg-3 col-md-6 team_col">
                        <div class="team_item">
                            <div class="team_image"><img src="https://drive.google.com/uc?export=view&id=<?= $value->logo ?>" alt=""></div>
                            <div class="team_body">
                                <div class="team_title"><a href="<?= base_url('home/siswa/' . $value->id_kelas) ?>"><?= $value->kelas ?></a></div>
                                <div class="team_subtitle">Angkatan : <?= $value->angkatan ?></div>
                                <div class="team_subtitle">"<?= $value->moto ?>"</div>
                                <div class="social_list">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?><!-- Akhir Perulangan -->
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
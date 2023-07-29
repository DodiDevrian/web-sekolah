<!-- Home -->
<div class="home">
    <div class="home_slider_container">

        <!-- Home Slider -->
        <div class="owl-carousel owl-theme home_slider">

            <?php foreach ($slider_berita as $key => $value) {
                $tanggal = $value->tgl_berita;
                switch (date('m', strtotime($tanggal))) {
                    case '01':
                        $bulan = 'Januari';
                        break;
                    case '02':
                        $bulan = 'Februari';
                        break;
                    case '03':
                        $bulan = 'Maret';
                        break;
                    case '04':
                        $bulan = 'April';
                        break;
                    case '05':
                        $bulan = 'Mei';
                        break;
                    case '06':
                        $bulan = 'Juni';
                        break;
                    case '07':
                        $bulan = 'Juli';
                        break;
                    case '08':
                        $bulan = 'Agustus';
                        break;
                    case '09':
                        $bulan = 'September';
                        break;
                    case '10':
                        $bulan = 'Oktober';
                        break;
                    case '11':
                        $bulan = 'November';
                        break;
                    case '12':
                        $bulan = 'Desember';
                        break;

                    default:
                        $bulan = 'Bulan Tidak Diketahi';
                        break;
                }
            ?>
                <div class="owl-item">
                    <div class="home_slider_background" style="background-image:url(<?= base_url('gambar_berita/' . $value->gambar_berita) ?>"></div>
                    <div class="home_slider_content">
                        <div class="container">
                            <div class="row">
                                <div class="col text-center" style="background: rgba(255,255,255,0.6); border-radius: 10px;">
                                    <div><a href="" class="home_slider_title"><?= $value->judul_berita ?></a></div>
                                    <div style="margin-top: 20px; font-family: 'Roboto Slab', serif;" class="home_slider_subtitle"><?= date('d', strtotime($tanggal)) . ' ' . $bulan . ' ' . date('Y', strtotime($tanggal)) . '  |  ' . date('H:i', strtotime($tanggal)) ?></div>
                                    <div class="home_slider_form_container">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>

    <!-- Home Slider Nav -->

    <div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
    <div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
</div>

<!-- Features -->

<div class="features">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Selamat Datang Di Website MAN 1 Lampung Tengah</h2>
                    <div class="section_subtitle">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row features_row">

            <!-- Features Item -->
            <div class="col-lg-3 feature_col">
                <div class="feature text-center trans_400">
                    <div class="feature_icon"><img src="<?php base_url() ?>assets/images/icon1.png" alt="" width="80"></div>
                    <h3 class="feature_title" style="margin-top: 30px;">Berkualitas</h3>
                    <div class="feature_text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                </div>
            </div>

            <!-- Features Item -->
            <div class="col-lg-3 feature_col">
                <div class="feature text-center trans_400">
                    <div class="feature_icon"><img src="<?php base_url() ?>assets/images/icon2.png" alt="" width="80"></div>
                    <h3 class="feature_title" style="margin-top: 30px;">Kompetitif</h3>
                    <div class="feature_text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                </div>
            </div>

            <!-- Features Item -->
            <div class="col-lg-3 feature_col">
                <div class="feature text-center trans_400">
                    <div class="feature_icon"><img src="<?php base_url() ?>assets/images/icon3.png" alt="" width="80"></div>
                    <h3 class="feature_title" style="margin-top: 30px;">Islami</h3>
                    <div class="feature_text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                </div>
            </div>

            <!-- Features Item -->
            <div class="col-lg-3 feature_col">
                <div class="feature text-center trans_400">
                    <div class="feature_icon"><img src="<?php base_url() ?>assets/images/icon4.png" alt="" width="80"></div>
                    <h3 class="feature_title" style="margin-top: 30px;">Bermartabat</h3>
                    <div class="feature_text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Popular Courses -->

<div class="courses">
    <div class="section_background parallax-window" data-parallax="scroll" data-image-src="<?php base_url() ?>template/front-end/images/courses_background.jpg" data-speed="0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Galeri MAN 1 Lampung Tengah</h2>
                    <div class="section_subtitle">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row courses_row">

            <!-- Course -->
            <?php foreach ($home_galeri as $key => $value) { ?>
                <div class="col-lg-4 about_col about_col_left" style="margin-top: 15px;">
                    <div class="about_item">
                        <div class="about_item_image"><a href="<?= base_url('home/detail_galeri/' . $value->id_galeri) ?>"><img src="<?= base_url('sampul/') . $value->sampul ?>" alt="" style="width: 100%; height: 198px; object-fit: cover; object-position: 20% 10%;"></a></div>
                        <div class="about_item_title"><a href="#"><?= $value->nama_galeri ?></a></div>
                        <div class="">
                            <p>Jumlah : <?= $value->jml_foto ?> Foto</p>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
        <div class="row">
            <div class="col">
                <div class="courses_button trans_200"><a href="<?= base_url('home/galeri') ?>">Tampilkan Semua Galeri</a></div>
            </div>
        </div>
    </div>
</div>

<!-- Events -->

<div class="events">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Upcoming events</h2>
                    <div class="section_subtitle">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row events_row">

            <!-- Event -->
            <div class="col-lg-4 event_col">
                <div class="event event_left">
                    <div class="event_image"><img src="<?php base_url() ?>template/front-end/images/event_1.jpg" alt=""></div>
                    <div class="event_body d-flex flex-row align-items-start justify-content-start">
                        <div class="event_date">
                            <div class="d-flex flex-column align-items-center justify-content-center trans_200">
                                <div class="event_day trans_200">21</div>
                                <div class="event_month trans_200">Aug</div>
                            </div>
                        </div>
                        <div class="event_content">
                            <div class="event_title"><a href="#">Which Country Handles Student Debt?</a></div>
                            <div class="event_info_container">
                                <div class="event_info"><i class="fa fa-clock-o" aria-hidden="true"></i><span>15.00 - 19.30</span></div>
                                <div class="event_info"><i class="fa fa-map-marker" aria-hidden="true"></i><span>25 New York City</span></div>
                                <div class="event_text">
                                    <p>Policy analysts generally agree on a need for reform, but not on which path...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Event -->
            <div class="col-lg-4 event_col">
                <div class="event event_mid">
                    <div class="event_image"><img src="<?php base_url() ?>template/front-end/images/event_2.jpg" alt=""></div>
                    <div class="event_body d-flex flex-row align-items-start justify-content-start">
                        <div class="event_date">
                            <div class="d-flex flex-column align-items-center justify-content-center trans_200">
                                <div class="event_day trans_200">27</div>
                                <div class="event_month trans_200">Aug</div>
                            </div>
                        </div>
                        <div class="event_content">
                            <div class="event_title"><a href="#">Repaying your student loans (Winter 2017-2018)</a></div>
                            <div class="event_info_container">
                                <div class="event_info"><i class="fa fa-clock-o" aria-hidden="true"></i><span>09.00 - 17.30</span></div>
                                <div class="event_info"><i class="fa fa-map-marker" aria-hidden="true"></i><span>25 Brooklyn City</span></div>
                                <div class="event_text">
                                    <p>This Consumer Action News issue covers topics now being debated before...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Event -->
            <div class="col-lg-4 event_col">
                <div class="event event_right">
                    <div class="event_image"><img src="<?php base_url() ?>template/front-end/images/event_3.jpg" alt=""></div>
                    <div class="event_body d-flex flex-row align-items-start justify-content-start">
                        <div class="event_date">
                            <div class="d-flex flex-column align-items-center justify-content-center trans_200">
                                <div class="event_day trans_200">01</div>
                                <div class="event_month trans_200">Sep</div>
                            </div>
                        </div>
                        <div class="event_content">
                            <div class="event_title"><a href="#">Alternative data and financial inclusion</a></div>
                            <div class="event_info_container">
                                <div class="event_info"><i class="fa fa-clock-o" aria-hidden="true"></i><span>13.00 - 18.30</span></div>
                                <div class="event_info"><i class="fa fa-map-marker" aria-hidden="true"></i><span>25 New York City</span></div>
                                <div class="event_text">
                                    <p>Policy analysts generally agree on a need for reform, but not on which path...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Team -->

<div class="team">
    <div class="team_background parallax-window" data-parallax="scroll" data-image-src="<?php base_url() ?>template/front-end/images/team_background.jpg" data-speed="0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">The Best Tutors in Town</h2>
                    <div class="section_subtitle">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row team_row">

            <!-- Team Item -->
            <div class="col-lg-3 col-md-6 team_col">
                <div class="team_item">
                    <div class="team_image"><img src="<?php base_url() ?>template/front-end/images/team_1.jpg" alt=""></div>
                    <div class="team_body">
                        <div class="team_title"><a href="#">Jacke Masito</a></div>
                        <div class="team_subtitle">Marketing & Management</div>
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

            <!-- Team Item -->
            <div class="col-lg-3 col-md-6 team_col">
                <div class="team_item">
                    <div class="team_image"><img src="<?php base_url() ?>template/front-end/images/team_2.jpg" alt=""></div>
                    <div class="team_body">
                        <div class="team_title"><a href="#">William James</a></div>
                        <div class="team_subtitle">Designer & Website</div>
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

            <!-- Team Item -->
            <div class="col-lg-3 col-md-6 team_col">
                <div class="team_item">
                    <div class="team_image"><img src="<?php base_url() ?>template/front-end/images/team_3.jpg" alt=""></div>
                    <div class="team_body">
                        <div class="team_title"><a href="#">John Tyler</a></div>
                        <div class="team_subtitle">Quantum mechanics</div>
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

            <!-- Team Item -->
            <div class="col-lg-3 col-md-6 team_col">
                <div class="team_item">
                    <div class="team_image"><img src="<?php base_url() ?>template/front-end/images/team_4.jpg" alt=""></div>
                    <div class="team_body">
                        <div class="team_title"><a href="#">Veronica Vahn</a></div>
                        <div class="team_subtitle">Math & Physics</div>
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

        </div>
    </div>
</div>

<!-- Latest News -->

<div class="news">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Berita Terkini</h2>
                    <div class="section_subtitle">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row news_row">
            <div class="col-lg-7 news_col">

                <!-- News Post Large -->
                <div class="news_post_large_container">
                    <div class="news_post_large">
                        <?php foreach ($berita_terakhir as $key => $value) { ?>
                            <?php
                            $tanggal = $value->tgl_berita;
                            switch (date('m', strtotime($tanggal))) {
                                case '01':
                                    $bulan = 'Januari';
                                    break;
                                case '02':
                                    $bulan = 'Februari';
                                    break;
                                case '03':
                                    $bulan = 'Maret';
                                    break;
                                case '04':
                                    $bulan = 'April';
                                    break;
                                case '05':
                                    $bulan = 'Mei';
                                    break;
                                case '06':
                                    $bulan = 'Juni';
                                    break;
                                case '07':
                                    $bulan = 'Juli';
                                    break;
                                case '08':
                                    $bulan = 'Agustus';
                                    break;
                                case '09':
                                    $bulan = 'September';
                                    break;
                                case '10':
                                    $bulan = 'Oktober';
                                    break;
                                case '11':
                                    $bulan = 'November';
                                    break;
                                case '12':
                                    $bulan = 'Desember';
                                    break;

                                default:
                                    $bulan = 'Bulan Tidak Diketahi';
                                    break;
                            } ?>
                            <div class="news_post_image"><img src="<?= base_url('gambar_berita/') . $value->gambar_berita ?>" alt="" style="width: 100%; height: 291px; object-fit: cover; object-position: 10% 10%;"></div>
                            <div class="news_post_large_title"><a href="blog_single.html"><?= $value->judul_berita ?></a></div>
                            <div class="news_post_meta">
                                <ul>
                                    <li><?= $value->nama_user ?></li>
                                    <li><?= date('d', strtotime($tanggal)) . ' ' . $bulan . ' ' . date('Y', strtotime($tanggal)) . '  |  ' . date('H:i', strtotime($tanggal)) ?></li>
                                </ul>
                            </div>
                            <div class="news_post_text">
                                <p><?= substr(strip_tags($value->isi_berita), 0, 300) ?>...</p>
                            </div>
                            <div class="news_post_link"><a href="<?= base_url('home/detail_berita/' . $value->slug_berita) ?>">Beca Selengkapnya >>></a></div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 news_col">
                <div class="news_posts_small">

                    <!-- News Posts Small -->
                    <?php foreach ($home_berita_terkini as $key => $value) { ?>
                        <div class="news_post_small">
                            <div class="news_post_small_title"><a href="<?= base_url('home/detail_berita/' . $value->slug_berita) ?>"><?= substr(strip_tags($value->judul_berita), 0, 80) ?>...</a></div>
                            <div class="news_post_meta">
                                <ul>
                                    <li><?= $value->nama_user ?></li>
                                    <li><?= date('d', strtotime($tanggal)) . ' ' . $bulan . ' ' . date('Y', strtotime($tanggal)) ?></li>
                                    <li> <?= date('H:i', strtotime($tanggal)) ?></li>
                                </ul>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

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

<!-- Slogan -->

<div class="features">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Selamat Datang Di Website MAN 1 Lampung Tengah</h2>
                    <div class="section_subtitle">
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row features_row">
            <div class="col-lg-3 feature_col">
                <div class="feature text-center trans_400">
                    <div class="feature_icon"><img src="<?php base_url() ?>assets/images/icon1.png" alt="" width="80"></div>
                    <h3 class="feature_title" style="margin-top: 30px;">Berkualitas</h3>
                    <div class="feature_text">
                        <p>Menjadi Lulusan Yang Berkualitas</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 feature_col">
                <div class="feature text-center trans_400">
                    <div class="feature_icon"><img src="<?php base_url() ?>assets/images/icon2.png" alt="" width="80"></div>
                    <h3 class="feature_title" style="margin-top: 30px;">Kompetitif</h3>
                    <div class="feature_text">
                        <p>Menciptakan Jiwa Kompetitif Sehingga Dapat Bersaing Dengan Sekolah Lain</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 feature_col">
                <div class="feature text-center trans_400">
                    <div class="feature_icon"><img src="<?php base_url() ?>assets/images/icon3.png" alt="" width="80"></div>
                    <h3 class="feature_title" style="margin-top: 30px;">Islami</h3>
                    <div class="feature_text">
                        <p>Menjadikan Agama Islam Sebagai Pondasi Kehidupan</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 feature_col">
                <div class="feature text-center trans_400">
                    <div class="feature_icon"><img src="<?php base_url() ?>assets/images/icon4.png" alt="" width="80"></div>
                    <h3 class="feature_title" style="margin-top: 30px;">Bermartabat</h3>
                    <div class="feature_text">
                        <p>Rukun Terhadap Sesama Manusia</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Galei MAN -->

<div class="courses">
    <div class="section_background parallax-window" data-parallax="scroll" data-image-src="<?php base_url() ?>template/front-end/images/courses_background.jpg" data-speed="0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Galeri MAN 1 Lampung Tengah</h2>
                    <div class="section_subtitle">
                        <p></p>
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
                        <div class="about_item_title"><a href="<?= base_url('home/detail_galeri/' . $value->id_galeri) ?>"><?= $value->nama_galeri ?></a></div>
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
                    <h2 class="section_title">Events</h2>
                    <div class="section_subtitle">
                        <p>3 Event Terdekat Akan Ditampilkan Di Sini</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row events_row">

            <!-- Event -->
            <?php foreach ($events as $key => $value) { ?>
                <?php
                $tanggal = $value->tgl_event;
                switch (date('m', strtotime($tanggal))) {
                    case '01':
                        $bulan = 'Jan';
                        break;
                    case '02':
                        $bulan = 'Feb';
                        break;
                    case '03':
                        $bulan = 'Mar';
                        break;
                    case '04':
                        $bulan = 'Apr';
                        break;
                    case '05':
                        $bulan = 'Mei';
                        break;
                    case '06':
                        $bulan = 'Jun';
                        break;
                    case '07':
                        $bulan = 'Jul';
                        break;
                    case '08':
                        $bulan = 'Aug';
                        break;
                    case '09':
                        $bulan = 'Sep';
                        break;
                    case '10':
                        $bulan = 'Okt';
                        break;
                    case '11':
                        $bulan = 'Nov';
                        break;
                    case '12':
                        $bulan = 'Des';
                        break;

                    default:
                        $bulan = 'Bulan Tidak Diketahi';
                        break;
                } ?>
                <div class="col-lg-4 event_col">
                    <div class="event event_left">
                        <div class="event_image"><img src="<?= base_url('foto_event/') . $value->foto_event ?>" alt="" style="width: 100%; height: 223px; object-fit: cover; object-position: 20% 10%;"></div>
                        <div class="event_body d-flex flex-row align-items-start justify-content-start">
                            <div class="event_date">
                                <div class="d-flex flex-column align-items-center justify-content-center trans_200">
                                    <div class="event_day trans_200"><?= date('d', strtotime($tanggal)) ?></div>
                                    <div class="event_month trans_200"><?= $bulan ?></div>
                                </div>
                            </div>
                            <div class="event_content">
                                <div class="event_title"><a href="#"><?= $value->nama_event ?></a></div>
                                <div class="event_info_container">
                                    <div class="event_info"><i class="fa fa-clock-o" aria-hidden="true"></i><span><?= date("H:i", strtotime($value->waktu_mulai)); ?> - <?= date("H:i", strtotime($value->waktu_selesai)); ?></span></div>
                                    <div class="event_text">
                                        <p><?= $value->ket_event ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</div>

<!-- Pegawai dan Guru -->

<div class="team">
    <div class="team_background parallax-window" data-parallax="scroll" data-image-src="<?php base_url() ?>template/front-end/images/team_background.jpg" data-speed="0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Guru dan Pegawai</h2>
                    <div class="section_subtitle">
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row team_row slide-show">

            <!-- Team Item -->
            <?php foreach ($pegawai as $key => $value) { ?>
                <div class="col-lg-3 col-md-6 team_col">
                    <div class="team_item">
                        <div class="team_image"><img src="<?= base_url('foto_pegawai/') . $value->foto_pegawai ?>" alt=""></div>
                        <div class="team_body">
                            <div class="team_title"><a href="#"><?= $value->nama ?></a></div>
                            <div class="team_subtitle"><?= $value->jabatan ?></div>
                            <div class="social_list">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php foreach ($guru as $key => $value) { ?>
                <div class="col-lg-3 col-md-6 team_col">
                    <div class="team_item">
                        <div class="team_image"><img src="<?= base_url('foto_guru/') . $value->foto_guru ?>" alt=" Foto Tidak Di unggah"></div>
                        <div class="team_body">
                            <div class="team_title"><a href="#"><?= $value->nama_guru ?></a></div>
                            <div class="team_subtitle"><?= $value->nama_mapel ?></div>
                            <div class="social_list">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
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
                        <p></p>
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

<script>
    $('.slide-show').slick({
        slidesToShow: 4,
        slidesToScroll: 4,
        arrows: true,
        dots: true,
    });
</script>
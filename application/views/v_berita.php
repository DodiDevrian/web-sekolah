<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/styles/courses.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/styles/courses_responsive.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/styles/contact.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/styles/contact_responsive.css">

<link href="<?= base_url() ?>template/front-end/plugins/video-js/video-js.css" rel="stylesheet" type="text/css">
<!-- <link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/styles/blog.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/styles/blog_responsive.css"> -->

<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="<?= base_url('home') ?>">Home</a></li>
                            <li>Berita</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="courses">
    <div class="container">
        <div class="row">

            <!-- Courses Main Content -->
            <div class="col-lg-8">
                <div class="courses_search_container">
                </div>
                <div class="courses_container">
                    <h2>Berita</h2>
                    <div class="row courses_row">

                        <!-- Perulangan Berita -->
                        <?php foreach ($berita as $key => $value) { ?>
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
                            <div class="col-lg-6 course_col">
                                <div class="course">
                                    <div class="course_image"><img src="<?= base_url('gambar_berita/') . $value->gambar_berita ?>" alt="" style="width: 100%; height: 198px; object-fit: cover; object-position: 20% 10%;"></div>
                                    <div class="course_body">
                                        <h3 class="course_title"><a href="<?= base_url('home/detail_berita/' . $value->slug_berita) ?>"><?= substr(strip_tags($value->judul_berita), 0, 25)  ?>...</a></h3>
                                        <div class="blog_post_meta">
                                            <ul>

                                                <li class="fa fa-calendar"> <?= date('d', strtotime($tanggal)) . ' ' . $bulan . ' ' . date('Y', strtotime($tanggal)) . '  |  ' . date('H:i', strtotime($tanggal)) ?></li>
                                            </ul>
                                        </div>
                                        <div class="course_text">
                                            <p><?= substr(strip_tags($value->isi_berita), 0, 100) ?>...</p>
                                        </div>
                                    </div>
                                    <div class="course_footer">
                                        <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                            <div class="course_info">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                                <span><?= $value->nama_user ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                    <div class="row pagination_row">
                        <div class="col-12">
                            <?php
                            if (isset($pagination)) {
                                echo $pagination;
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Courses Sidebar -->
            <div class="col-lg-4">
                <div class="sidebar">
                    <!-- Latest Course -->
                    <div class="sidebar_section">
                        <div class="sidebar_section_title">Berita Terkini</div>
                        <div class="sidebar_latest">
                            <?php foreach ($berita_terkini as $key => $value) { ?>
                                <div class="latest d-flex flex-row align-items-start justify-content-start">
                                    <div class="latest_image">
                                        <div><img src="<?= base_url('gambar_berita/') . $value->gambar_berita ?>" alt="" style="width: 100%; height: 60px; object-fit: cover; object-position: 20% 10%;"></div>
                                    </div>
                                    <div class="latest_content">
                                        <div class="latest_title"><a href="<?= base_url('home/detail_berita/' . $value->slug_berita) ?>"><?= substr(strip_tags($value->judul_berita), 0, 25)  ?>...</a></div>
                                        <div class="latest_date"><?= date('d', strtotime($tanggal)) . ' ' . $bulan . ' ' . date('Y', strtotime($tanggal)) . '  |  ' . date('H:i', strtotime($tanggal)) ?></div>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                    </div>

                    <!-- Gallery -->
                    <div class="sidebar_section">
                        <div class="sidebar_section_title">Instagram</div>
                        <div class="sidebar_gallery">
                            <ul class="gallery_items d-flex flex-row align-items-start justify-content-between flex-wrap">
                                <li class="gallery_item">
                                    <div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
                                    <a class="colorbox" href="images/gallery_1_large.jpg">
                                        <img src="<?= base_url() ?>template/front-end/images/gallery_1.jpg" alt="">
                                    </a>
                                </li>
                                <li class="gallery_item">
                                    <div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
                                    <a class="colorbox" href="images/gallery_2_large.jpg">
                                        <img src="<?= base_url() ?>template/front-end/images/gallery_2.jpg" alt="">
                                    </a>
                                </li>
                                <li class="gallery_item">
                                    <div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
                                    <a class="colorbox" href="images/gallery_3_large.jpg">
                                        <img src="<?= base_url() ?>template/front-end/images/gallery_3.jpg" alt="">
                                    </a>
                                </li>
                                <li class="gallery_item">
                                    <div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
                                    <a class="colorbox" href="images/gallery_4_large.jpg">
                                        <img src="<?= base_url() ?>template/front-end/images/gallery_4.jpg" alt="">
                                    </a>
                                </li>
                                <li class="gallery_item">
                                    <div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
                                    <a class="colorbox" href="<?= base_url() ?>template/front-end/images/gallery_5_large.jpg">
                                        <img src="<?= base_url() ?>template/front-end/images/gallery_5.jpg" alt="">
                                    </a>
                                </li>
                                <li class="gallery_item">
                                    <div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
                                    <a class="colorbox" href="<?= base_url() ?>template/front-end/images/gallery_6_large.jpg">
                                        <img src="<?= base_url() ?>template/front-end/images/gallery_6.jpg" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Banner -->
                    <div class="sidebar_section">
                        <div class="sidebar_banner d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="sidebar_banner_background" style="background-image:url(<?= base_url() ?>template/front-end/images/banner_1.jpg)"></div>
                            <div class="sidebar_banner_overlay"></div>
                            <div class="sidebar_banner_content">
                                <div class="banner_title">Free Book</div>
                                <div class="banner_button"><a href="#">download now</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
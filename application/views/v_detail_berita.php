<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/styles/contact.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/styles/contact_responsive.css">

<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/styles/blog_single.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/styles/blog_single_responsive.css">
<?php
$tanggal = $berita->tgl_berita;
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
<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="<?= base_url('home') ?>">Home</a></li>
                            <li><a href="<?= base_url('home/berita') ?>">Berita</a></li>
                            <li><?= $berita->slug_berita ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blog">
    <div class="container">
        <div class="row">

            <!-- Blog Content -->
            <div class="col-lg-8">
                <div class="blog_content">
                    <div class="blog_title"><?= $berita->judul_berita ?></div>
                    <div class="blog_meta">
                        <ul>
                            <li class="fa fa-calendar-check-o"> <?= date('d', strtotime($tanggal)) . ' ' . $bulan . ' ' . date('Y', strtotime($tanggal)) . '  |  ' . date('H:i', strtotime($tanggal)) ?></li>
                            <li>By <a href="#">admin</a></li>
                        </ul>
                    </div>
                    <div class="blog_image"><img src="<?= base_url('gambar_berita/') . $berita->gambar_berita ?>" alt=""></div>
                    <div><?= $berita->isi_berita ?></div>
                </div>
            </div>


            <!-- Blog Sidebar -->
            <div class="col-lg-4">
                <div class="sidebar">
                    <!-- Latest News -->
                    <div class="sidebar_section">
                        <div class="sidebar_section_title">Berita Terkini</div>
                        <div class="sidebar_latest">
                            <?php foreach ($berita_terkini as $key => $value) { ?>
                                <div class="latest d-flex flex-row align-items-start justify-content-start">
                                    <div class="latest_image">
                                        <div><img src="<?= base_url('gambar_berita/') . $value->gambar_berita ?>" alt=""></div>
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
                        <div class="sidebar_section_title">Geleri</div>
                        <div class="sidebar_gallery">
                            <ul class="gallery_items d-flex flex-row align-items-start justify-content-between flex-wrap">
                                <?php foreach ($home_galeri as $key => $value) { ?>
                                    <li class="gallery_item">
                                        <div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
                                        <a class="colorbox" href="<?= base_url('home/detail_galeri/' . $value->id_galeri) ?>"><img src="<?= base_url('sampul/') . $value->sampul ?>" alt="" style="width: 100%; height: 94.66px; object-fit: cover; object-position: 20% 10%;"></a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url() ?>template/front-end/js/blog_single.js"></script>
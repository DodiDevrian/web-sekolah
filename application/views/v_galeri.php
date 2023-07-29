<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/styles/contact.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/styles/contact_responsive.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/styles/about.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/styles/about_responsive.css">
<!-- Home -->

<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="<?= base_url('home') ?>">Home</a></li>
                            <li>Galeri</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Galeri MAN 1 Lampung Tengah</h2>
                    <div class="section_subtitle">
                        <p>Jadikan jejak digital sebagai moment kenangan bersama teman-teman :)</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row about_row">

            <!-- About Item -->
            <?php foreach ($galeri as $key => $value) { ?>
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
    </div>
</div>
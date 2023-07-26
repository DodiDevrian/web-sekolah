<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/styles/contact.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/styles/contact_responsive.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/styles/about.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/styles/about_responsive.css">


<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="<?= base_url('home') ?>">Home</a></li>
                            <li><a href="<?= base_url('home/galeri') ?>">Galeri</a></li>
                            <li><?= $nama_galeri->nama_galeri ?></li>
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
                    <h2 class="section_title">Galeri <?= $nama_galeri->nama_galeri ?></h2>
                    <div class="section_subtitle">
                        <p>Jadikan jejak digital sebagai moment kenangan bersama teman-teman :)</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row about_row">

            <!-- About Item -->
            <?php foreach ($galeri as $key => $value) { ?>
                <div class="col-lg-4 about_col about_col_left" style="margin-top: 25px;">
                    <div class="about_item">
                        <div class="about_item_image">
                            <a href="<?= base_url('foto/') . $value->foto ?>" data-lightbox="roadtrip" data-title="<?= $value->ket ?>">
                                <img src="<?= base_url('foto/') . $value->foto ?>" alt="" style="width: 100%; height: 198px; object-fit: cover; object-position: 20% 10%;">
                            </a>
                        </div>
                        <div class="text-center">
                            <p><?= $value->ket ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</div>
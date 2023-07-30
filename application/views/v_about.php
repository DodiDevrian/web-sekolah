<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/styles/contact.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/styles/contact_responsive.css">

<!-- Leaftlet Map -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="<?= base_url('home') ?>">Home</a></li>
                            <li>About</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact">
    <!-- Contact Map -->
    <div class="contact_map">
        <!-- Google Map -->
        <div class="map">
            <div id="google_map" class="google_map">
                <div class="map_container">
                    <div id="mapid" style="height: 500px;"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Info -->
    <?php foreach ($setting as $key => $value) { ?>
        <div class="contact_info_container" style="margin-top: 20px;">
            <div class="container">
                <div class="row">
                    <!-- Contact Form -->
                    <div class="col-lg-4">
                        <div class="contact_form text-center">
                            <div class="contact_info_title text-left" style="margin-bottom: 20px;">Kepala Sekolah</div>
                            <img src="<?= base_url('foto_kepsek/' . $value->foto_kepsek) ?>" alt=""><br>
                            <h5 style="margin-top: 20px;"><?= $value->nama_kepsek ?></h5>
                            <p><?= $value->nip_kepsek ?></p>
                        </div>
                    </div>

                    <!-- Contact Info -->
                    <div class="col-lg-8">
                        <div class="contact_info">
                            <div class="contact_info_title">Info Sekolah</div>
                            <div class="contact_info_text">
                                <img src="<?= base_url('assets/images/fotoman.jpg') ?>" style="width: 100%; height: 300px; object-fit: cover; object-position: 20% 10%;" alt="">
                            </div>
                            <div class="contact_info_location">
                                <div class="contact_info_location_title">Contact</div>
                                <ul class="location_list">
                                    <li><?= $value->alamat ?></li>
                                    <li><?= $value->no_tel ?></li>
                                    <li><?= $value->email ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 50px;">
                    <div class="col-md-4">
                        <div class="contact_info">
                            <div class="contact_info_title">Visi Misi</div>
                            <p><?= $value->visi_misi ?></p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="contact_info">
                            <div class="contact_info_title">Sejarah</div>
                            <p><?= $value->sejarah ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

<script>
    var map = L.map('mapid').setView([-4.894487763576508, 105.2136996983419], 18);

    var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    var marker = L.marker([-4.894466993783802, 105.21356542217107]).addTo(map)
        .bindPopup('MAN 1 Lampung Tengah').openPopup();
</script>
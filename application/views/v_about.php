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

    <div class="contact_info_container">
        <div class="container">
            <div class="row">

                <!-- Contact Form -->
                <div class="col-lg-6">
                    <div class="contact_form">
                        <div class="contact_info_title">Kepala Sekolah</div>
                        <form action="#" class="comment_form">
                            <div>
                                <div class="form_title">Name</div>
                                <input type="text" class="comment_input" required="required">
                            </div>
                            <div>
                                <div class="form_title">Email</div>
                                <input type="text" class="comment_input" required="required">
                            </div>
                            <div>
                                <div class="form_title">Message</div>
                                <textarea class="comment_input comment_textarea" required="required"></textarea>
                            </div>
                            <div>
                                <button type="submit" class="comment_button trans_200">submit now</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-6">
                    <div class="contact_info">
                        <div class="contact_info_title">Contact Info</div>
                        <div class="contact_info_text">
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a distribution of letters.</p>
                        </div>
                        <div class="contact_info_location">
                            <div class="contact_info_location_title">New York Office</div>
                            <ul class="location_list">
                                <li>T8/480 Collins St, Melbourne VIC 3000, New York</li>
                                <li>1-234-567-89011</li>
                                <li>info.deercreative@gmail.com</li>
                            </ul>
                        </div>
                        <div class="contact_info_location">
                            <div class="contact_info_location_title">Australia Office</div>
                            <ul class="location_list">
                                <li>Forrest Ray, 191-103 Integer Rd, Corona Australia</li>
                                <li>1-234-567-89011</li>
                                <li>info.deercreative@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
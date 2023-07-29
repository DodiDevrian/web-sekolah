<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="<?= base_url('mapel') ?>"><i class="fa fa-table fa-fw"></i> Mata Pelajaran</a>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="<?= base_url('guru') ?>"><i class="fa fa-users fa-fw"></i> Guru</a>
            </li>
            <li>
                <a href="<?= base_url('kelas') ?>"><i class="fa fa-cubes fa-fw"></i> Kelas</a>
            </li>
            <li>
                <a href="<?= base_url('siswa') ?>"><i class="fa fa-mortar-board fa-fw"></i> Siswa</a>
            </li>
            <li>
                <a href="<?= base_url('pengumuman') ?>"><i class="fa fa-bullhorn fa-fw"></i> Pengumuman</a>
            </li>
            <li>
                <a href="<?= base_url('events') ?>"><i class="fa fa-files-o fa-fw"></i> Event</a>
            </li>
            <li>
                <a href="<?= base_url('berita') ?>"><i class="fa fa-newspaper-o fa-fw"></i> Berita</a>
            </li>
            <li>
                <a href="<?= base_url('galeri') ?>"><i class="fa fa-image fa-fw"></i> Galeri</a>
            </li>
            <li>
                <a href="<?= base_url('download') ?>"><i class="fa fa-download fa-fw"></i> Download</a>
            </li>
            <li>
                <a href="<?= base_url('login/logout') ?>" onclick="return confirm('Apakah Yakin Ingin Logout ?')"><i class="fa fa-sign-out fa-fw"> </i> Logout</a>
                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</nav>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?= $title2 ?></h1>
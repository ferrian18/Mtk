<!-- navbar -->
<nav class="navbar navbar-expand-md navbar-dark" style="background-color: #0f2027">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url(); ?>
        "><img src="<?= base_url('assets/img/logo.png'); ?>
        " height="23px" alt="" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="<?= base_url(); ?>">Home</a>
                <a class="nav-link" href="<?= base_url(); ?>belajar">Belajar</a>
                <a class="nav-link" href="<?= base_url('hitung'); ?>">Hitung</a>
                <a class=" nav-link" href="<?= base_url('about'); ?>">About</a>
            </div>
        </div>
    </div>
</nav>
<!-- akhir navbar -->
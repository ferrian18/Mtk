    <section class="jumbotron text-left"
        style="height: 720px; background-image: linear-gradient(to right, #0f2027, #203a43, #2c5364); padding-top: 5rem;"
        id="home">
        <div class="container">
            <div class="row">
                <div class="col-md align-self-center">
                    <h1 class="mb-4" style="color: white">MatiMatiKa</h1>
                    <p class="mb-4 text-white">Sebuah tempat agar kita tidak merasa MATI dalam mengerjakan Matematika
                    </p>
                    <a class="btn btn-primary" href="#menu" role="button">Mari Mulai</a>
                </div>
                <div class="col d-none d-sm-block">
                    <img width="600" src="<?= base_url('assets/img/math.png'); ?>
                    " alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Jumbotron -->

    <!-- menu -->
    <section style="height: 720px; background-image: linear-gradient(to right, #2c5364, #203a43, #0f2027)" id="menu">
        <div class="container pt-5" style="color: white">
            <div class="row">
                <div class="col-md-6 justify-content-beetwen">
                    <h1>Belajar</h1>
                    <p>Dapatkan materi yang mudah dipahami hanya di Matimatika</p>
                </div>
                <div class="col-md-6 justify-content-beetwen ">
                    <a class="btn" href="<?= base_url('belajar'); ?>" role="button"><img
                            src="<?= base_url('assets/img/tombol/tombol1.png'); ?>" height="150px" /></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 justify-content-beetwen">
                    <h1>Hitung</h1>
                    <p>Salah satu fitur di Matimatika yang membantu teman teman dalam mengkonversi satuan ukur dan
                        menghitung luas sebuah bangun datar atau bangun ruang</p>
                </div>
                <div class="col-md-6 justify-content-beetwen">
                    <a class="btn" href="<?= base_url('hitung'); ?>
                    " role="button"><img src="assets/img/tombol/tombol2.png" alt="" height="150px" /></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 justify-content-beetwen">
                    <h1>Forum</h1>
                    <p>Diskusi dengan teman teman Matimatika yang lainnya dalam memecahkan permasalahan matematika yang
                        teman teman temui</p>
                </div>
                <div class="col-md-6 justify-content-beetwen">
                    <a class="btn" href="<?= base_url('forum'); ?>" role="button"><img
                            src="<?= base_url('assets/img/tombol/tombol3.png'); ?>" alt="" height="150px" /></a>
                </div>
            </div>
        </div>
    </section>
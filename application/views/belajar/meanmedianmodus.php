<body style="background: linear-gradient(to right, #0f2027, #203a43, #2c5364);">

    <div class="container" style="background:white">
        <div class="row">
            <div class="col-sm-2 col-md-2 col-xl-2"></div>
            <div class="col-sm-8 col-md-8 col-xl-8">
                <div class="Header" style="padding-top: 6rem">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Mean, Median, Modus: Data Tunggal & Kelompok, Rumus, Contoh Soal</h1>
                            <span>22 june 2021</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h3>Pengertian Mean, Median, dan Modus</h3>
                    <p>
                        <strong>Mean</strong> dapat diartikan sebagai nilai rata-rata suatu kelompok data.
                        <strong>Median</strong> adalah nilai tengah data setelah diurutkan. <strong>Modus</strong>
                        merupakan nilai yang sering muncul dalam suatu kelompok data.
                    </p>
                </div>
                <div class="row">
                    <h3>Penerapan Mean, Median, dan Modus</h3>
                    <p>
                        Mean, median, dan modus sangat diperlukan dalam menganalisis suatu hasil atau pengumpulan data.
                        <br><br>
                        Misalkan pada kasus nilai ulangan matematika. Penerapan mean (rata-rata) dapat ditunjukkan saat
                        menentukan berapa banyak siswa yang mendapatkan nilai di atas rata-rata nilai kelas. <br><br>
                        Median digunakan apabila guru ingin membagi kelas menjadi dua kelompok berdasarkan urutan nilai.
                        <br><br>
                        Modus dapat digunakan oleh guru untuk mengetahui berapa banyak siswa yang memperoleh nilai
                        tertentu atau menentukan frekuensi terbanyak dari suatu data.
                    </p>
                </div>
                <div class="row">
                    <h3>Rumus Mean, Median dan Modus</h3>
                    <h5>Rumus Mean</h5>
                    <p>
                        mean merupakan nilai rata-rata suatu data. Nilai rata-rata merupakan hasil bagi antara jumlah
                        nilai keseluruhan dengan banyaknya data yang diolah. Secara matematis, mean (nilai rata-rata)
                        dapat dituliskan sebagai <br>
                        <img src="<?= base_url('assets/'); ?>images/mmm1.jpg" alt="">
                    </p>
                </div>
                <div class="row">
                    <h5>Rumus Mean Data Kelompok</h5>
                    <p>
                        <img src="<?= base_url('assets/'); ?>images/mmm2.jpg" alt="">
                    </p>
                </div>
                <div class="row">
                    <h5>Rumus Median</h5>
                    <p>
                        Cara menentukan median pada data tunggal cukup mudah. <br><br>
                        Kita dapat mengurutkannya dari data terkecil ke data terbesar. Jika banyak data ganjil tentu
                        kita langsung bisa menentukan nilai tengahnya. <br><br>
                        Bagaimana jika banyaknya data genap? <br><br>
                        Pada data tunggal untuk menentukan median yaitu: <br><br>
                        Misalkan banyaknya data n, jika n ganjil maka median ditentukan dengan
                    </p>
                    <p class="text-center">
                        <b>Med = x<sub>n/2</sub></b>
                    </p>
                    <p>
                        Jika banyaknya data genap, maka <br>
                        <img src="<?= base_url('assets/'); ?>images/mmm3.jpg" alt="">
                    </p>
                </div>
                <div class="row">
                    <h6>Rumus Median Data Kelompok</h6>
                    <p>
                        Median data kelompok dapat ditentukan jika kita telah mengetahui kelas mediannya. Carilah kelas
                        data yang memuat data nilai tengah. Median data kelompok dapat ditentukan dengan
                    </p>
                    <p class="text-center">
                        <b>Med = t<sub>b</sub> + ((n/2) – F<sub>kum</sub>)/f<sub>i</sub>) k</b>
                    </p>
                    <p>
                        <b>Keterangan:</b>
                        Med : median <br>
                        tb : tepi bawah kelas median <br>
                        n : banyaknya data <br>
                        Fkum : frekuensi kumulatif sebelum kelas median <br>
                        fi : frekuensi kelas median <br>
                        K : panjang kelas
                    </p>
                </div>
                <div class="row">
                    <h5>Rumus Modus</h5>
                    <p>
                        Untuk menentukan modus, biasanya pada data tunggal dibuat tabel frekuensi data tunggal agar
                        memudahkan dalam menentukan frekuensi tiap data, lalu temukan data dengan frekuensi terbesar.
                    </p>
                </div>
                <div class="row">
                    <h6>Rumus Modus Data Kelompok</h6>
                    <p class="text-center">
                        <b>Mo = t<sub>b</sub> + (d<sub>1</sub> / (d<sub>1</sub> + d<sub>2</sub>)) k</b>
                    </p>
                    <p>
                        <b>Keterangan:</b>
                        Mo : modus data kelompok <br>
                        tb : tepi bawah kelas modus <br>
                        d1 : frekuensi kelas modus dikurangi frekuensi kelas sebelumnya <br>
                        d2 : frekuenso kelas modus dikurangn frekuensi kelas sesudahnya <br>
                        k : panjang kelas
                    </p>
                </div>
                <div class="row">
                    <h3>Contoh Soal Mean, Median, dan Modus</h3>
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col">Nilai</th>
                                <th scope="col">Frekuensi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <p>10 - 20</p>
                                </td>
                                <td>
                                    <p>2</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>21 - 31</p>
                                </td>
                                <td>
                                    <p>8</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>32 - 42</p>
                                </td>
                                <td>
                                    <p>15</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>43 - 53</p>
                                </td>
                                <td>
                                    <p>7</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>54 - 64</p>
                                </td>
                                <td>
                                    <p>10</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>65 - 75</p>
                                </td>
                                <td>
                                    <p>3</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p>
                        Berdasarkan data tersebut, tentukan <br>
                        1. Mean dari data tersebut. <br>
                        2. Median dari data tersebut. <br>
                        3. Modus data tersebut
                    </p>

                    <div class="card">
                        <h5 class="card-header">Pembahasan</h5>
                        <div class="card-body">
                            <p class="card-text">
                            <table class="table align-middle">
                                <thead>
                                    <tr>
                                        <th scope="col">Nilai</th>
                                        <th scope="col">Frekuensi</th>
                                        <th scope="col">F<sub>kum</sub></th>
                                        <th scope="col">x<sub>i</sub></th>
                                        <th scope="col">f<sub>i</sub> x x<sub>i</sub></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>10 - 20</p>
                                        </td>
                                        <td>
                                            <p>2</p>
                                        </td>
                                        <td>
                                            <p>2</p>
                                        </td>
                                        <td>
                                            <p>15</p>
                                        </td>
                                        <td>
                                            <p>30</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>21 - 31</p>
                                        </td>
                                        <td>
                                            <p>8</p>
                                        </td>
                                        <td>
                                            <p>10</p>
                                        </td>
                                        <td>
                                            <p>26</p>
                                        </td>
                                        <td>
                                            <p>208</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><b>32 - 42<sup>*</sup></b></p>
                                        </td>
                                        <td>
                                            <p><b>15</b></p>
                                        </td>
                                        <td>
                                            <p><b>25</b></p>
                                        </td>
                                        <td>
                                            <p><b>37</b></p>
                                        </td>
                                        <td>
                                            <p><b>555</b></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>43 - 53</p>
                                        </td>
                                        <td>
                                            <p>7</p>
                                        </td>
                                        <td>
                                            <p>32</p>
                                        </td>
                                        <td>
                                            <p>48</p>
                                        </td>
                                        <td>
                                            <p>336</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>54 - 64</p>
                                        </td>
                                        <td>
                                            <p>10</p>
                                        </td>
                                        <td>
                                            <p>42</p>
                                        </td>
                                        <td>
                                            <p>59</p>
                                        </td>
                                        <td>
                                            <p>590</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>65 - 75</p>
                                        </td>
                                        <td>
                                            <p>3</p>
                                        </td>
                                        <td>
                                            <p>45</p>
                                        </td>
                                        <td>
                                            <p>70</p>
                                        </td>
                                        <td>
                                            <p>210</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            </p>
                            <p>*) merupakan kelas median dan kelas modus</p>
                            <p>
                                <b>Mean</b><br><br>
                                <img src="<?= base_url('assets/'); ?>images/mmm4.jpg" alt="">
                            </p>
                            <p>
                                <b>Median</b><br><br>
                                Med = t<sub>b</sub> + (((n/2) – F<sub>kum</sub>)/f<sub>i</sub>) k <br>
                                Med = 31,5 + (((45/2) – 10)/15) 11 <br>
                                Med = 31,5 + 9, 17 <br>
                                Med = 40,67
                            </p>
                            <p>
                                <b>Modus</b><br><br>
                                Mo = t<sub>b</sub> + (d<sub>1</sub> / (d<sub>1</sub> + d<sub>2</sub>)) k <br>
                                Mo = 31,5 + (7/(7 + 8)) 11 <br>
                                Mo = 31,5 + 5,13 <br>
                                Mo = 36,63
                            </p>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <a class="btn btn-outline-primary" href="<?= base_url('belajar'); ?>
                        " role="button">Kembali Ke Materi
                            Matimatika</a>
                    </div>
                </div>
                <div class="row">
                    <p>
                        <a href="https://rumuspintar.com/matematika/">~(Source)~</a>
                    </p>
                </div>

            </div>
        </div>
    </div>
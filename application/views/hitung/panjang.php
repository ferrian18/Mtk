<!-- konversi_panjang -->
<section id="panjang" class="pt-3" style="height: 720px; background:white">
    <div class="container">
        <!-- input -->
        <div class="row mb-3">
            <div class="col text-start">
                <h1>Konversi Panjang</h1>
            </div>
            <div class="col text-end">
                <a style="background-color:#0f2027;" class="btn btn-dark" href="<?= base_url('hitung'); ?>
                " role="button">Kembali</a>
            </div>

        </div>
        <div class="row text-center">
            <div>
                <form method="post" class="input-group mb-3">
                    <input type="number" name="x" class="form-control" aria-label="Text input with dropdown button">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false" style="width: 200px;">Satuan</button>
                    <ul class="dropdown-menu dropdown-menu-end text-center" style="width: 200px;">
                        <li><input class="dropdown-item" type="submit" value="km" name="satuan"></li>
                        <li><input class="dropdown-item" type="submit" value="hm" name="satuan"></li>
                        <li><input class="dropdown-item" type="submit" value="dam" name="satuan"></li>
                        <li><input class="dropdown-item" type="submit" value="m" name="satuan"></li>
                        <li><input class="dropdown-item" type="submit" value="dm" name="satuan"></li>
                        <li><input class="dropdown-item" type="submit" value="cm" name="satuan"></li>
                        <li><input class="dropdown-item" type="submit" value="mm" name="satuan"></li>
                    </ul>
                </form>
            </div>
        </div>
        <!-- proses -->
        <div class="row justify-content-center text-center">
            <?php
            if (isset($_POST["x"]) and isset($_POST["satuan"])) {
                $x = $_POST["x"];
                $satuan = $_POST["satuan"];
            } else {
                $x = "-";
                $satuan = "-";
                $hasil1 = "-";
                $hasil2 = "-";
                $hasil3 = "-";
                $hasil4 = "-";
                $hasil5 = "-";
                $hasil6 = "-";
                $hasil7 = "-";
            }

            if ($satuan == "km") {
                $hasil1 = $x * 1;
                $hasil2 = $x * 10;
                $hasil3 = $x * 100;
                $hasil4 = $x * 1000;
                $hasil5 = $x * 10000;
                $hasil6 = $x * 100000;
                $hasil7 = $x * 1000000;
            }
            if ($satuan == "hm") {
                $hasil1 = $x / 10;
                $hasil2 = $x * 1;
                $hasil3 = $x * 10;
                $hasil4 = $x * 100;
                $hasil5 = $x * 1000;
                $hasil6 = $x * 10000;
                $hasil7 = $x * 100000;
            }
            if ($satuan == "dam") {
                $hasil1 = $x / 100;
                $hasil2 = $x / 10;
                $hasil3 = $x * 1;
                $hasil4 = $x * 10;
                $hasil5 = $x * 100;
                $hasil6 = $x * 1000;
                $hasil7 = $x * 10000;
            }
            if ($satuan == "m") {
                $hasil1 = $x / 1000;
                $hasil2 = $x / 100;
                $hasil3 = $x / 10;
                $hasil4 = $x / 1;
                $hasil5 = $x * 10;
                $hasil6 = $x * 100;
                $hasil7 = $x * 1000;
            }
            if ($satuan == "dm") {
                $hasil1 = $x / 1000;
                $hasil2 = $x / 100;
                $hasil3 = $x / 10;
                $hasil4 = $x / 10;
                $hasil5 = $x * 1;
                $hasil6 = $x * 10;
                $hasil7 = $x * 100;
            }
            if ($satuan == "cm") {
                $hasil1 = $x / 100000;
                $hasil2 = $x / 10000;
                $hasil3 = $x / 1000;
                $hasil4 = $x / 100;
                $hasil5 = $x / 10;
                $hasil6 = $x * 1;
                $hasil7 = $x * 10;
            }
            if ($satuan == "mm") {
                $hasil1 = $x / 100000;
                $hasil2 = $x / 10000;
                $hasil3 = $x / 1000;
                $hasil4 = $x / 100;
                $hasil5 = $x / 10;
                $hasil6 = $x / 10;
                $hasil7 = $x * 1;
            }
            ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nilai Awal</th>
                        <th scope="col">Nilai Setelah Konversi </th>
                    </tr>
                </thead>
                <tbody">
                    <tr>
                        <th scope="row">1</th>
                        <td> <?php echo "$x $satuan" ?>
                        <td>
                            <?php echo "$hasil1 km" ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td> <?php echo "$x $satuan" ?>
                        <td>
                            <?php echo "$hasil2 hm" ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td> <?php echo "$x $satuan" ?>
                        <td>
                            <?php echo "$hasil3 dam" ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td> <?php echo "$x $satuan" ?>
                        <td>
                            <?php echo "$hasil4 m" ?>
                        </td>

                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td> <?php echo "$x $satuan" ?>
                        <td>
                            <?php echo "$hasil5 dm" ?>
                        </td>

                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td> <?php echo "$x $satuan" ?>
                        <td>
                            <?php echo "$hasil6 cm" ?>
                        </td>

                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td> <?php echo "$x $satuan" ?>
                        <td>
                            <?php echo "$hasil7 mm" ?>
                        </td>

                    </tr>
                    </tbody>
            </table>

        </div>
    </div>
</section>
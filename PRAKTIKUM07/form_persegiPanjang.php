<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Persegi Panjang</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Menghitung Luas dan Keliling Persegi Panjang</h1>
        <h4 class="text-center">Oleh : Nurul Aisah Oktafiah</h4>
        <br>
        <form method="POST" action="form_persegiPanjang.php">
            <div class="form-group row">
                <label for="panjang" class="col-4 col-form-label">Panjang</label>
                <div class="col-8">
                    <input id="panjang" name="panjang" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="luas" class="col-4 col-form-label">Lebar</label>
                <div class="col-8">
                    <input id="lebar" name="lebar" type="text" class="form-control">
                </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Hitung</button>
                </div>
            </div>
        </form>
        </div>
        </form>
        <?php
        if (isset($_POST["submit"])) {
            require_once "class_persegipanjang.php";

            // Set nilai properti pada objek dari nilai yang diisi pada form
            $panjang = $_POST["panjang"];
            $lebar = $_POST["lebar"];
            

            // Buat objek baru dari class bmiPasien
            $persegiPanjang = new persegiPanjang($panjang, $lebar);

            echo "<h2>Luas dan Keliling Persegi Panjang</h2>";
            echo "<p>Panjang: " . $panjang . " cm</p>";
            echo "<p>Lebar: " . $lebar . " cm</p>";
            echo "<p>Keliling Persegi Panjang: " . $persegiPanjang->hitungKeliling() . " cm</p>";
            echo "<p>Luas Persegi Panjang: " . $persegiPanjang->hitungLuas() . " cm</p>";
        }

        ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>
</html>
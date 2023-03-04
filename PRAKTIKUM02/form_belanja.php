<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <title>Form Belanja Online</title>
</head>

<body>
  <h1>Belanja Online</h1>

  <div style="display:flex; justify-content:space-between">
    <div>
      <form method="POST" action="form_belanja.php">
        <div class="form-group row">
          <label for="" class="col-4 col-form-label">Customer</label>
          <div class="col-8">
            <input id="" name="customer" placeholder="Nama Customer" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4">Produk Pilihan</label>
          <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
              <input name="produk" id="_0" type="radio" class="custom-control-input" value="tv">
              <label for="_0" class="custom-control-label">TV</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input name="produk" id="_1" type="radio" class="custom-control-input" value="kulkas">
              <label for="_1" class="custom-control-label">Kulkas</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input name="produk" id="_2" type="radio" class="custom-control-input" value="mesin_cuci">
              <label for="_2" class="custom-control-label">Mesin Cuci</label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="" class="col-4 col-form-label">Jumlah Beli</label>
          <div class="col-8">
            <input id="" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <div class="offset-4 col-8">
            <button name="proses" type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </form>
    </div>
    <div>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Daftar Harga</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">TV: 4.200.000</th>
          </tr>
          <tr>
            <th scope="row">Kulkas: 3.100.000</th>
          </tr>
          <tr>
            <th scope="row">Mesin Cuci: 3.900.000</th>
          </tr>
        </tbody>
      </table>

      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">Harga bisa berubah kapan saja!</th>
          </tr>
        </thead>
      </table>
    </div>
  </div>
  <br>
  <hr>

  <?php
  //Tangkap Nilai
  $nama_customer = $_POST["customer"];
  $pilihan_produk = $_POST["produk"];
  $jumlah_beli = $_POST["jumlah"];

  //Produk
  $harga;
  if ($pilihan_produk = "tv") {
    $harga = 4200000;
  } elseif ($pilihan_produk = "kulkas") {
    $harga = 3100000;
  } elseif ($pilihan_produk = "mesin_cuci") {
    $harga = 3900000;
  } else {
    $harga = 0;
  }
  //Total Harga
  $total_harga = ($harga * $jumlah_beli);
  ?>

  <p>
    Nama Customer : <?= $nama_customer; ?> <br>
    Produk Pilihan : <?= $pilihan_produk; ?> <br>
    Harga : <?= $harga; ?> <br>
    Jumlah Beli : <?= $jumlah_beli; ?> <br>
    Total Harga : <?= $total_harga; ?> <br>
  </p>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>
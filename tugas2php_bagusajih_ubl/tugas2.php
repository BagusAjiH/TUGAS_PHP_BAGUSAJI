<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .container .row {
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <h1 style="text-align:center; color: purple; background-color: khaki;">FORM BELANJA</h1><br>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="tugas2.php" method="POST">
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama</label> 
                        <div class="col-8">
                            <input id="nama" name="nama" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="barang" class="col-4 col-form-label">Barang</label> 
                        <div class="col-8">
                            <select id="barang" name="barang" class="custom-select">
                                <option value="rabbit">--- PILIHAN   ---</option>
                                <option value="kulkas">KULKAS</option>
                                <option value="ac">AC</option>
                                <option value="monitor">MONITOR</option>
                                <option value="harddisk">HARDDISK</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                        <div class="col-8">
                            <input id="jumlah" name="jumlah" type="text" class="form-control">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="proses" type="submit" class="btn btn-primary">Submit</button>
                            <button name="unproses" type="reset" class="btn btn-success">Batal</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php
    $nama = $_POST['nama'];
    $barang = $_POST['barang'];
    $jumlah = $_POST['jumlah'];

    $hargaSatuan = 0;
    switch ($barang) {
        case 'kulkas':
            $hargaSatuan = 5000000;
            break;
        case 'ac':
            $hargaSatuan = 3000000;
            break;
        case 'monitor':
            $hargaSatuan = 2000000;
            break;
        case 'harddisk':
            $hargaSatuan = 3000000;
            break;
    }

    $totalBelanja = $jumlah * $hargaSatuan;
    $diskon = 0.2 * $totalBelanja;
    $ppn = 0.1 * ($totalBelanja - $diskon);
    $hargaBersih = $totalBelanja - $diskon + $ppn;
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Hasil Belanja</title>
  <style>
    body {
      text-align: center;
      font-family: Arial, sans-serif;
    }
    h1 {
      color: purple;
    }
    ul {
      list-style: none;
      padding: 0;
    }
    li {
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <h1 style="background-color: khaki;">Hasil Belanja</h1>
  <ul>
    <li><strong>Nama:</strong> <?php echo $nama ?></li>
    <li><strong>Barang:</strong> <?php echo $barang ?></li>
    <li><strong>Jumlah:</strong> <?php echo $jumlah ?></li>
    <li><strong>Harga Satuan:</strong> Rp<?php echo number_format($hargaSatuan) ?></li>
    <li><strong>Total Belanja:</strong> Rp<?php echo number_format($totalBelanja) ?></li>
    <li><strong>Diskon:</strong> Rp<?php echo number_format($diskon) ?></li>
    <li><strong>PPN:</strong> Rp<?php echo number_format($ppn) ?></li>
    <li><strong>Harga Bersih:</strong> Rp<?php echo number_format($hargaBersih) ?></li>
  </ul>
</body>
</html>


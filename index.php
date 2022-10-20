<?php
require '../function.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="edit.css">
</head>
<body>
<header id="header">
        <div class="logo-section">
            <h2 class="logo ">mooifilm</h2>
        </div>
        <nav id="nav-bar" class="navigation-bar">
            <ul style="list-style-type : none" class="navigation">
                <li> <a href="" class="nav-link">mooi</a> </li>
                <li> <a href="" class="nav-link">Our Story</a> </li>
                <li> <a href="" class="nav-link">Work Log</a> </li>
                <li> <a href="" class="nav-link">Contact</a> </li>
            </ul>
            
        </nav>
</header>

<div class="container">
  <h2> <br> <br> <br> SELAMAT DATANG ADMIN</h2>
  <p>Selamat Berkerja</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Judul Film</th>
        <th>Waktu Tayang</th>
        <th>Harga Tiket</th>
        <th>Deskripsi</th>
        <th>Rate</th>
        <th>Opsi</th>
        <th>Opsi</th>
      </tr>
    </thead>
    <tbody>


    <?php
    $loop = mysqli_query($koneksi, "select * from tiket");
    while($a = mysqli_fetch_array($loop)){
    ?>
      <tr>
        <td><?=$a['judulfilm']?></td>
        <td><?=$a['waktutayang']?></td>
        <td><?=$a['hargatiket']?></td>
        <td><?=$a['deskripsi']?></td>
        <td><?=$a['rate']?></td>
        <td> <a href="">edit</a> </td>
        <td> <a href="">hapus</a> </td>
      </tr>
    

    <?php
    };
    ?>


    </tbody>
  </table>
  <br>
  =====================================================================================================
  <br>


  Tambah Film Baru
  <form method= "post">
    <input type="text" name="judul" class="form-control" placeholder="Judul Film" >
    <input type="text" name="waktutayang" class="form-control" placeholder="Waktu Tayang">
    <input type="text" name="hargatiket" class="form-control" placeholder="Harga Tiket">
    <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi">
    <input type="text" name="rate" class="form-control" placeholder="Rate">
    <button type="submit" name="tambahfilm" class="btn btn-primary">Submit</button>

  </form>





            <!-- section about me -->
            <section id="aboutme">
                <div class="layar-dalam">
                    <h3>About Me</h3>
                    <p class="ringkasan">
                        Biodata Saya :
                    </p>
                    <div class="konten-isi">
                        <p>
                            Nama : Fitra Noviarji <br>
                            Nim  : 2109106017 <br>
                            Prodi: Informatika A 21 <br>
                            Alamat Asal : Jl.Suryanata Perumahan Puspita
                        </p>
                    </div>
                </div>


<footer class="footer">
        <div class="footer-info">
            <ul>
                <li><span>POSTTEST 5</span></li>
            </ul>
        </div>
</footer>





</div>

</body>
</html>

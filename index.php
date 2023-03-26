<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    <title>RUMAH TONGKONAN</title>
   
</head>
<body>
<?php
        if(isset($_POST['cari'])){
            $judul = $_POST['judul'];
            echo "<h1>Hasil Pencarian</h1>";
        
            $url = 'http://www.omdbapi.com/?i=tt3896198&apikey=432d0cc&s="'.$judul.'"';

           //Akses API dengan CURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);

            // var_dump($output);
            $data = json_decode($output, TRUE);
            // $data = $data['Search'];
            
            foreach ($data['Search'] as $movie) {
                
                echo "\n <p>Judul: ".$movie["Title"]."</p>";
                echo "<p>Tahun: ".$movie["Year"]."</p>";
                echo '<img src= "'.$movie['Poster'].'">';
            }    
        }

        ?> 
        
  <header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <h3>RUMAH ADAT TORAJA</h3>
    <form method="post" action="index.php">
        <input type="text" name="judul"></input>
        <input type="submit" value="pencarian" name="cari"></input>
     
    </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>  
      </ul>
    </div>
  </div>
</nav>
</header>
<div class="container">
<div class="row mt-3 text-center">
  <div class="col">
<h1>Struktur Bangunan Rumah Tongkonan</h1>
</div>
</div>

    
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="1.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Rumah Adat Toraja </h5>
        <p class="card-text">Rumah adat Toraja memiliki bentuk unik dan kental dengan budaya khas Toraja sehingga menarik wisatawan baik lokal maupun mancanegara. Selain itu, Rumah adat Toraja yang disebut rumah Tongkonan juga memiliki simbol-simbol dan filosofi tertentu bsgi masyarakat sekitar..</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="2.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Atap tongkonan</h5>
        <p class="card-text">Atap rumah tongkonan terbuat dari bilah bambu yang dilapisi ijuk, alang-alang atau rumbia dan berbentuk menyerupai perahu. </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="3.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Dinding Rumah Tongkonan</h5>
        <p class="card-text">Seluruh dinding rumah Tongkonan terbuat dari bilah kayu tanpa sedikitpun besi sehingga tidak ada penggunaan paku satu pun dalam pembuatannya, hal inilah yang membuat rumah adat Toraja ini menjadi semakin unik.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="4.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Kolong Rumah</h5>
        <p class="card-text">Bangunan rumah yang mirip dengan rumah panggung membuat rumah Tongkonan memiliki kolong yang biasa dimanfaatkan oleh pemilik rumah sebagai kandang kerbau. Pada dindingnya bisa di modifikasi dengan cara ditarik kebawah sehingga membentuk pagar untuk dinding kandang.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="5.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Makna Warna</h5>
        <p class="card-text">Seperti rumah lainnya yang dilapisi cat berwarna warni untuk mempercantik bangunan, rumah Tongkonan juga dihiasi warna-warna yang tidak hanya mempercantik rumah, namun juga setiap warnanya memiliki makna tersendiri.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="6.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Simbol Dinding</h5>
        <p class="card-text">Selain berfungsi sebagai tempat tinggal, rumah adat Toraja juga menggambarkan status sosial penghuninya. Pada tiang utama rumah Tongkonan banyak dipasang tulang kepala kerbau beserta tanduknya, yang mana jika semakin banyak jumlahnya, maka semakin tinggi pula status sosial keluarga yang menghuni rumah tersebut.</p>
      </div>
    </div>
  </div>
  
    </div>
   
   
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>

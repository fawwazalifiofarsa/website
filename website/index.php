<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <title>Hello, world!</title>
  </head>
  <nav>
    <div class="menu">
        <div class="logo1">
          <h1>WOODS.</h1>
        </div>
        <div class="buttons1">
            <ul>
              <li></li>
              <li><a href="#home">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#market">Market</a></li>
              <li><a href="account.php">Account</a></li>
              <li></li>
            </ul>
        </div>
    </div>
  </nav>
    <div id="home" style="text-align: center;">
      <div class="judul1">
        <h1>Woods.</h1>
      </div>
      <div class="wood">
        <p>
          Find what you need that related to wood here
        </p>
      </div>
      <center><a href="#body" class="btn">Get Started</a></center>
    </div>
    <div id="body">
  <body>
    <div id="row">
      <div id="about">
        <div class="judul2">
          <h2>What's in our website?</h2>
          <div class="row">
              <?php 
              include "koneksi.php";
              $query=mysqli_query($conn,"select * from produk");
              while($data=mysqli_fetch_array($query)){
                  ?>
                  <div class="col-md-5" style="margin: 0 auto; float: none; padding-bottom: 60px;">
                      <div class="card" style="text-align:center; padding:30px 20px 30px 20px; margin: 20px 10px 20px 10px; background-color: green; color:white;font-family: 'Poppins', sans-serif;background-color: rgb(25,20,20);
}">
                        <h5 class="card-title" style="font-size:20pt;"><?=$data['nama']?></h5>
                        <img src="assets/<?=$data['gambar']?>" class="card-img-top" style="width:180px; margin:0 auto; padding: 10px 0 10px 0;">
                        <div class="card-body">
                          <p class="card-text"><?=$data['deskripsi']?></p>
                          <a href="produk.php?id=<?=$data['id']?>" class="btn">Learn More</a>
                        </div>
                      </div>
                  </div>
                  <?php
              }
              ?>
          </div>
          <?php 
          ?>
        </div>
      </div>
      
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
  <section class="footer">
    <div class="social">
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-snapchat"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-facebook-f"></i></a>
    </div>
    <ul class="list">
      <li>
        <a href="#">Home</a>
      </li>
      <li>
        <a href="#">About</a>
      </li>
      <li>
        <a href="#">Market</a>
      </li>
      <li>
        <a href="#">Account</a>
      </li>
    </ul>
  </section>
</div>
</html>
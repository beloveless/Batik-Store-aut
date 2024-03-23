<?php include("header.php"); 
?>

<!doctype html>
<html lang="en">
  <head>
</head>
  <body>
        <!-- HERO JUMBOTRON -->
        <section class="hero">
            <div class="title container">
            <h1>WELCOME TO <br>
                <span>STORE BATIK TULIS</span> 
            </h1>
            <p>Batik Tulis Tradisional Khas Bakaran <br>
                Jl. Juwana - Tayu Km 02 <br>
                Desa Bakaran Kulon RT 01/RW 03 <br>
                Juwana - Pati - Jawa Tengah
          </p>
            <a href="#product-section"><button type="button" class="btn btn-primary">BUY NOW</button></a>
            
        </div>
        </section>


        <!-- PRODUK -->
<!-- <?php print_r($_SESSION['cart'])?> -->
        <section id="product-section">

        
        <div class="produk m-5">
          <div class="judul m-5">
            <h2 class="text-center">~ ETALASE PRODUCT ~</h2>
          </div>
          <div class="row row-cols-1 row-cols-md-3 g-4">

            <div class="col">
              <form action="manage_cart.php" method="POST">
              <div class="card">
                <img src="Batik Ladrang Klasik.jpg" class="card-img-top" alt="...">
                <!-- <div class="card-img-overlay">
                  <h5 class="card-title btn btn-primary btn btn-danger">45%</h5>
                </div> -->
                <div class="card-body text-center">
                  <h5 class="card-title">IDR 155.000</h5>
                  <p class="card-text">Kain Batik Motif Ladrang Klasik</p>
                  <button type="submit" name="Add_To_Cart" class="btn btn-info">Tambah Keranjang</button>
                  <input type="hidden" name="Item_Name" value="Kain Batik Motif Ladrang Klasik">
                  <input type="hidden" name="Price" value="155000">
                </div>
              </div>
              </form>
            </div>

            <div class="col">
              <form action="manage_cart.php" method="POST">
              <div class="card">
                <img src="Sarung Motif Pagi Sore Udang Kipas Warna.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title">IDR 160.000</h5>
                  <p class="card-text">Sarung Motif Pagi Sore Udang Kipas</p>
                  <button type="submit" name="Add_To_Cart" class="btn btn-info">Tambah Keranjang</button>
                  <input type="hidden" name="Item_Name" value="Sarung Motif Pagi Sore Udang Kipas">
                  <input type="hidden" name="Price" value="160000">
                </div>
              </div>
              </form>
            </div>

            <div class="col">
            <form action="manage_cart.php" method="POST">
              <div class="card">
                <img src="Batik Parikesit Classik.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title">IDR 145.000</h5>
                  <p class="card-text">Batik Motif Parikesit Klasik</p>
                  <button type="submit" name="Add_To_Cart" class="btn btn-info">Tambah Keranjang</button>
                  <input type="hidden" name="Item_Name" value="Batik Motif Parikesit Klasik">
                  <input type="hidden" name="Price" value="145000">
                </div>
              </div>
              </form>
            </div>

            <div class="col">
            <form action="manage_cart.php" method="POST">
              <div class="card">
                <img src="Batik Ladrang Kawung Classik Warna.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title">IDR 150.000</h5>
                  <p class="card-text">Batik Motif Ladrang Kawung Klasik</p>
                  <button type="submit" name="Add_To_Cart" class="btn btn-info">Tambah Keranjang</button>
                  <input type="hidden" name="Item_Name" value="Batik Motif Ladrang Kawung Klasik">
                  <input type="hidden" name="Price" value="150000">
                </div>
              </div>
              </form>
            </div>

            <div class="col">
            <form action="manage_cart.php" method="POST">
              <div class="card">
                <img src="Sarung Motif Pagi Sore.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title">IDR 118.000</h5>
                  <p class="card-text">Sarung Motif Pagi Sore</p>
                  <button type="submit" name="Add_To_Cart" class="btn btn-info">Tambah Keranjang</button>
                  <input type="hidden" name="Item_Name" value="Sarung Motif Pagi Sore">
                  <input type="hidden" name="Price" value="118000">
                </div>
              </div>
              </form>
            </div>

            <div class="col">
            <form action="manage_cart.php" method="POST">
              <div class="card">
                <img src="Batik Wil Kapal Pecah Colet Warna.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title">IDR 150.000</h5>
                  <p class="card-text">Batik Wil Kapal Pecah Colet Warna</p>
                  <button type="submit" name="Add_To_Cart" class="btn btn-info">Tambah Keranjang</button>
                  <input type="hidden" name="Item_Name" value="Batik Wil Kapal Pecah Colet Warna">
                  <input type="hidden" name="Price" value="150000">
                </div>
              </div>
              </form>
            </div>

          </div>
        </div>
      </section>

      <!-- Footer -->
      <section id="contact-section">

      </section>

        <footer class="bg-primary text-center">
          <div class="row p-4">
            <div class="col text-start">
              <h5>STORE BATIK TULIS</h5>
            </div>

            <div class="col">
              <h3>HUBUNGI KAMI :</h3>
            </div>

              <div class="col text-start">
            <div class="col">
              <div class="sosmeditem">
                <a class="text-dark" href="https://wa.me/+6289603336000"><i class="fa-brands fa-whatsapp"></i> 089603336000</a>
              </div>
            </div>
            <div class="col">
              <div class="sosmeditem">
                <a class="text-dark" href=""><i class="fa-brands fa-facebook"></i> Lala Batik Bakaran</a>
              </div>
            </div>
            <div class="col">
              <div class="sosmeditem">
                <a class="text-dark" href=""><i class="fa-brands fa-instagram"></i> Lala Batik Bakaran</a>
              </div>
            </div>
          </div>
          </div>

          <div class="row text-center">
            <p>Copyright BATIKKU @2023</p>
          </div>
        </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>
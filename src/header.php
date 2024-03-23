<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BATIK STORE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  
    <link rel="stylesheet" href="style.css">

    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/263085f8d9.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Bagian Navbar -->
    <nav class="navbar navbar-expand-lg bg-transparant fixed-top">
        <div class="container">
          <a class="navbar-brand" href="index.php">BATIK STORE</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#product-section">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact-section">Contact</a>
              </li>
            </ul>
            <div>
                <?php
                    $count=0;
                    if(isset($_SESSION['cart']))
                    {
                        $count=count($_SESSION['cart']);
                    }
                    
                ?>
              <a href="mycart.php" class="btn btn-outline-success">Keranjang (<?php echo $count; ?>)</a>
            </div>
          </div>
        </div>
      </nav>

      
</body>
</html>
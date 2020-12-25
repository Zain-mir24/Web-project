<?php
    $conn = new mysqli("localhost","root","","webroject");
    $sql = "SELECT * FROM products where Brand='iphone' ";
    $result = mysqli_query($conn,$sql);
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mobi Store</title>
  <!-- FONT AWSOME CDN -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <!-- CSS only -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/products.css" />
</head>

<body>
  <header>

    <nav style="margin-top: -10px; border-bottom: 1px solid #8b0000; text-align: center;min-height: 20%; padding: 2%;"
      class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand nav-logo" href="index.php"><span style="color: blue;font-size: 30px;">Mobi</span> <span
          style="color: red;font-size: 30px;">store</span></a>
      <button style="margin-right: 29%;" class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav ml-auto mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" style="font-size: 20px;" href="index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" style="font-size: 20px;" href="#" id="navbarDropdownMenuLink"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Phone
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="iphone.php">Iphone</a>
              <a class="dropdown-item" href="samsung.php">Samsung</a>

            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="font-size: 20px;" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="font-size: 20px;" href="signup.php">signup</a>
          </li>

          <li class="nav-item">
            <a href="cart.php"> <i class="fa fa-2x fa-shopping-cart" style="margin-right:20px;margin-top: 10px ;"
                aria-hidden="true"></i> </a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
  </header>
    
    <section>
    <?php
      echo ' <div class="row">';
      echo     ' <div class="col-lg-6 left-side">';
      echo        ' <img src="./images/Samsung-Galaxy-A01.jpg" alt="">';
      echo       '</div>';
      echo    '  <div class="col-lg-6 right-side">';
      echo       '  <h1>Samsung Galaxy A01</h1>';
       echo         '<h6>Rs 43,999</h6>';
       echo       '  <hr>';
        echo       ' <ul>';
        echo         '   <li>64MP AI quad camera</li>';
         echo           '<li>Qualcomm® SnapdragonTM 720G</li>';
         echo          ' <li>5020mAh Battery</li>';
         echo           '<li>6.67  DotDisplay</li>';
          echo         ' <li>16MP In-Display Front Camera</li>';
          echo         ' <li>Height: 165.75mm Width: 76.68mm Thickness: 8.8mm Weight: 209g</li>';
          echo          '<li>Supports 2+1 card slot, nano-SIM + nano-SIM + microSD (512GB expandable)</li>';
          echo        '  <li>6GB RAM</li>';
          echo         ' <li>64GB ROM</li>';
          echo      '</ul>';
           echo    ' <button class="btn btn-outline-warning"  href="admin.php"  style="display: block; margin-left: 25%;"><i';
           echo    '  class="fas fa-shopping-cart"></i>&nbsp Add To';
           echo        ' Cart</button>';
          echo'  </div>';
       echo '</div>';
      ?>
    </section>

    <footer style="margin-top: 3%">
    
      <br />
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h3 style="color: grey;">Get in Touch</h3>
            <br />
            <p style="color: grey;"><i class="far fa-envelope"></i>&nbsp customercare@mobistore.com</p>
            <p style="color: grey;"><img src="./images/phone-alt-solid.svg" style="height: 17px" alt="" />&nbsp
              +92-337-9871230</p>
            <p style="color: grey;"><i class="fab fa-facebook fa-lg"></i>&nbsp <i class="fab fa-instagram fa-lg"></i>
            </p>
          </div>
          <div class="col-lg-6" style="color: grey;">
            <h3 style="color: grey;">Our Company</h3>
            <br />
            <p style="color: grey;">Track Your Order</p>
            <p style="color: grey;">Terms & Condition</p>
          </div>
       
          </div>
        </div>
      </div>
      <br />
    </footer>
</body>

</html>
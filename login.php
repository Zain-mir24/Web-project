
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
  <link rel="stylesheet" href="css/style.css" />
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
         <a class="nav-link" style="font-size: 20px;" href="login.php"> Welcome </a>
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
         <a class="nav-link" style="font-size: 20px;" href="logout.php">Logout</a>
       </li>
      

     </ul>
     
   </div>
 </nav>
</header>
<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->

   <!-- CAROUSEL SECTION -->
  <section id="carousel">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./images/Samsung & Iphone.jpg" style="height: 700px" class="d-block w-100"
            alt="..." />
        </div>
        <div class="carousel-item">
          <img src="./images/v-a-tao-OxvlDO8RwKg-unsplash.jpg" style="height: 900px" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="./images/ravi-sharma-HCoHGXiDMpE-unsplash.jpg" style="height: 900px" class="d-block w-100"
            alt="..." />
        </div>
      </div>
    </div>
  </section>

  <!-- CATEGORY SECTION -->
  <section>
    <br /><br />
    <div class="container">
      <div class="row">
        <div class="col-lg-6  col-md-6 col-sm-6" style="text-align: center">
          <a style="text-decoration: none" href="./iphone.php">
            <h1 class="cat-iphone" style="border: 2px solid black; color: black">iPhone</h1>
          </a>
          <img src="./images/iphone-logo-541.png" style="width: 100%; border: 2px solid black; height: 400px" alt="" />
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6" style="text-align: center">
          <a style="text-decoration: none" href="./samsung.php">
            <h1 class="cat-samsung" style="border: 2px solid blue; color: blue">SAMSUNG</h1>
          </a>
          <img src="./images/samsung-logo-png-1285.png" style="width: 100%; border: 2px solid blue; height: 400px"
            alt="" /> 
        </div>
      </div>
    </div>
  </section>
  <!--Customer reviews-->
  <br><br><br>
  <section id="review" class=" bg-dark">
  <h1 style="text-align:center; border:1px solid blue; border-radius:50px; margin-left:300px;margin-right:300px; background:blue; color:white;"> Customer reviews </h1> 
  <div class="container">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div id="testimonial-slider" class="owl-carousel">
                <div class="testimonial">
                  <div class="container">
                   <div class="row">
                   <div class="col-lg-4">
                      <div class="pic">
                        <img src="./images/img-1.jfif">
                    </div>
                    <div class="testimonial-profile">
                        <h3 class="title" style="color:white">williamson</h3>
                        <span class="post" style="color:white">customer 1</span>
                    </div>
                    <p class="description" style="color:white">
                      I Loved working with them amazing customer serivce
                    </p>
                      </div>
                      <div class="col-lg-4">
                      <div class="pic">
                        <img src="./images/img-3.jpg">
                    </div>
                    <div class="testimonial-profile">
                        <h3 class="title" style="color:white">strike</h3>
                        <span class="post" style="color:white">customer 2</span>
                    </div>
                    <p class="description" style="color:white">
                      I Loved working with them amazing customer serivce
                    </p>
                      </div>
                      <div class="col-lg-4">
                      <div class="pic">
                        <img src="./images/img-2.jpg" style="height:300px;">
                    </div>
                    <div class="testimonial-profile">
                        <h3 class="title" style="color:white">Adam</h3>
                        <span class="post" style="color:white">customer 3</span>
                    </div>
                    <p class="description" style="color:white">
                      I Loved working with them amazing customer serivce
                    </p>
                      </div>

                    </div>
                </div>
                    
                   
                
            </div>
      
 

  
  
  </section>
<!-- 
  FEATURED PHONE SECTION -->
  <section>
    <div class="container">
    <h1 style="text-align:center; border:1px solid #8b0000; border-radius:50px; margin-left:300px;margin-right:300px; background:#8b0000; color:white;" >Best featured products</h1>
    <br>
      <div class="row">
      
        <div class="col-lg-6">
        <div class='iphone'style='height:300px;'>
        <h1>
        Iphone
        </h1>
        
       <a href="iphone.php"> <img src="./images/iphone7.jfif" style='height:200px;'alt=""></a>
        <div class="description">
       <span style="background:black;color:white;"> One of our best selling products. <br>Iphone 7 black and it has 128gb memory</span>
        
        </div>
        </div>
        </div>
        <div class="col-lg-6">
        <div class='iphone'style='height:300px;'>
        <h1>
        Samsung
        </h1>
        
        <a href="samsung.php">   <img src="./images/Samsung-Galaxy-A01.jpg" style='height:200px;'alt=""> </a>
        <div class="description">
       <span style="background:#8b0000;color:white;"> One of our best selling Samsung products. <br>Samsunggalaxy A10 Red back and it has 128gb memory and 6gb ram</span>
        
        </div>
        </div>
        </div>
     
      </div>      
    </div>
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
          <a href="status.php"><p style="color: grey;">Track Your Order</p></a>
          <p style="color: grey;">Terms & Condition</p>
        </div>
     
        </div>
      </div>
    </div>
    <br />
  </footer>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
      crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"
      integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

      <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/bootstrap/bootstrap-dropdown.js"></script>
    <script>
      $(document).ready(function () {
        $('.dropdown-toggle').dropdown()
      });
    </script>
    <script>
       JavaScript (Testimonial depend on jQuery and Owl carousel.)
  1
  2
  3
  4
  5
  6
  7
  8
  9
  10
  11
  12
  13
  14
  15
 
   
  $(document).ready(function(){
      $("#testimonial-slider").owlCarousel({
          items:2,
          itemsDesktop:[1000,2],
          itemsDesktopSmall:[979,2],
          itemsTablet:[768,1],
          pagination:false,
          navigation:true,
          navigationText:["",""],
          autoPlay:true
      });
  });
  
    </script>
    
</body>

</html>
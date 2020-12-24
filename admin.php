<?php
$msg="";
$servername = "localhost";
 $username = "username";
 $Email ="Email";
 $password = "password";
 $DB= "webroject";
 $conn = new mysqli("localhost","root","",$DB);
if (!$conn) {
     die("Connection failed: " . $con->connect_error);
}


if(isset($_REQUEST['submit']))
{  
  if(($_REQUEST['mobilename'] == "")||($_REQUEST['description'] == "")||($_REQUEST['RAM']== "")){
          echo "Fill all the fields";
         }
         else{
          $mobilename= $_POST['mobilename'];
          $RAM = $_POST['RAM'];
          $description =$_POST['description'];
          $ROM=$_POST['ROM'];
          $RAM=$_POST['RAM'];
          $price=$_POST['price'];
          $brand= $_POST['brand'];
          $image=$_FILES['image']['name'];
          $destination="images/".basename($_FILES['image']['name']);  
          $sql = "INSERT INTO `products`( `Name`, `Description`, `Brand`, `RAM`, `ROM`, `images`,`price`) VALUES ('$mobilename','$description','$brand','$RAM','$ROM','$image','$price')";
          //inserting into database
          if ($conn->query($sql) === TRUE) {
            if(move_uploaded_file($_FILES['image']['tmp_name'],$destination)){
                $msg= "Image uploaded successfully";
            }
            else{
                $msg ="There was an error uploading the file";
    
            }
            header("Location: http://localhost/Project 1/index.php");
            exit;
         }
          else {
               echo "<script>alert </script>";
                  }  
        
                           
   }
}
?>
<!-- UPDATE ka code -->
<?php
$servername = "localhost";
$username = "username";
$Email ="Email";
$password = "password";
$DB= "webroject";
$conn = new mysqli("localhost","root","",$DB);
if (!$conn) {
    die("Connection failed: " . $con->connect_error);
}
if(isset($_REQUEST['update']))
{  
  if(($_REQUEST['updatemobile'] == "")||($_REQUEST['updateRAM'] == "")||($_REQUEST['description1']== "")){
          echo "Fill all the fields";
         }
         else{
          $mobilename= $_GET['updatemobile'];
          $RAM = $_GET['updateRAM'];
          $description =$_GET['description1'];
          $ROM=$_GET['updateROM'];
          $productid=$_GET['productID'];
          $brand=$_GET['brand'];      
          $sql=$sql = "UPDATE products SET `Name`='$mobilename',`Description`='$description', `RAM`='$RAM',`ROM`='$ROM',`Brand`=$brand WHERE ProductID='$productid'";
          if ($conn->query($sql) === TRUE) {
            header("Location: http://localhost/Project 1/index.php");
            exit;
                     } else {
                       echo "Error Entering database: " . $conn->error;
                     } 

                     
         }
}


   ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/admin.css">
</head>

<body>
    <header>
        <nav style="text-align: center; font-size: 3rem; background-color: grey; color: white;">
            <h1>WELCOME TO ADMINISTRATOR</h1>
        </nav>
    </header>

    <section id="Add" style="border:2px solid black; background-color: beige;">
        <h1 style="text-align: center; font-size: 2rem;">Add Mobile</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <label for="name">Mobile Name: &nbsp</label><input type="text" name="mobilename">
                    </div>
                    <div class="col-lg-6">
                        <label for="name">RAM: &nbsp</label><input type="int" name="RAM">
                    </div>
                    <div class="col-lg-6">
                        <label for="name">Description: &nbsp&nbsp&nbsp</label><input type="text" name="description">
                    </div>
                    <div class="col-lg-6">
                        <label for="name">ROM: &nbsp</label><input type="text" name="ROM">
                    </div>
                    <div class="col-lg-6">
                        <label for="name">Price: &nbsp</label><input type="text" name="price">
                    </div>
                    <div class="col-lg-6">
                    <label for="samsung">Samsung</label>    <input type="radio" name="brand" value="samsung">
                    <label for="samsung">Iphone</label>    <input type="radio" name="brand" value="iphone">
                    </div>
                    <div class="col-lg-12">
                        <label for="image">Select Image</label>
                        <input name="image" type="file">
                    </div>
                </div>
                <button class="btn btn-md btn-outline-dark" name="submit" type="submit">Submit</button>
            </div>
        </form>
        <br>
    </section>
    <br>
    <section id="delete" style="border:2px solid black;background-color:beige;">
        <h1 style="text-align: center; font-size: 2rem;">Delete Mobile</h1>
        <form action="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <label for="name">Enter Product ID: &nbsp</label><input type="text" name="name">
                    </div>
                </div>
                <button class="btn btn-md btn-outline-dark" type="submit">Submit</button>
            </div>
        </form>
        <br>
    </section>
    <br>
    <section id="update" style="border:2px solid black; background-color: beige;">
        <h1 style="text-align: center; font-size: 2rem;">Update Mobile</h1>
        <form action="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <label for="name">Enter Product ID: &nbsp</label><input type="text" name="productID">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="name">Mobile Name: &nbsp</label><input type="text" name="updatemobile">
                            </div>
                            <div class="col-lg-6">
                                <label for="name">RAM: &nbsp</label><input type="text" name="updateRAM">
                            </div>
                            <div class="col-lg-6">
                                <label for="name">Description: &nbsp&nbsp&nbsp&nbsp</label><input type="text"
                                    name="description1">
                            </div>
                            <div class="col-lg-6">
                                <label for="name">ROM: &nbsp</label><input type="text" name="updateROM">
                            </div>
                            <div class="col-lg-6">
                                <label for="name">Band: &nbsp</label><input type="text" name="brand">
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-md btn-outline-dark" name="update" type="submit">update</button>
            </div>
        </form>
        <br>
    </section>
</body>

</html>
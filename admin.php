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
            
          $mobilename= $_POST['updatemobile'];
          $RAM = $_POST['updateRAM'];
          $description =$_POST['description1'];
          $ROM=$_POSt['updateROM'];
          $productid=$_POST['productID'];
          $brand=$_POST['brand'];     
          $image=$_FILES['Rimage']['name'];
          $destination="images/".basename($_FILES['Rimage']['name']); 
          $sql = "UPDATE products SET `Name`='$mobilename',`Description`='$description', `RAM`='$RAM',`ROM`='$ROM',`Brand`='$brand',`images`='$image' WHERE `ProductID`='$productid'";
          if ($conn->query($sql) === TRUE) {
            header("Location: http://localhost/Project 1/index.php");
            exit;
               }
         else {
                       echo "Error Entering database: " . $conn->error;
                } 

                     
         }
         
}

    ?>
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
if(isset($_REQUEST['delete'])){
    
    $pid = $_GET['ProductID'];
   
    $sql = "DELETE from products where `ProductID`='$pid'";
    $result = mysqli_query($conn,$sql);             
     }
 ?>
   <!-- Orders Code -->
   <?php
        if(isset($_REQUEST['orders'])){
            $orderID = $_POST['oid'];
            $status = $_POST['status'];

            $sql = "UPDATE orders SET `Status`='$status' WHERE `orderID`='$orderID'";
            $result=mysqli_query($conn,$sql);
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
        <form action="" method="POST">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <label for="ProductID">Enter Product ID: &nbsp</label><input type="text" name="ProductID">
                    </div>
                </div>
                <button class="btn btn-md btn-outline-dark" name="delete" type="submit">Submit</button>
            </div>
        </form>
        <br>
    </section>
    <br>
    <section id="update" style="border:2px solid black; background-color: beige;">
        <h1 style="text-align: center; font-size: 2rem;">Update Mobile</h1>
        <form action="" method="POST" enctype="multipart/form-data">
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
                    <label for="brand">Samsung</label>    <input type="radio" name="brand" value="samsung">
                    <label for="brand">Iphone</label>    <input type="radio" name="brand" value="iphone">
                    </div>
                            <div class="col-lg-6">
                        <label for="Rimage">Select Image</label>
                        <input name="Rimage" type="file">
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-md btn-outline-dark" name="update" type="submit">update</button>
            </div>
        </form>
        <br>
    </section>
    <section id="orders" style="border:2px solid black; background-color: beige;">
             <h1 style="text-align:center">Orders Section</h1>
             <div class="container">
             <form action="" method="POST">
                <label for="oid">Enter order ID: &nbsp</label><input type="text" name="oid" required>
                <label for="status">New Status: &nbsp</label><input type="text" name="status" required>
                <br><button class="btn btn-outline-dark btn-md" type="submit" name="orders">Submit</button>
             </form><br>
             <table border="2px">
                <tr>
                    <th>OrderID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>Product ID</th>
                </tr>
                <?php
                    $sql = "SELECT * from orders";
                    $result = $conn-> query($sql);
                    if($result-> num_rows > 0){
                        while($row = $result-> fetch_assoc()){
                            echo "<tr><td>".$row['orderID']."</td><td>".$row['Name']."</td><td>".$row['Address']."</td><td>".$row['Status']."</td><td>".$row['ProductID']."</td></tr>";
                        }
                    }
                ?>
             </table>    
             <br><br>
             </div>
    </section>

     
<footer style="margin-top: 3%">
    
    <br />
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <a style="color: grey;" href="logout.php">Logout</a>
          <br />
       
        </div>
        
     
        </div>
      </div>
    </div>
    <br />
  </footer>
</body>

</html>
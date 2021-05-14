<html lang3="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <title>INDIAN NATIONAL BANK</title>
  </head>

  <body>
  <?php
  include 'navbar.php';

  ?>

<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data interval="1000" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner" style="height: 900px; width: 100%;">
    <div class="carousel-item active">
      <img class="d-block w-100 img-fluid" src="image/bank.8.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block ">
        <h1 style="color: black;text-align: center;"><b>WELCOME TO INDIAN NATIONAL BANK</b>
        <p>Easy Transaction</p>
      </h1>
      </div>   
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 img-fluid" src="image/bank.7.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="center" style="color: black;text-align: center;"><b>Indian National Bank</b>
        <p>Save Money</p>
      </h1>
      </div>   
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 img-fluid" src="image/bank.3.jpg" alt="Third Slide">
      <div class="carousel-caption">
        <h1 class="center" style="color: black;text-align: center;"><b>Indian National Bank</b>
        <p>Earn Money</p>
      </h1>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
    <span class="sr-only">previous</span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidde="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  

  <section class="my-5"style="background-color: #82E0AA;">
    <div class="py-5">
  <h2 class="text-center" style="font-size: 40px;">About Us</h2> 
  </div>
  <div class="container-fluid">
    <div class="row">
   <div class="col-lg-6 co-md-6 col-12">
        <img src="image/bank.9.png" class="img-fluid">
      </div>
       <div class="col-lg-6 co-md-3 col-3">
        <h2 class="text-center" style="font-size: 40px;"> Basic Banking System </h2>
        <p class="text-center" style="font-size: 20px;">It is a web appication , where it demonstrate transferring money in a simple hassle free way.
        There are mainly two options such as Transfer Money and Transaction History to know the transaction history and view customers to transfer option to select an user from the customers list and then Transfer Money..</p>

        <a href="index.php" class="text-center" style="font-size: 23px;">know more</a>

      </div>
    </div>
  </div>

    <!--activity section-->
<section class="mt-2">
  <div class="py-5">
    <h2 class="text-center" style="font-size: 40px;">Banking Details</h2>
  </div>
  <div class="container-fluid">
    <div class="row activity text-center">
      <div class="col-md-3">
        <img src="image/transfermoney.png" class="img-fluid">
        <br>
        <a href="transfermoney.php"><button style="background-color: green;">Transfer Money</button></a>
      </div>
    
<div class="col-md-6">
        <img src="image/transactionhistory.jpg" class="img-fluid">
        <br>
        <a href="transactionhistory.php"><button style="background-color: green;" >Transaction History</button></a>
      </div>

      <div class="col-md-3">
        <img src="image/allcustomers.png" class="img-fluid">
        <br>
        <a href="transfermoney.php"><button style="background-color: green;">View all Customers</button></a>
      </div>
    </div>
  </div>
</div>

</section>
        
      
          
                
        

                  
                
    

      <footer class="text-center mt-5 py-2">
        <h3 class="pb-3 bg-dark">
        <p>&copy 2021. Made by <b>AARTI SAHARAWAT</b> <br> The Sparks Foundation</p>
      </h3>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
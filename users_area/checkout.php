<!-- Connect File -->
<?php

include('../includes/connect.php');
@session_start();
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ecommerce Website-checkout page</title>

  <!-- Bootstrap css link  -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <!-- font awsome link  -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


  <!-- css file link  -->
  <link rel="stylesheet" href="../style.css">

</head>

<body>
  <!-- navbar -->
  <div class="container-fluid p-0">
    <!-- first child -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <img src="../img/ekart_logo.png" alt="" class="logo">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./users_area/display_all.php">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="user_registration.php">Registers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            
          </ul>
          <form class="d-flex" action="search_product.php" method = "get">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
            <!-- <button class="btn btn-outline-light" type="submit">Search</button> -->
            <input type="submit" value ="Search" class= "btn btn-outline-primary" name="search_data_product" >
          </form>
        </div>
      </div>
    </nav>

         <!-- calling cart function -->
       


    <!-- second child -->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary ">
      <ul class="navbar-nav me-auto">
        

          <?php

if(!isset($_SESSION['user_email'])){
  echo " <li class='nav-item'>
  <a href='#' class='nav-link text-light'>Welcome Guest!</a>
</li>";
}else{
  echo "<li class='nav-item'>
  <a href='#' class='nav-link text-light'>Welcome ".$_SESSION['user_email']."</a>
</li>";
}

                if(!isset($_SESSION['user_email'])){
                  echo "<li class='nav-item'>
                  <a href='./user_login.php' class='nav-link text-light'>Login</a>
                </li>";
                }else{
                  echo "<li class='nav-item'>
                  <a href='logout.php' class='nav-link text-light'>Logout</a>
                </li>";
                }

          ?>
      </ul>
    </nav>

    <!-- third child -->
    <div class="bg-light">
      <h3 class="text-center">Here are our Top Products</h3>
      <p class="text-center">Communication is at the heart of e-commerce and community</p>
    </div>

    <!-- fourth child -->
    <div class="row px-3">
      <div class="col-md-12">
        <!-- products  -->

        <div class="row">
         
          <?php

          if(!isset($_SESSION['user_email'])){
            include('user_login.php');
          }else{
            include('payment.php');
          }

          ?>

        </div>
        <!-- col end -->
      </div>


    </div>

       <!-- last child -->
     <?php include("../includes/footer.php");
     ?>
  </div>



  <!-- Bootstrap js link  -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>

</body>

</html>
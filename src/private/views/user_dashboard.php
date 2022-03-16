<?php

// print_r($data);
// echo "This is a user's page";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $settings['url']?>/assets/css/home.css">
    <title>User Dashboard</title>

    <style>
       <?php require_once("../node_modules/bootstrap/dist/css/bootstrap.min.css"); ?>
    </style>
</head>
<body>
   <header class="container-fluid">    
  
   <nav class="navbar navbar-expand-lg navbar-light bg-light pb-3">
  <div class="container-fluid">
    <a class="navbar-brand  fs-2" href="#">Blog.com</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active " aria-current="page" href="#">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active " aria-current="page" href="<?php echo $settings['url'] ?>/index">Signout</a>
        </li>
        <li class="nav-item">
        <button type="button" class="btn btn-primary float-end ms-5">Add a Blog</button>
        </li>       
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
   </header>



    

   <!-- header ends -->
    
 <main class="d-flex">

 <!-- Sidebar -->

 <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="dashboard.php">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
              <span data-feather="file"></span>
              My Profile
            </a>
          </li>
        
          
        </ul>        
      </div>
    </nav>

   <!-- Blogs -->

  <div class="blog ">

 <div class="blogcards">

 
  <div class="card m-4 w-25 float-start" >
  <div class="card ">
        <img src="<?php echo $settings['siteurl'].'/assets/img/travel.jpg';?>" alt="" height="190px" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">First Blog</h5>   
    </div>

    <ul class="list-group list-group-flush">   
            <li class="list-group-item">My Travel Expeirence</li>
    </ul>
    <div class="card-body">
        <a href="#" class="btn btn-primary">Explore</a>            
    </div>
    </div>
  </div>
   

        <div class="card m-4 w-25 float-start" >
            <img src="<?php echo $settings['siteurl'].'/assets/img/travel.jpg';?>" alt="" height="190px" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">First Blog</h5>   
            </div>

            <ul class="list-group list-group-flush">   
                    <li class="list-group-item">My Travel Expeirence</li>
            </ul>
            <div class="card-body">
                <a href="#" class="btn btn-primary">Explore</a>            
            </div>
        </div>


        <div class="card m-4 w-25 float-start">
                <img src="<?php echo $settings['siteurl'].'/assets/img/travel.jpg';?>" alt="" height="190px" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">First Blog</h5>   
            </div>

            <ul class="list-group list-group-flush">   
                    <li class="list-group-item">My Travel Expeirence</li>
            </ul>
            <div class="card-body">
                <a href="#" class="btn btn-primary">Explore</a>            
            </div>
        </div>

        

    </div>

</div>








 </main>

<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted ">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
  

    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Company name
          </h6>
          <p class="ms-3">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat ullam enim quis recusandae eum, perferendis consequatur temporibus excepturi
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          
          
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
         
          
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4 ms-3">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> Lucknow, LKO 226021, IND</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="#">Cedcoss.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</body>
</html>
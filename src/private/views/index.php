<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>

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
          <a class="nav-link" href="/public/signup">SignUp</a>
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
    
 <main>
    <div class="main mt-5 container">
    <div id="content" class="row">
    <div class="col-sm-12 col-md-8 mt-3">
        <img src="<?php echo $settings['siteurl'].'/assets/img/bloghome.jpg';?>" alt="" height="300px">

    </div>
    
    <div class="col-sm-12 col-md-4">
    <form action="<?php $settings['siteurl'];?>/public/login" method="POST" method="post" class="mt-2">
    <h1 class="h3 mb-3 fw-normal">Sign In</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="userEmail">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="userPassword">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3 mt-2">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg border border-primary text-primary mt-4" type="submit" name="logIn">Sign in</button>
     
  </form>
    </div>
</div>


    </div>
 </main>

<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted mt-5">
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
<?php 
echo '<pre>';
// print_r($data);
// print_r($data['users']->id);
echo '</pre>';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Sign Up</title>    

    <!-- Bootstrap core CSS -->
    <link href="./node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <link rel="stylesheet" href="<?php $settings['siteurl'];?>/assets/css/home.css">
    
    

    <style>

       <?php require_once("../node_modules/bootstrap/dist/css/bootstrap.min.css"); ?>
  
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

     
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="./assets/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">

  <header class="container-fluid"> 
   

   <nav class="navbar navbar-expand-lg navbar-light bg-light pb-3">
  <div class="container-fluid">
    <a class="navbar-brand  fs-2" href="#">Blog.com</a>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active " aria-current="page" href="/public/index">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
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
    

<main class="form-signin w-50 m-auto mt-5">
  <form action= "<?php $settings['siteurl'];?>/public/update" method="POST">
    <h1 class="h3 mb-3 fw-normal">Edit User Details </h1>
    <input type="hidden" name="task" value="sign in">
    <div class="form-floating w-75 m-auto">
      <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="fullname" value="<?php echo $data['users']->name; ?>">
      <label for="floatingInput">Full Name</label>
    </div>
    <div class="form-floating w-75 m-auto">
      <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="username" value="<?php echo $data['users']->username; ?>">
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating w-75 m-auto">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" value="<?php echo $data['users']->email; ?>">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating w-75 m-auto">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" value="<?php echo $data['users']->password; ?>">
      <input type="hidden" name="updatid" value="<?php echo $data['users']->id; ?>">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <!-- <button class="w-75 btn btn-lg border border-primary text-primary mt-4" type="submit" name="submit">Sign Up</button>   -->
    <input type="submit" value="Update" class="w-75 btn btn-lg border border-primary text-primary mt-4" name="submit"> 
   
  </form>

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
<?php
  // echo '<pre>';
  // print_r($data['users']);
  // echo '</pre>';
  // echo '<h1>This is an Admin Dashboard</h1>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<style>
       <?php require_once("../node_modules/bootstrap/dist/css/bootstrap.min.css"); ?>
    </style>
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
      <form class="d-flex" method="POST" action = "<?php echo $settings['url'];?>/public/search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="searchinput">
        <button class="btn btn-outline-success" type="submit" name="searchbtn">Search</button>
      </form>
    </div>
  </div>
</nav>
   </header>

   <!-- header ends -->

   <main class="d-flex">

    <!-- Sidebar -->

    <div class="sidebar ">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="dashboard.php">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="">
              <span data-feather="file"></span>
              My Profile
            </a>
          </li> -->
        
          
        </ul>      
          
    </div>

    </div>
   <div class="main-right ms-5">

   <a class="btn btn-primary float-end me-4" href="<?php echo $settings['url']?>/public/addnewuser">Add a User</a>
  
  <table class="table m-auto mt-5 ">
    
      <tr><th  >ID</th> <th>Name</th> <th>Username</th> <th>Email</th>  <th>Password</th> <th>Role</th> <th>Status</th> <th> Actions </th>  <th> Permission </th></tr>

      <?php foreach ($data['users'] as $user) : ?>
        <form method="POST" action="/sample/permission">   <tr>
          <td> <?php echo $user->id; ?> </td>
          <td> <?php echo $user->name; ?> </td>
          <td> <?php echo $user->username; ?> </td>
          <td> <?php echo $user->email; ?> </td>
          <td> <?php echo $user->password; ?> </td>
          <td> <?php echo $user->role; ?> </td>
          <td> <?php echo $user->status; ?> </td>
          <td> <a href="<?php $settings['uril']?>/public/edit/<?php echo $user->id; ?>" class="border border-primary p-1">Edit</a> <a href="<?php $settings['uril']?>/public/delete/<?php echo $user->id; ?>"class="border border-danger p-1" >Delete</a> </td>
          <td> <input type="submit" name="submit" class="<?php if ($user->status == 'approved') { echo 'btn btn-success';} else { echo 'btn btn-danger';}?>" value="<?php echo $user->status;?>  "> 
               <input type="hidden" name="userid" value="<?php echo $user->id; ?>"></td>
          </tr>
        </form>
      <?php endforeach; ?>
    </table>
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

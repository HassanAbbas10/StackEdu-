<?php
// Set error reporting
error_reporting(E_ALL & ~E_WARNING);

// Set display_errors
ini_set('display_errors', 'Off');

session_start();

if(!isset($_SESSION['imagePath'])){
    $_SESSION['imagePath'] = "./icons/user.png"; 
}
if(!isset( $_SESSION['role'])){
  //for log in
  $_SESSION['id'] = 'id="loginBtn"';
  $_SESSION['dropdown'] ='';

}
if(isset( $_SESSION['role'])){
  if(($_SESSION['role'] == 'user')){
  $_SESSION['dropdown'] = 'data-bs-toggle="dropdown"'; 
  $_SESSION['id'] = '';

  }
}

if(!isset($_SESSION['login_failure'])){
  echo "
  DO SOMETHING HERE
  ";
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>StackEdu</title>
    <!-- bootstrap -->
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./css/styles.css" />
    <style>
     
    </style>
  </head>
  <body>
    <!-- Header -->
    <header class="mb-3 border-bottom">
      <div class="container text-white">
        <div
          class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start"
        >
          <a
            href="./main.php"
            class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none"
          >
            <img src="./logo/7.png" alt="" width="60" height="72" />
          </a>

          <ul
            class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 text-white"
          >
            <li>
              <a
                href="./courses.php"
                class="dropdown-toggle nav-link px-2 link-body-emphasis text-white"
                data-bs-toggle="dropdown"
                >Courses</a
              >
              <ul class="dropdown-menu text-small">
                <li><a class="dropdown-item" href="./courses.php">MERN Stack</a></li>
                <li><a class="dropdown-item" href="./courses.php">MEAN Stack</a></li>
                <li><a class="dropdown-item" href="./courses.php">Django Stack</a></li>
                <li><a class="dropdown-item" href="./courses.php">Laravel Stack</a></li>
                <li><a class="dropdown-item" href="./courses.php">Linux Stack</a></li>
                <!-- <li><hr class="dropdown-divider" /></li> -->
              </ul>
            </li>
        
            <li>
              <a href="./roadmaps.php" class="text-white nav-link px-2 link-body-emphasis"
                >Roadmaps</a
              >
            </li>
            <li>
              <a href="./about.php" class="text-white nav-link px-2 link-body-emphasis"
                >About Us</a
              >
            </li>
            <li>
              <a href="./contact.php" class="text-white nav-link px-2 link-body-emphasis"
                >Contact Us</a
              >
            </li>
          </ul>

          <form class=" col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
            <input
              type="search"
              class="form-control"
              placeholder="Search..."
              aria-label="Search"
            />
          </form>

          <div class="dropdown text-end">
            <a
              href="#"
              class="d-block link-body-emphasis text-decoration-none dropdown-toggle"
              <?php
              // this will work when the user is logged in
              // it's for drop down functionality
              echo $_SESSION['dropdown'] ;
              ?>
              aria-expanded="false"
            
              <?php
              // this will work when the user is logged out
              // it's for sign in div
              echo $_SESSION['id'] ;
              ?>
            >
            
              <img
                src="<?PHP echo $_SESSION['imagePath']; ?>"
                alt="mdo"
                width="32"
                height="32"
                class="rounded-circle border"
                />
              
            </a>
            <ul class="dropdown-menu text-small">
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><hr class="dropdown-divider" /></li>
              <li>
 
                <a class="dropdown-item" href="./log_Out.php"  > Log Out</a>
                
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>

  


<!-- LogIn -->








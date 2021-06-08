<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Grad School HTML5 Template</title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
<!--
    
TemplateMo 557 Grad School

https://templatemo.com/tm-557-grad-school

-->
  </head>

<header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="#"><em>School</em> ERP</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="home.php" class="external">Home</a></li>
        <li class="has-submenu"><a href="programs.php" class="external">Programs</a>
          <ul class="sub-menu">
            <li><a href="btech.php" class="external">B.Tech</a></li>
            <li><a href="mtech.php" class="external">M.Tech</a></li>
            <li><a href="phd.php" class="external">Ph.D</a></li>
          </ul>
        </li>
        <li><a href="about.php" class="external">About Us</a></li>
        <li class="has-submenu"><a href="#">Libraray</a>
          <ul class="sub-menu">
            <li><a href="book_info.php" class="external">Book Details</a></li>
            <li><a href="book_info_action.php" class="external">Book Search</a></li>
          </ul>
        </li>

        <!-- <li><a href="#section5">Video</a></li> -->
        <li><a href="contact.php" class="external">Contact</a></li>
        <?php
        session_start();
        if(isset($_SESSION['username']))
        {
        	?>
        <li><a href="logout.php" class="external">Logout</a></li>	
        <li><a href="student_dashboard.php" class="external">Dashboard</a></li>
        <?php
        }
        else
        {
        	?>
        <li class="has-submenu"><a href="#">Login</a>
          <ul class="sub-menu">
            <li><a href="student_login.php" class="external">Student</a></li>
            <li><a href="faculty_login.php" class="external">Faculty</a></li>
          </ul>
        </li>
        <?php
       }
       ?>
      </ul>
    </nav>
  </header>
  </html>
  
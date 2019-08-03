<!DOCTYPE html>
<html lang="en">
  <head>
    <title>OneSchool &mdash; Website by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <!-- <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet"> -->
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      
      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo mr-auto w-25"><a href="index.html">Tutolage</a></div>

          <div class="mx-auto text-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
              <li><a href="course-single.php" class="nav-link">Home</a></li>
                <li><a href="myCourse.php" class="nav-link">My Courses</a></li>
              </ul>
            </nav>
          </div>

          <div class="ml-auto w-25">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                <li class="cta"><a href="#contact-section" class="nav-link"><span>Contact Us</span></a></li>
              </ul>
            </nav>
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>
      
    </header>

    <div class="intro-section single-cover" id="home-section">
      
    <?php
            session_start();
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "tutolage";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            $username = $_SESSION['username'];
            $course_id = $_GET['course'];
            $_SESSION['username'] = $username;
            //echo $course_id;

        echo  '<div class="slide-1 "';
         echo 'data-stellar-background-ratio="0.5">';
          echo '<div class="container">';
          echo '<div class="row align-items-center">';
            echo '<div class="col-12">';
              echo '<div class="row justify-content-center align-items-center text-center">';
                echo '<div class="col-lg-6">';
                echo "<h1>" . $course_id . "</h1>";
                echo '<p data-aos="fade-up" data-aos-delay="100">4 Lessons / 12 Week &bullet; 2,193 students &bullet; <a href="#" class="text-white">6 comments</a></p>';
                echo '</div>';

                
             echo '</div>';
             echo '</div>';
            
             echo '</div>';
             echo '</div>';
             echo '</div>';
             echo '</div>';
            
            $conn->close();
            ?>
    
    
    
    
    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mb-5">

            <div class="mb-5">
              <h3 class="text-black">Course Description</h3>
              <p class="mb-4">
                <strong class="text-black mr-3">Schedule: </strong> MWF 9:30 - 11:00
              </p>


              <?php
            //session_start();
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "tutolage";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            //$course_id = $_SESSION['course_id'];
            //$course_id = $_GET['course'];
            $fee = 0;
            $course_instructor = "";
            $sql = "SELECT course_name, fee, instructor,course_description FROM courses WHERE course_id='$course_id'";
					$result = $conn->query($sql);
					
					if ($result->num_rows > 0){
						while($row = $result->fetch_assoc()){
              $course_instructor = $row["instructor"];
              $fee = $row["fee"];
              echo '<p>'.$row["course_description"].'</p>';
              echo '<div class="row mb-4">';
              echo '<div class="col-md-6">';
              echo '<img src="images/img_1.jpg" alt="Image" class="img-fluid rounded">';
              echo '</div>';
              echo '<div class="col-md-6">';
              echo '<img src="images/img_2.jpg" alt="Image" class="img-fluid rounded">';
              echo '</div>';
              echo '</div>';
              echo '<p class="mt-4"><a a href="applyCourse.php?course='.$course_id.'"$course">Admission</a></p>';
              echo '</div>';
              
						}
					}
					else {
						echo "0 results";
					}
        
            
            $conn->close();
            ?>
    



            
     
    <footer class="footer-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>About Tutolage</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro consectetur ut hic ipsum et veritatis corrupti. Itaque eius soluta optio dolorum temporibus in, atque, quos fugit sunt sit quaerat dicta.</p>
          </div>

          <div class="col-md-3 ml-auto">
            <h3>Links</h3>
            <ul class="list-unstyled footer-links">
              <li><a href="#">Home</a></li>
              <li><a href="#">Courses</a></li>
              <li><a href="#">Programs</a></li>
              <li><a href="#">Teachers</a></li>
            </ul>
          </div>

          <div class="col-md-4">
            <h3>Subscribe</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt incidunt iure iusto architecto? Numquam, natus?</p>
            <form action="#" class="footer-subscribe">
              <div class="d-flex mb-5">
                <input type="text" class="form-control rounded-0" placeholder="Email">
                <input type="submit" class="btn btn-primary rounded-0" value="Subscribe">
              </div>
            </form>
          </div>

        </div>

        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
        
      </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  
    
  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  
  <script src="js/main.js"></script>
    
  </body>
</html>
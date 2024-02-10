<?php
session_start();
include('connection.php');

//logout
//include('logout.php');
//remember me
//include('8.rememberme.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Airline Ticket Reservation</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="styling.css" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Arvo:ital@0;1&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: 'Arvo', serif;
            background-color: black;
        }
        .carouselsize{
  height: 100vh;
}
        .adminbtn{
            margin-left: 10px;
            margin-top: 50px;
        }
        .login, .admin{
          color: white;
        }
        .login:hover{
          color: white;
          background-color: green;
        }
        .admin:hover{
          background-color: red;
          color: white;
        }
        .signup{
          color: white;
          margin-bottom: 200px;
          background-color: rgb(5,85,141);
        }
        .signup:hover{
          color: white;
          background-color: green;
        }
        .featurette-divider {
    margin: 5rem 0;
}
hr {
    margin: 1rem 0;
    color: inherit;
    border: 0;
    border-top: var(--bs-border-width) solid;
    opacity: .25;
}
hr {
    display: block;
    unicode-bidi: isolate;
    margin-block-start: 0.5em;
    margin-block-end: 0.5em;
    margin-inline-start: auto;
    margin-inline-end: auto;
    overflow: hidden;
    border-style: inset;
    border-width: 1px;
}
.featurette{
  background-color: black;
  color: white;
}
.info{
  background-color: black;
  margin-bottom: 50px;
}  
.line{
  margin-top: 0;
  background-color: black;
}
.lead{
  font-weight: lighter;
  color: #D4D3D1;
  font-style: italic;
} 
.fw-normal{
  color:#DEE2E5;
}
/* Common styles for all modal content */
.modal-content {
        background: rgba(36, 67, 131, 0.67);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        border: 1px solid rgba(36, 67, 131, 1);
    }

    /* Specific styles for each modal */
    #loginmodal .modal-title,
    #signupmodal .modal-title,
    #forgotpasswordmodal .modal-title {
        color: white; /* Change text color for better visibility */
    }

    /* Optional: Adjust padding for better visual appearance */
    .modal-body, .modal-footer {
        padding: 15px;
    }

    /* Optional: Style buttons inside the modal footer */
    .modal-footer button {
        background: rgba(36, 67, 131, 0.8);
        border: 1px solid rgba(36, 67, 131, 1);
        color: white;
        border-radius: 8px;
        padding: 10px 20px;
        cursor: pointer;
    }

    .modal-footer button.btn-secondary {
        background: rgba(36, 67, 131, 0.2);
        border: 1px solid rgba(36, 67, 131, 0.5);
        color: white;
        border-radius: 8px;
        padding: 10px 20px;
        cursor: pointer;
    }
    .form-check-label, .green{
      color: white;
    }
    .navbar-nav li:hover {
        border-bottom: 1px solid white; 
    }

    .navbar-nav li a {
        transition: border-bottom 0.3s; /* Add a smooth transition effect */
    }
    
    </style>

</head>
<body>

<!--cntrl space for classes or >cache css-->


    <!--navbar-->

    <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">Airline Ticket Reservation</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarcollapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="2.feedbackfront.php">Feedback</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#" tabindex="-1" aria-disabled="true">About</a>
                </li>
            </ul>

            <ul class="navbar-nav navbar-right">
                <li class="nav-item">
                <button type="button" class="btn admin" data-target="#signupmodal" data-toggle="modal" id="admin">Admin</button>
                    <!--<a class="nav-link text-white login" type="button" href="#loginmodal" data-toggle="modal">Login</a>-->
                </li>
            </ul>

            <ul class="navbar-nav navbar-right">
                <li class="nav-item">
                <button type="button" class="btn login" data-target="#loginmodal" data-toggle="modal" id="login">Login</button>
                    <!--<a class="nav-link text-white login" type="button" href="#loginmodal" data-toggle="modal">Login</a>-->
                </li>
            </ul>


            
        </div>
    </div>
</nav>
    
    <!--Carousel-->
    <div class="info">
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
      
  <div class="carousel-indicators">
  
    <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="3000">
      <img src="images/b1.jpg" class="d-block w-100 carouselsize" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5> <button type="button" class="btn btn-lg signup" data-target="#signupmodal" data-toggle="modal">Signup</button></h5>
        
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="images/b2.webp" class="d-block w-100 carouselsize" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5> <button type="button" class="btn btn-lg signup " data-target="#signupmodal" data-toggle="modal">Signup</button></h5>
        
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="images/b3.jpg" class="d-block w-100 carouselsize" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5> <button type="button" class="btn btn-lg signup" data-target="#signupmodal" data-toggle="modal">Signup</button></h5>
        
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="images/b4.jpg" class="d-block w-100 carouselsize" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5> <button type="button" class="btn btn-lg signup" data-target="#signupmodal" data-toggle="modal">Signup</button></h5>
        
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

<!--details-->
<div class="info">
<hr class="featurette-divider line">
<div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Agra</h2>
        <p class="lead">Discover the timeless beauty of the Taj Mahal with us. Soar to new heights and witness the iconic masterpiece that captures the essence of love and architectural splendor. Book your journey to India's crown jewel and let the marvel unfold from above the clouds.</p>
      </div>
      <div class="col-md-5">
      <img src="images/d1.jpg" alt="Image Description" width="500" height="500"class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto">
      
  </div>
      </div>
    <hr class="featurette-divider">
<div class="row featurette">
<div class="col-md-5">
<img src="images/d2.webp" alt="Image Description" width="500" height="500"class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto">
       </div>
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Paris</h2>
        <p class="lead">Elevate your senses with us and experience the allure of Paris. Fly with us to witness the majestic Eiffel Tower, an iconic symbol of romance and architectural elegance. Let your journey take flight, and marvel at the City of Love from the skies.</p>
      </div>
    </div>
    <hr class="featurette-divider">
<div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">London</h2>
        <p class="lead">Embark on a journey with us to the heart of London. Explore the rich history and modern charm as you soar above the iconic London Bridge. Book your flight and traverse the captivating skyline, where tradition and innovation meet in perfect harmony.</p>
      </div>
      <div class="col-md-5">
      <img src="images/d3.jpg" alt="Image Description" width="500" height="500"class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto">
      </div>
    </div>
</div>
<div class="info">
<hr class="featurette-divider line">
<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
      <img src="images/l1.jpg" alt="Placeholder" width="140" height="140" class="rounded-circle" style="background-color: var(--bs-secondary-color);">

      <h2 class="fw-normal">ChatGPT</h2>
        <p class="lead">"Your airline ticket website is brilliantly designed, making booking flights a seamless and enjoyable experience. Impressive work!"</p>
        
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img src="images/l2.jpg" alt="Placeholder" width="140" height="140" class="rounded-circle" style="background-color: var(--bs-secondary-color);">

      <h2 class="fw-normal">Gemini</h2>
        <p class="lead">"Brilliant design! Booking flights is seamless & enjoyable. Impressive!"</p>
        
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img src="images/l3.png" alt="Placeholder" width="140" height="140" class="rounded-circle" style="background-color: var(--bs-secondary-color);">

      <h2 class="fw-normal">Copilot</h2>
        <p class="lead">"Your website is a masterpiece of design and functionality. It offers a smooth and hassle-free experience for travelers."</p>
        
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

    
    
  </div>


</div>
    <!--LOGIN Form-->
    
    <form method="post" id="loginform">
        
        
        <div class="modal fade" id="loginmodal" tabindex="-1" aria-labelledby="hid" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="hid">Login:</h4>
          
          
        <button class="btn-close" data-dismiss="modal"></button>


          
          
      </div>
      <div class="modal-body">
          
          <!--login message from php file-->
          <div id="loginmessage"></div>
          
          

    <div class="form-group mb-3">
        <label for="loginemail" class="visually-hidden">Email</label>
        <input class="form-control" type="email" name="loginemail" placeholder="Email Address" maxlength="50" id="loginemail">
    </div>

    <div class="form-group mb-3">
        <label for="loginpassword" class="visually-hidden">Password</label>
        <input class="form-control" type="password" name="loginpassword" placeholder="Password" maxlength="30" id="loginpassword">
        
        <div class="mt-4">
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="rememberme" id="rememberme">
        <label class="form-check-label" for="rememberme">Remember me</label>
        <a class="float-end" style="cursor: pointer" data-dismiss="modal" data-target="#forgotpasswordmodal" data-toggle="modal">Forgot Password?</a>
    </div>
</div>


    </div>
          

</div>

        
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-default pull-left" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#signupmodal">Register</button>-->
          <button type="button" class="btn btn-default me-auto" data-dismiss="modal" data-target="#signupmodal" data-toggle="modal">
                  Register
                </button>



          <input class="btn green" name="login" type="submit" value="Login">
        <!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>-->
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>


        
      </div>
    </div>
  </div>
</div> 
    
    </form>
    
    <!--Signup Form-->
    <form method="post" id="signupform">
        
        
        <div class="modal fade" id="signupmodal" tabindex="-1" aria-labelledby="hid" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="hid">Sign up to book your first ticket!</h4>
        <button class="btn-close" data-dismiss="modal"></button>
          <!--<button class="close" data-dismiss="modal">&times;</button>
-->

      </div>
      <div class="modal-body">
          
          <!--Signup message from php file-->
          <div id="signupmessage"></div>
          
          
    <div class="form-group mb-3">
        <label for="username" class="visually-hidden">Username</label>
        <input class="form-control" type="text" name="username" placeholder="Username" maxlength="30" id="username">
    </div>

    <div class="form-group mb-3">
        <label for="email" class="visually-hidden">Email</label>
        <input class="form-control" type="email" name="email" placeholder="Email Address" maxlength="50" id="email">
    </div>

    <div class="form-group mb-3">
        <label for="password" class="visually-hidden">Password</label>
        <input class="form-control" type="password" name="password" placeholder="Password" maxlength="30" id="password">
    </div>

    <div class="form-group mb-3">
        <label for="password2" class="visually-hidden">Confirm Password</label>
        <input class="form-control" type="password" name="password2" placeholder="Confirm Password" maxlength="30" id="password2">
    </div>
</div>

        
      <div class="modal-footer">
          <input class="btn green" name="signup" type="submit" value="Sign up">
<!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>-->
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

        
      </div>
    </div>
  </div>
</div>
        
    
    </form>
    
    
    <!--Forgot Password Form-->
    
    <form method="post" id="forgotpasswordform">
        
        
        <div class="modal fade" id="forgotpasswordmodal" tabindex="-1" aria-labelledby="hid" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="hid">Forgot Password?Enter your email address:</h4>
        <button class="btn-close" data-dismiss="modal"></button>

      </div>
      <div class="modal-body">
          
          <!--forgot password  message from php file-->
          <div id="forgotpasswordmessage"></div>
          
          

    <div class="form-group mb-3">
        <label for="forgotemail" class="visually-hidden">Email</label>
        <input class="form-control" type="email" name="forgotemail" placeholder="Email Address" maxlength="50" id="forgotemail">
    </div>         

</div>

        
      <div class="modal-footer">
         
         <!-- <button type="button" class="btn btn-default float-start" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#signupmodal">Register</button>-->
          <button type="button" class="btn btn-default me-auto" data-dismiss="modal" data-target="#signupmodal" data-toggle="modal">
                  Register
                </button>




          <input class="btn green" name="forgotpassword" type="submit" value="Submit">
        <!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>-->
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>


        
      </div>
    </div>
  </div>
</div> 
    
    </form>
    
    
    
    <!--Footer-->
    <hr class="featurette-divider"> 
    <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p class="lead">RA2211003010<strong>167</strong>, RA2211003010<strong>182</strong>, RA2211003010<strong>185</strong> &copy;<?php
                $today = date("Y");
                    echo $today;
                ?></p></a></p>
  </footer>

<script src="js/bootstrap.bundle.js"></script>
    <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    

<!-- Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js"></script>
    <script src="1.index.js"></script>
    


</body>
</html>

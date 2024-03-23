
<?php
session_start();

include('connection.php');
if (isset($_POST['book_but'])) {
    echo "book Form submitted.";
} else {
    echo "book Form not submitted.";
}
//logout
include('logout.php');
//remember me
include('8.rememberme.php');



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MaanaFly</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="styling.css" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Arvo:ital@0;1&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: 'Arvo', serif;
            background: -webkit-linear-gradient(to right, #1C2D5A, #683381);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #1C2D5A, #683381); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
        .carouselsize{
  height: 100vh;
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
        color: white; 
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
    .nav-link{
        color: white;
    }
    .nav-link:hover{
        color: white;
    }
	.container-fluid{
		background:;
	}
    footer {

bottom: 0;
width: 100%;
height: 2.5rem;            
}
form.logout_form {
	background: transparent;
	padding: 10px !important;
}
	h1,h2,h3,h4,h5,h6{
	font-family: 'Montserrat', sans-serif;
	
}
h5.text-light {
	margin-top: 10px;
}
.main-col {
    padding: 30px;
    background-color: whitesmoke;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);  
    margin-top: 50px;   
}
.pass-form {
    background-color: white;
    border: 5px dotted #607d8b;
    padding: 20px;
    margin-top: 30px;
}

body {
  background: #bdc3c7;  /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #1C2D5A, #683381);  /* Chrome 10-25, Safari 5.1-6 */
  background:  linear-gradient(to right, #1C2D5A, #683381); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
@font-face {
  font-family: 'product sans';
  src: url('assets/css/Product Sans Bold.ttf');
  }
  h1 {
    font-size: 42px !important;
    margin-bottom: 20px;  
    font-family :'product sans' !important;
    font-weight: bolder;
  }
  input {
    border :0px !important;
    border-bottom: 2px solid #424242 !important;
    color :#424242 !important;
    border-radius: 0px !important;
    font-weight: bold !important;   
    margin-bottom: 10px;
  }
  label {
    color : #828282 !important;
    font-size: 19px;
  }  
@media screen and (max-width: 900px){
    body {
  background: #bdc3c7;  /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #1C2D5A, #683381);  /* Chrome 10-25, Safari 5.1-6 */
  background:  linear-gradient(to right, #1C2D5A, #683381); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}  
}
    </style>

</head>
   
<body>
    <!--navbar-->

    <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">MaanaFly</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarcollapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="2.homepage.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="12.myflights.php" tabindex="-1" aria-disabled="true">My Flights</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="12.ticket.php" tabindex="-1" aria-disabled="true">Tickets</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="2.feedbackfront.php">Feedback</a>
                </li>
                
            </ul>

            <ul class="navbar-nav navbar-right">
            <li class="nav-item">
                    <a class="nav-link" href="2.userprofile.php">Logged in as <b><?php echo $_SESSION['username']?></b></a>
                </li>
            </ul>

            <ul class="navbar-nav navbar-right">
            <li class="nav-item">
                    <a class="nav-link" href="1.index.php?logout=1">Log out</a>
                </li>
            </ul>

        </div>
    </div>
</nav>
<?php
    if(isset($_GET['error'])) {
        if($_GET['error'] === 'invdate') {
          echo '<script>alert("Invalid date of birth")</script>';
      } else if($_GET['error'] === 'moblen') {
          echo '<script>alert("Invalid contact info")</script>';
      } else if($_GET['error'] === 'sqlerror') {
          echo"<script>alert('Database error')</script>";
      }
    }
    ?>
<?php 
$flight_id = '';
$passengers = '';
$price = '';
$class = '';
$type = '';
$ret_date = '';
if(isset($_SESSION['user_id']) && isset($_POST['book_but'])) {
    $flight_id = $_POST['flight_id'];
    $passengers = $_POST['passengers']; 
    $price = $_POST['price'];
    $class = $_POST['class'];
    $type = $_POST['type'];
    $ret_date = $_POST['ret_date'];
?> 

<div class="container mb-5">
    <div class="col-md-12 main-col">
        <h1 class="text-center text-secondary">PASSENGER DETAILS</h1>  
        <form action="2.passdetailinc.php" class="needs-validation mt-4" 
            method="POST">

            <input type="hidden" name="type" value="<?php echo $type; ?>">   
            <input type="hidden" name="ret_date" value="<?php echo $ret_date; ?>">   
            <input type="hidden" name="class" value="<?php echo $class; ?>">   
            <input type="hidden" name="passengers" value="<?php echo $passengers; ?>">   
            <input type="hidden" name="price" value="<?php echo $price; ?>">   
            <input type="hidden" name="flight_id" value="<?php echo $flight_id; ?>">   
        <?php for($i=1;$i<=$passengers;$i++) {
            echo'   
            <div class="pass-form">  
            <div class="form-row">
                <div class="col-md">
                    <div class="input-group">
                        <label for="firstname'.$i.'">Firstname</label>
                        <input type="text" name="firstname[]" id="firstname'.$i.'" class="pl-0 pr-0" 
                            required style="width: 100%;">
                    </div>
                </div>
                <div class="col-md">
                    <div class="input-group">
                        <label for="midname'.$i.'">Middlename</label>
                        <input type="text" name="midname[]" id="midname'.$i.'" class="pl-0 pr-0"
                            required style="width: 100%;">
                    </div>
                </div>

                <div class="col-md">
                    <div class="input-group">
                        <label for="lastname'.$i.'">Lastname</label>
                        <input type="text" name="lastname[]" id="lastname'.$i.'" class="pl-0 pr-0"
                             required style="width: 100%;">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md">
                    <div class="input-group">
                        <label for="mobile'.$i.'">Contact No</label>
                        <input type="number" name="mobile[]" min="0" id="mobile'.$i.'" 
                            required>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group mt-3"> 
                        <label for="dob">DOB</label>
                        <input id="date" name="date[]" type="date"
                             required>
                    </div>
                </div>
            </div>
            </div>'; }  ?>    
            <div class="col text-center">
                <button name="pass_but" type="submit" 
                class="btn btn-success mt-4">
                <div style="font-size: 1.5rem;">
                <i>Proceed</i>   
                </div>
                </button>
            </div>         
        </form>              
    </div>
    </div>
    <?php  
} // Add the closing tag here
?>

    <!--Footer-->
    <hr class="featurette-divider"> 
    <footer class="container">
    <p class="lead">RA2211003010<strong>167</strong>, RA2211003010<strong>182</strong>, RA2211003010<strong>185</strong> &copy;<?php
                $today = date("Y");
                    echo $today;
                ?></p></a></p>
  </footer>

  <script>
$(document).ready(function(){
  $('.input-group input').focus(function(){
    me = $(this) ;
    $("label[for='"+me.attr('id')+"']").addClass("animate-label");
  }) ;
  $('.input-group input').blur(function(){
    me = $(this) ;
    if ( me.val() == ""){
      $("label[for='"+me.attr('id')+"']").removeClass("animate-label");
    }
  }) ;
});
</script>
</body>
</html>
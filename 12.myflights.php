<?php include_once 'helpers/helper.php'; ?>
<?php
session_start();
if(isset($_SESSION['user_id'])) {   
    require 'connection.php';}
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
@font-face {
  font-family: 'product sans';
  src: url('assets/css/Product Sans Bold.ttf');
}
div.out {
    padding: 30px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); 
    border-top-left-radius: 20px;
    border-bottom-right-radius: 20px;
}
.city {
    font-size: 24px;
}
p {
    margin-bottom: 10px;
    font-family: product sans;
}
.alert {
    /* font-family: 'Courier New', Courier, monospace; */
    font-weight: bold;
}
.date {
    font-size: 24px;
}
.time {
    font-size: 27px;
    margin-bottom: 0px;
}
.stat {
    font-size: 17px;
}
h1 {
    font-weight: lighter !important;
    font-size: 45px !important;
    margin-bottom: 20px;  
    font-family :'product sans' !important;
    font-weight: bolder;
  }
.row {
    background-color: white;
}
@font-face {
  font-family: 'product sans';
  src: url('assets/css/Product Sans Bold.ttf');
  }

 </style>

</head>
<body>
 <!--navbar-->

    <nav class="navbar navbar-expand-lg ">
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

<div class="container">
    <h1 class="text-center text-light mt-4 mb-4">FLIGHT STATUS</h1>
    <?php 
    $stmt_t = mysqli_stmt_init($link);
    $sql_t = 'SELECT * FROM ticket WHERE user_id=?';
    $stmt_t = mysqli_stmt_init($link);
    if(!mysqli_stmt_prepare($stmt_t,$sql_t)) {
        header('Location: 12.ticket.php?error=sqlerror');
        exit();            
    } else {
        mysqli_stmt_bind_param($stmt_t,'i',$_SESSION['user_id']);            
        mysqli_stmt_execute($stmt_t);
        $result_t = mysqli_stmt_get_result($stmt_t);
        while($row_t = mysqli_fetch_assoc($result_t)) {     
            $stmt = mysqli_stmt_init($link);
            $sql = 'SELECT * FROM passenger_profile WHERE passenger_id=?';
            $stmt = mysqli_stmt_init($link);
            if(!mysqli_stmt_prepare($stmt,$sql)) {
                header('Location: 12.myflights.php?error=sqlerror');
                exit();            
            } else {
                mysqli_stmt_bind_param($stmt,'i',$row_t['passenger_id']);            
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if ($row = mysqli_fetch_assoc($result)) {
                    $sql_f = 'SELECT * FROM flight WHERE flight_id=? ';
                    $stmt_f = mysqli_stmt_init($link);
                    if(!mysqli_stmt_prepare($stmt_f,$sql_f)) {
                        header('Location: 12.myflights.php?error=sqlerror');
                        exit();            
                    } else {
                        mysqli_stmt_bind_param($stmt_f,'i',$row_t['flight_id']);            
                        mysqli_stmt_execute($stmt_f);
                        $result_f = mysqli_stmt_get_result($stmt_f);
                        if($row_f = mysqli_fetch_assoc($result_f)) {
                            $date_time_dep = $row_f['departure'];
                            $date_dep = substr($date_time_dep,0,10);
                            $time_dep = substr($date_time_dep,10,6) ;    
                            $date_time_arr = $row_f['arrivale'];
                            $date_arr = substr($date_time_arr,0,10);
                            $time_arr = substr($date_time_arr,10,6) ;      
                            if($row_f['status'] === '') {
                                $status = "Not yet Departed";
                                $alert = 'alert-primary';
                            } else if($row_f['status'] === 'dep') {
                                $status = "Departed";
                                $alert = 'alert-info';
                            } else if($row_f['status'] === 'issue') {
                                $status = "Delayed";
                                $alert = 'alert-danger';
                            } else if($row_f['status'] === 'arr') {
                                $status = "Arrived";
                                $alert = 'alert-success';
                            }                           
                            echo '
                            <div class="row out mb-5 ">
                                <div class="col-md-4 order-lg-3 order-md-1"> ';    
                                if($row_f['status'] === 'arr') {
                                    echo '
                                    <div class="row">
                                        <div class="col-1 p-0 m-0">
                                            <i class="fa fa-circle mt-4 text-success"
                                                style="float: right;"></i>
                                        </div>                            
                                        <div class="col-10 p-0 m-0 mt-3" style="float: right;">
                                            <hr class="bg-success">
                                        </div>                            
                                        <div class="col-1 p-0 m-0">
                                            <i class="mt-3 text-success"
                                                ><img width="50" height="50" src="https://img.icons8.com/water-color/50/fighter-jet.png" alt="fighter-jet"/></i>
                                        </div>                                    
                                    </div>                            
                                    ';
                                } else {
                                    echo '
                                    <div class="row">
                                        <div class="col-1 p-0 m-0">
                                            <i class="mt-3 text-success"
                                                style="float: right;"><img width="50" height="50" src="https://img.icons8.com/water-color/50/fighter-jet.png" alt="fighter-jet"/></i>
                                        </div>
                                        <div class="col-10 p-0 m-0 mt-3" style="float: right;">
                                            <hr style="background-color: lightgrey;">
                                        </div>   
                                        <div class="col-1 p-0 m-0">
                                            <i class="fa fa-circle mt-4"
                                                style="color: lightgrey;"></i>
                                        </div>                             
                                    </div>                            
                                    ';
                                }                     
                                    echo '
                                </div>
                        
                                <div class="col-md-3 col-6 order-md-2 pl-0 text-center 
                                    order-lg-2 card-dep">
                                    <p class="city">'.$row_f['source'].'</p>
                                    <p class="stat">Scheduled Departure:</p>
                                    <p class="date">'.$date_dep.'</p>                
                                    <p class="time">'.$time_dep.'</p>
                                </div>        
                                <div class="col-md-3 col-6 order-md-4 pr-0 text-center 
                                    order-lg-4 card-arr" 
                                    style="float: right;">
                                    <p class="city">'.$row_f['Destination'].'</p>
                                    <p class="stat">Scheduled Arrival:</p>
                                    <p class="date">'.$date_arr.'</p>                
                                    <p class="time">'.$time_arr.'</p>          
                                </div>
                                <div class="col-lg-2 order-md-12">
                                    <div class="alert '.$alert.' mt-5 text-center" 
                                        role="alert">
                                        '.$status.'
                                    </div>
                                </div>          
                            </div> ';                     
                        }
                    }            
                }
            }    
        }
    }
    ?>    
</div>

    <!--Footer-->
    <hr class="featurette-divider"> 
    <footer class="container">
    <p class="lead">RA2211003010<strong>167</strong>, RA2211003010<strong>182</strong>, RA2211003010<strong>185</strong> &copy;<?php
                $today = date("Y");
                    echo $today;
                ?></p></a></p>
  </footer>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
  
<script src="js/bootstrap.bundle.js"></script>
    

<!-- Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js"></script>
    
    
<script src="assets/js/easyResponsiveTabs.js" type="text/javascript"></script>

</body>
</html>
<?php include_once 'helpers/helper.php'; ?>
<?php
session_start();

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
h2.brand {
    /* font-style: italic; */
    font-size: 27px !important;
}
.vl {
  border-left: 6px solid #424242;
  height: 400px;
}
p.head {
    text-transform: uppercase;
    font-family: arial;
    font-size: 17px;
    margin-bottom: 10px ;
    color: grey;  
}
p.txt {
    text-transform: uppercase;
    font-family: arial;
    font-size: 25px;
    font-weight: bolder;
}
.out {
    border-top-left-radius: 25px;
    border-bottom-left-radius: 25px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);  
    background-color: white;
    padding-left: 25px;
    padding-right: 0px;
    padding-top: 20px;
}
h2 {
    font-weight: lighter !important;
    font-size: 35px !important;
    margin-bottom: 20px;  
    font-family :'product sans' !important;
    font-weight: bolder;
}
.text-light2 {
    color: #d9d9d9;
}
h3 {
    /* font-weight: lighter !important; */
    font-size: 21px !important;
    margin-bottom: 20px;  
    font-family: Tahoma, sans-serif;
    font-weight: lighter;
}
h1 {
    font-weight: lighter !important;
    font-size: 45px !important;
    margin-bottom: 20px;  
    font-family :'product sans' !important;
    font-weight: bolder;
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

<?php if(isset($_SESSION['user_id'])) {   
    require 'connection.php';   
    
    if(isset($_POST['cancel_but'])) {
        $ticket_id = $_POST['ticket_id'];
        $stmt = mysqli_stmt_init($link);
        $sql = 'SELECT * FROM ticket WHERE ticket_id=?';
        $stmt = mysqli_stmt_init($link);
        if(!mysqli_stmt_prepare($stmt,$sql)) {
            header('Location: 12.ticket.php?error=sqlerror');
            exit();            
        } else {
            mysqli_stmt_bind_param($stmt,'i',$ticket_id);            
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {   
              $sql_pas = 'DELETE FROM passenger_profile WHERE passenger_id=? 
                ';
              $stmt_pas = mysqli_stmt_init($link);
              if(!mysqli_stmt_prepare($stmt_pas,$sql_pas)) {
                  header('Location: 12.ticket.php?error=sqlerror');
                  exit();            
              } else {
                  mysqli_stmt_bind_param($stmt_pas,'i',$row['passenger_id']);            
                  mysqli_stmt_execute($stmt_pas);
                  $sql_t = 'DELETE FROM ticket WHERE ticket_id=?';
                  $stmt_t = mysqli_stmt_init($link);
                  if(!mysqli_stmt_prepare($stmt_t,$sql_t)) {
                      header('Location: 12.ticket.php?error=sqlerror');
                      exit();            
                  } else {
                      mysqli_stmt_bind_param($stmt_t,'i',$row['ticket_id']);            
                      mysqli_stmt_execute($stmt_t);
                  }                  
              }              
            }
        }        
    }
    
    ?>     
    <div class="container mb-5"> 
    <h1 class="text-center text-light mt-4 mb-4">E-TICKETS</h1>

      <?php 
      $stmt = mysqli_stmt_init($link);
      $sql = 'SELECT * FROM ticket WHERE user_id=?';
      $stmt = mysqli_stmt_init($link);
      if(!mysqli_stmt_prepare($stmt,$sql)) {
          header('Location: 12.ticket.php?error=sqlerror');
          exit();            
      } else {
          mysqli_stmt_bind_param($stmt,'i',$_SESSION['user_id']);            
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          while ($row = mysqli_fetch_assoc($result)) {   
            $sql_p = 'SELECT * FROM Passenger_profile WHERE passenger_id=?';
            $stmt_p = mysqli_stmt_init($link);
            if(!mysqli_stmt_prepare($stmt_p,$sql_p)) {
                header('Location: ticket.php?error=sqlerror');
                exit();            
            } else {
                mysqli_stmt_bind_param($stmt_p,'i',$row['passenger_id']);            
                mysqli_stmt_execute($stmt_p);
                $result_p = mysqli_stmt_get_result($stmt_p);
                if($row_p = mysqli_fetch_assoc($result_p)) {
                  $sql_f = 'SELECT * FROM flight WHERE flight_id=?';
                  $stmt_f = mysqli_stmt_init($link);
                  if(!mysqli_stmt_prepare($stmt_f,$sql_f)) {
                      header('Location: ticket.php?error=sqlerror');
                      exit();            
                  } else {
                      mysqli_stmt_bind_param($stmt_f,'i',$row['flight_id']);            
                      mysqli_stmt_execute($stmt_f);
                      $result_f = mysqli_stmt_get_result($stmt_f);
                      if($row_f = mysqli_fetch_assoc($result_f)) {
                        $date_time_dep = $row_f['departure'];
                        $date_dep = substr($date_time_dep,0,10);
                        $time_dep = substr($date_time_dep,10,6) ;    
                        $date_time_arr = $row_f['arrivale'];
                        $date_arr = substr($date_time_arr,0,10);
                        $time_arr = substr($date_time_arr,10,6) ; 
                        if($row['class'] === 'E') {
                            $class_txt = 'ECONOMY';
                        } else if($row['class'] === 'B') {
                            $class_txt = 'BUSINESS';
                        }
                        echo '
                        <div class="row mb-5">                                                         
                        <div class="col-8 out">
                            <div class="row ">                                                     
                                <div class="col">
                                    <h2 class="text-secondary mb-0 brand">
                                        MaanaFly</h2> 
                                </div>
                                <div class="col">
                                    <h2 class="mb-0">'.$class_txt.' CLASS</h2>
                                </div>
                            </div>
                            <hr>
                            <div class="row mb-3">  
                                <div class="col-4">
                                    <p class="head">Airline</p>
                                    <p class="txt">'.$row_f['airline'].'</p>
                                </div>            
                                <div class="col-4">
                                    <p class="head">from</p>
                                    <p class="txt">'.$row_f['source'].'</p>
                                </div>
                                <div class="col-4">
                                    <p class="head">to</p>
                                    <p class="txt">'.$row_f['Destination'].'</p>                
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-8">
                                    <p class="head">Passenger</p>
                                    <p class=" h5 text-uppercase">
                                    '.$row_p['f_name'].' '.$row_p['m_name'].' '.$row_p['l_name'].'
                                    </p>                              
                                </div>
                                <div class="col-4">
                                    <p class="head">board time</p>
                                    <p class="txt">12:45</p>
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <p class="head">departure</p>
                                    <p class="txt mb-1">'.$date_dep.'</p>
                                    <p class="h1 font-weight-bold mb-3">'.$time_dep.'</p>  
                                </div>            
                                <div class="col-3">
                                    <p class="head">arrival</p>
                                    <p class="txt mb-1">'.$date_arr.'</p>
                                    <p class="h1 font-weight-bold mb-3">'.$time_arr.'</p>  
                                </div>
                                <div class="col-3">
                                    <p class="head">gate</p>
                                    <p class="txt">A22</p>
                                </div>            
                                <div class="col-3">
                                    <p class="head">seat</p>
                                    <p class="txt">'.$row['seat_no'].'</p>
                                </div>                
                            </div>                    
                        </div>
                        <div class="col-3 pl-0" style="background-color:#376b8d !important;
                            padding:20px; border-top-right-radius: 25px; border-bottom-right-radius: 25px;">
                            <div class="row">  
                                <div class="col">                                    
                                <h2 class="text-light text-center brand">
                                    MaanaFly</h2> 
                                </div>                                      
                            </div>                             
                            <div class="row justify-content-center">
                                <div class="col-12">                                    
                                    <img src="images/airtic.png" class="mx-auto d-block"
                                    height="200px" width="200px" alt="">
                                </div>                                
                            </div>
                            <div class="row">
                                <h3 class="text-light2 text-center mt-2 mb-0">
                                &nbsp Thank you for choosing us. </br> </br>
                                    Please be at the gate at boarding time</h3>   
                            </div>                            
                        </div>   
                        
                        <div class="col-1">
                        <div class="dropdown">
                        <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i><img width="15" height="15" src="https://img.icons8.com/ios-filled/50/FFFFFF/menu-2.png" alt="menu-2"/></i> </td>
                                                      </button>  
                        <ul class="dropdown-menu">
                        <form class="px-4 py-3"  action="12.ticket.php" 
                                                              method="post">
                                                              <input type="hidden" name="ticket_id" 
                                                                  value='.$row['ticket_id'].'>
                                                              <button class="btn btn-danger btn-sm"
                                                                  name="cancel_but">
                                                                  <i><img width="20" height="20" src="https://img.icons8.com/glyph-neue/64/FFFFFF/delete--v1.png" alt="delete--v1"/></i> &nbsp; Cancel Ticket</button>
                                                          </form>
                                                          <form class="px-4 py-3" action="12.eticket.php" target="_blank"
                                                              method="post">
                                                              <input type="hidden" name="ticket_id" 
                                                                  value='.$row['ticket_id'].'>
                                                              <button class="btn w-100 mb-3 btn-primary btn-sm"
                                                                  name="print_but">
                                                                  <i><img width="20" height="20" src="https://img.icons8.com/material-rounded/24/FFFFFF/print.png" alt="print"/></i> &nbsp; Print Ticket</button>
                                                          </form> 
                        </ul>
                      </div>              
                        </div>                          
                        </div>                                               
                      ' ;
                      }
                  }                  
                }
            }                                    
          }
      }   
      
       ?> 

    </div>
    <?php } ?>
    <!--Footer-->
    <hr class="featurette-divider"> 
    <footer class="container">
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
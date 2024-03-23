<?php include_once 'helpers/helper.php'; ?>
<?php
session_start();
include('connection.php');

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
    
        <?php if(isset($_POST['search_but'])) { 
            $dep_date = $_POST['dep_date'];                        
            $ret_date = $_POST['ret_date'];  
            $dep_city = $_POST['dep_city'];  
            $arr_city = $_POST['arr_city'];     
            $type = $_POST['type'];
            $f_class = $_POST['f_class'];
            $passengers = $_POST['passengers'];
            if($dep_city === $arr_city){
              header('Location: 2.homepage.php?error=sameval');
              exit();    
            }
            if($dep_city === '0') {
              header('Location: 2.homepage.php?error=seldep');
              exit(); 
            }
            if($arr_city === '0') {
              header('Location: 2.homepage.php?error=selarr');
              exit();              
            }
            ?>
          <div class="container-md mt-2">
            <h1 class="display-4 text-center text-light"
              >FLIGHTS FROM: <br> <?php echo $dep_city; ?> 
                 to <?php echo $arr_city; ?> </h1>
            <table class="table table-striped table-bordered table-hover">
              <thead>
                <tr class="text-center">
                  <th scope="col">Airline</th>
                  <th scope="col">Departure</th>
                  <th scope="col">Arrival</th>
                  <th scope="col">Status</th>
                  <th scope="col">Fare</th>
                  <th scope="col">Buy</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $sql = 'SELECT * FROM flight WHERE source=? AND Destination =? AND 
                    DATE(departure)=? ORDER BY Price';
                $stmt = mysqli_stmt_init($link);
                mysqli_stmt_prepare($stmt,$sql);                
                mysqli_stmt_bind_param($stmt,'sss',$dep_city,$arr_city,$dep_date);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                while ($row = mysqli_fetch_assoc($result)) {
                  $price = (int)$row['Price']*(int)$passengers;
                  if($type === 'round') {
                    $price = $price*2;
                  }
                  if($f_class == 'B') {
                      $price += 0.5*$price;
                  }
                  if($row['status'] === '') {
                      $status = "Not yet Departed";
                      $alert = 'alert-primary';
                  } else if($row['status'] === 'dep') {
                      $status = "Departed";
                      $alert = 'alert-info';
                  } else if($row['status'] === 'issue') {
                      $status = "Delayed";
                      $alert = 'alert-danger';
                  } else if($row['status'] === 'arr') {
                      $status = "Arrived";
                      $alert = 'alert-success';
                  }                   
                  echo "
                  <tr class='text-center'>                  
                    <td>".$row['airline']."</td>
                    <td>".$row['departure']."</td>
                    <td>".$row['arrivale']."</td>
                    <td>
                      <div>
                          <div class='alert ".$alert." text-center mb-0 pt-1 pb-1' 
                              role='alert'>
                              ".$status."
                          </div>
                      </div>  
                    </td>                   
                    <td>&#x20B9;  ".$price."</td>
                    ";
                  if(isset($_SESSION['user_id']) && $row['status'] === '') {   
                    echo " <td>
                    <form action='2.passform.php' method='post'>
                    <input name='flight_id' type='hidden' value=".$row['flight_id'].">
                                        <input name='type' type='hidden' value=".$type.">
                                        <input name='passengers' type='hidden' value=".$passengers.">
                                        <input name='price' type='hidden' value=".$price.">
                                        <input name='ret_date' type='hidden' value=".$ret_date.">
                                        <input name='class' type='hidden' value=".$f_class.">
                      <button name='book_but' type='submit'> 
                        <div style=''>
                          <img width='40' height='40' src='https://img.icons8.com/fluency/48/ok--v1.png' alt='ok--v1'/> 
                        </div>
                      </button>
                    </form>
                  </td>                                                     
                    "; 
                  } elseif (isset($_SESSION['user_id']) && $row['status'] === 'dep') {
					echo "<td>Not Available</td>";
				  } else {
                    echo "<td>Login to continue</td>";
                  }
                  echo '</tr> ';                 
                }
                ?>

              </tbody>
            </table>

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
  
</body>
</html>
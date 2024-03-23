<?php
session_start();
include('connection.php');

//logout
include('logout.php');
//remember me
//include('9.adminheader.php');
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
            background-color: black;
        }
        .carouselsize{
  height: 100vh;
}
.navbar-nav li {
    display: flex; 
    align-items: center; 
}

.nav-link {
    padding: 0.5rem 1rem; 
}
#admin, #logout {
    color: white;
}
#logout{
    padding-top: 8px;
}
.ad{
    margin-bottom: 0px;
}
        .adminbtn{
            margin-left: 10px;
            margin-top: 50px;
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
/*  background-color: black;*/
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
    #adminmodal .modal-title,
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
    


    /*from here*/
    
    td {
    /* font-family: 'Assistant', sans-serif !important; */
    font-size: 18px !important;
  }
  p {
  font-size: 35px;
  font-weight: 100;
  font-family: 'product sans';  
  }  

  .main-section{
	width:100%;
	margin:0 auto;
	text-align: center;
	padding: 0px 5px;
}
.dashbord{
	width:23%;
	display: inline-block;
	background-color:#34495E;
	color:#fff;
	margin-top: 50px; 
}
.icon-section i{
	font-size: 30px;
	padding:25px;
  
	border:1px solid #fff;
	border-radius:50%;
	margin-top:-25px;
	margin-bottom: 10px;
	background-color:#34495E;
}
.icon-section p{
	margin:0px;
	font-size: 20px;
	padding-bottom: 10px;
}
.detail-section{
	background-color: #2F4254;
	padding: 5px 0px;
}
.dashbord .detail-section:hover{
	background-color: #5a5a5a;
	cursor: pointer;
}
.detail-section a{
	color:#fff;
	text-decoration: none;
}
.dashbord-green .icon-section,.dashbord-green .icon-section i{
	background-color: #16A085;
}
.dashbord-green .detail-section{
	background-color: #149077;
}

.dashbord-yellow .icon-section,.dashbord-yellow .icon-section i{
	background-color: #E4940B;
}
.dashbord-blue .detail-section{
	background-color:#2573A6;
}
.dashbord-red .icon-section,.dashbord-red .icon-section i{
	background-color:#E74C3C;
}
.dashbord-red .detail-section{
	background-color:#CF4436;
}
.container-md {
  margin-top: 20px;
}

.card-body::-webkit-scrollbar {
  display: none;
}

.card {
  margin-top: 55px !important;
  height: 55vh;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.card-body {
  overflow-y: scroll;
  height: 55vh !important;;
}
th {
  color: #3c3c3c;
  font-size: 20px;
  font-weight: bold;
  /* font-family: 'Courier New', Courier, monospace; */
}
td {
  margin-top: 10px !important;
  font-size: 17px;
  font-family: "Assistant", sans-serif !important;
  /* font-weight: lighter; */
  /* font-family: "Courier New", Courier, monospace; */
}
#content{
  margin-top: 5px !important;
}
.infolog{
  padding-top: 5px;
}
.infolog1{
  padding-top: 8px;
}
.image1{
  transform: rotate(90deg);
}

    </style>

</head>
<body>
<?php
      include "adminheader.php";
      ?>
   
<div class="container" id="content">

<div class="main-section">
  <div class="dashbord">
    <div class="icon-section">
      <i aria-hidden="true"><img width="50" height="50" src="https://img.icons8.com/external-others-pike-picture/50/external-airport-airline-and-airport-others-pike-picture-8.png" alt="external-airport-airline-and-airport-others-pike-picture-8"/></i><br>
     <p  class="infolog1">Total Passengers<p>
      <p><?php include '9.passengercnt.php';?></p>
    </div>
   
  </div>
  <div class="dashbord dashbord-green">
    <div class="icon-section">
      <i aria-hidden="true"><img width="64" height="64" src="https://img.icons8.com/pastel-glyph/64/exchange-rupee.png" alt="exchange-rupee"/></i><br>
     <p  class="infolog">Amount</p>
      <p>&#x20B9; <?php include '9.amountcnt.php';?></p>
    </div>
   
  </div>
  <div class="dashbord dashbord-red">
    <div class="icon-section">
      <i aria-hidden="true"><img width="64" height="64" src="https://img.icons8.com/wired/64/airplane-take-off.png" alt="airplane-take-off"/></i>
      <br>
     <p  class="infolog">Flights</p>
      <p><?php include '9.flightcnt.php';?></p>
    </div>
   
  </div>     
  
  <div class="dashbord dashbord-yellow">
    <div class="icon-section">
      <i aria-hidden="true"><img width="64" height="64" src="https://img.icons8.com/pastel-glyph/64/airplane-front-view--v2.png" alt="airplane-front-view--v2"/></i>
      <br>
     <p class="infolog">Available Airlines</p>
      <p><?php include '9.airlinecnt.php';?></p>
    </div>
   
  </div>  
  
</div>







<div class="card mt-4" id="flight">
<div class="card-body">
<div class="dropdown" style="float: right;">
  <button class="btn btn-dark dropdown-toggle" type="button"id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
    <i><img width="20" height="20" src="https://img.icons8.com/external-kiranshastry-lineal-color-kiranshastry/64/000000/external-filter-interface-kiranshastry-lineal-color-kiranshastry-1.png" alt="external-filter-interface-kiranshastry-lineal-color-kiranshastry-1"/></i>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <li><a class="dropdown-item" href="#flight">Today's Flights</a></li>
    <li><a class="dropdown-item" href="#issue">Today's flight issues</a></li>
    <li><a class="dropdown-item" href="#dep">Flights departed today</a></li>
    <li><a class="dropdown-item" href="#arr">Flights arrived today</a></li>
  </ul>
</div>      
<p class="text-secondary">Today's Flights</p>
<table class="table-sm table table-hover">
<thead class="table-dark">
<tr>
  <th scope="col">#</th>
  <th scope="col">Arrival</th>
  <th scope="col">Departure</th>
  <th scope="col">Destination</th>
  <th scope="col">Source</th>
  <th scope="col">Airlines</th>
  <th>Action</th>
</tr>
</thead>
<tbody>          
  <?php
    $curr_date = (string)date('y-m-d');
    $curr_date = '20'.$curr_date;
    $sql = "SELECT * FROM flight WHERE DATE(departure)=?";
    $stmt = mysqli_stmt_init($link);
    mysqli_stmt_prepare($stmt,$sql);
    mysqli_stmt_bind_param($stmt,'s',$curr_date);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    while ($row = mysqli_fetch_assoc($result)) {
      if($row['status']== '') {
        echo '     
    <td scope="row">
      <a href="10.passlist.php?flight_id='.$row['flight_id'].'" style="text-decoration:underline;">
      '.$row['flight_id'].' </a> </td>
    <td>'.$row['arrivale'].'</td>
    <td>'.$row['departure'].'</td>
    <td>'.$row['Destination'].'</td>
    <td>'.$row['source'].'</td>
    <td>'.$row['airline'].'</td> 
    <th class="options">
    <div class="dropdown">
  <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <i><img class="image1" width="15" height="15" src="https://img.icons8.com/ios-glyphs/30/000000/ellipsis.png" alt="ellipsis"/></i> </td>
        </button> 
  <ul class="dropdown-menu">
    <form class="px-4 py-3"  action="10.admininc.php" method="post">
    <input type="hidden" type="number" name="flight_id" 
              value='.$row['flight_id'].'>
              <div class="form-group">
              <label for="exampleDropdownFormEmail1">Enter time in min.                              
              </label>
              <input type="number" class="form-control" name="issue" 
                placeholder="Eg. 120">
            </div> 
            <button type="submit" name="issue_but" 
              class="btn btn-danger btn-sm">Submit issue</button>
            <div class="dropdown-divider"></div>
            <button type="submit" name="dep_but" 
              class="btn btn-primary btn-sm">Departed</button>
    </form>
  </ul>
</div>
      </th>                
  </tr> ' ; }} ?>
</tbody>
</table>        

</div>
</div>

<div class="card" id="issue">
<div class="card-body">
<div class="dropdown" style="float: right;">
  <button class="btn btn-dark dropdown-toggle" type="button"id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
  <i><img width="20" height="20" src="https://img.icons8.com/external-kiranshastry-lineal-color-kiranshastry/64/000000/external-filter-interface-kiranshastry-lineal-color-kiranshastry-1.png" alt="external-filter-interface-kiranshastry-lineal-color-kiranshastry-1"/></i>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <li><a class="dropdown-item" href="#flight">Today's Flights</a></li>
    <li><a class="dropdown-item" href="#issue">Today's flight issues</a></li>
    <li><a class="dropdown-item" href="#dep">Flights departed today</a></li>
    <li><a class="dropdown-item" href="#arr">Flights arrived today</a></li>
  </ul>
</div>         
<p class="text-secondary">Today's Flight Issues</p>
<table class="table-sm table table-hover">
<thead class="table-dark">
<tr>
  <th scope="col">#</th>
  <th scope="col">Arrival</th>
  <th scope="col">Departure</th>
  <th scope="col">Destination</th>
  <th scope="col">Source</th>
  <th scope="col">Airline</th>
  <th>Action</th>
</tr>
</thead>
<tbody>
  <tr>
  <?php
    $curr_date = (string)date('y-m-d');
    $curr_date = '20'.$curr_date;
    $sql = "SELECT * FROM flight WHERE DATE(departure)=?";
    $stmt = mysqli_stmt_init($link);
    mysqli_stmt_prepare($stmt,$sql);
    mysqli_stmt_bind_param($stmt,'s',$curr_date);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    while ($row = mysqli_fetch_assoc($result)) {
      if($row['status']=='issue') {
        echo '              
    <td scope="row">
      <a href="10.passlist.php?flight_id='.$row['flight_id'].'">
      '.$row['flight_id'].' </a> </td>
    <td>'.$row['arrivale'].'</td>
    <td>'.$row['departure'].'</td>
    <td>'.$row['Destination'].'</td>
    <td>'.$row['source'].'</td>
    <td>'.$row['airline'].'</td> 
    <th class="options">
    <div class="dropdown">
  <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <i><img class="image1" width="15" height="15" src="https://img.icons8.com/ios-glyphs/30/000000/ellipsis.png" alt="ellipsis"/></i> </td>
  </button>
  <ul class="dropdown-menu">
    <form class="px-4 py-3"  action="10.admininc.php" method="post">
    <input type="hidden" name="flight_id" 
              value='.$row['flight_id'].'>
              <button type="submit" name="issue_soved_but" class="btn btn-danger btn-sm">Issue Solved!</button>
</form>
  </ul>
</div>
    </th>         
  </tr> ' ; }} ?>
</tbody>
</table>        

</div>
</div> 

<div class="card" id="dep">
<div class="card-body">
<div class="dropdown" style="float: right;">
  <button class="btn btn-dark dropdown-toggle" type="button"id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
  <i><img width="20" height="20" src="https://img.icons8.com/external-kiranshastry-lineal-color-kiranshastry/64/000000/external-filter-interface-kiranshastry-lineal-color-kiranshastry-1.png" alt="external-filter-interface-kiranshastry-lineal-color-kiranshastry-1"/></i>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <li><a class="dropdown-item" href="#flight">Today's Flights</a></li>
    <li><a class="dropdown-item" href="#issue">Today's flight issues</a></li>
    <li><a class="dropdown-item" href="#dep">Flights departed today</a></li>
    <li><a class="dropdown-item" href="#arr">Flights arrived today</a></li>
  </ul>
</div>           
<p class=" text-secondary">Flights Departed Today</p>
<table class="table-sm table table-hover">
<thead class="table-dark">
<tr>
  <th scope="col">#</th>
  <th scope="col">Arrival</th>
  <th scope="col">Departure</th>
  <th scope="col">Destination</th>
  <th scope="col">Source</th>
  <th scope="col">Airline</th>
  <th>Action</th>
</tr>
</thead>
<tbody>
  <tr>
  <?php
    $curr_date = (string)date('y-m-d');
    $curr_date = '20'.$curr_date;
    $sql = "SELECT * FROM flight WHERE DATE(departure)=?";
    $stmt = mysqli_stmt_init($link);
    mysqli_stmt_prepare($stmt,$sql);
    mysqli_stmt_bind_param($stmt,'s',$curr_date);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    while ($row = mysqli_fetch_assoc($result)) {
      if($row['status']=='dep') {
        echo '              
    <td scope="row">
      <a href="10.passlist.php?flight_id='.$row['flight_id'].'">
      '.$row['flight_id'].' </a> </td>
    <td>'.$row['arrivale'].'</td>
    <td>'.$row['departure'].'</td>
    <td>'.$row['Destination'].'</td>
    <td>'.$row['source'].'</td>
    <td>'.$row['airline'].'</td> 
    <th class="options">
    <div class="dropdown">
  <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <i><img class="image1" width="15" height="15" src="https://img.icons8.com/ios-glyphs/30/000000/ellipsis.png" alt="ellipsis"/></i> </td>
  </button>
  <ul class="dropdown-menu">
    <form class="px-4 py-3"  action="10.admininc.php" method="post">
    <input type="hidden" type="number" name="flight_id" 
              value='.$row['flight_id'].'>
              <button type="submit" name="arr_but" 
              class="btn btn-danger">Arrived</button>
</form>
  </ul>
</div>
    </th>            
  </tr> ' ; }} ?>
</tbody>
</table>        

</div>
</div>       

<div class="card mb-4" id="arr">
<div class="card-body">
<div class="dropdown" style="float: right;">
  <button class="btn btn-dark dropdown-toggle" type="button"id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
  <i><img width="20" height="20" src="https://img.icons8.com/external-kiranshastry-lineal-color-kiranshastry/64/000000/external-filter-interface-kiranshastry-lineal-color-kiranshastry-1.png" alt="external-filter-interface-kiranshastry-lineal-color-kiranshastry-1"/></i>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <li><a class="dropdown-item" href="#flight">Today's Flights</a></li>
    <li><a class="dropdown-item" href="#issue">Today's flight issues</a></li>
    <li><a class="dropdown-item" href="#dep">Flights departed today</a></li>
    <li><a class="dropdown-item" href="#arr">Flights arrived today</a></li>
  </ul>
</div>       
<p class=" text-secondary">Flights Arrived Today</p>
<table class="table-sm table table-hover">
<thead class="table-dark">
<tr>
  <th scope="col">#</th>
  <th scope="col">Arrival</th>
  <th scope="col">Departure</th>
  <th scope="col">Destination</th>
  <th scope="col">Source</th>
  <th scope="col">Airline</th>
</tr>
</thead>
<tbody>
  <tr>
  <?php
    $curr_date = (string)date('y-m-d');
    $curr_date = '20'.$curr_date;
    $sql = "SELECT * FROM flight WHERE DATE(departure)=?";
    $stmt = mysqli_stmt_init($link);
    mysqli_stmt_prepare($stmt,$sql);
    mysqli_stmt_bind_param($stmt,'s',$curr_date);
    mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      while ($row = mysqli_fetch_assoc($result)) {
      if($row['status']=='arr') {
        echo '              
    <td scope="row">
      <a href="pass_list.php?flight_id='.$row['flight_id'].'">
      '.$row['flight_id'].' </a> </td>
    <td>'.$row['arrivale'].'</td>
    <td>'.$row['departure'].'</td>
    <td>'.$row['Destination'].'</td>
    <td>'.$row['source'].'</td>
    <td>'.$row['airline'].'</td>                
  </tr> ' ; }} ?>
</tbody>
</table>        

</div>
</div>      
</div>
  
    
    
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

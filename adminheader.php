<?php
include('connection.php');

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
    display: flex; /* Add this line */
    align-items: center; /* Add this line */
}

.nav-link {
    padding: 0.5rem 1rem; /* Adjust padding as needed */
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
<!--navbar  fixed-top-->
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="#"><h5><strong>ADMIN PANEL</strong></h5></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarcollapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="9.adminhome.php"><h5>Dashboard</h5></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="9.addflight.php" tabindex="-1" aria-disabled="true"><h5>Add Flight</h5></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="9.listflights.php" tabindex="-1" aria-disabled="true"><h5>List Flights</h5></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="9.manageairlines.php"><h5>Manage Airlines</h5></a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
    <div class="dropdown mt-2">
        <a class="btn bg-transparent dropdown-toggle text-white" href="#" role="button" 
            id="dropdownMenuButton" data-toggle="dropdown" 
            aria-haspopup="true" aria-expanded="false">
            <i></i> Airlines
        </a>  
        <div class="dropdown-menu">
            <form class="px-2 py-2" action="10.airlineinc.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="airline" 
                        placeholder="Airlines Name">
                    <input type="number" class="form-control mt-3" name="seats" 
                        placeholder="Total Seats">                              
                </div>  
                <button type="submit" name="air_but" class="btn btn-success w-100">Submit</button>
            </form>
        </div>
    </div>  
</li>

                
                <li class="nav-item">
                    <a class="nav-link" href="11.adminprofile.php"  id="admin">
                        <b>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                            </svg>
                            <?php echo $_SESSION['username']?>
                        </b>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="1.index.php?logout=1" id="logout">Log out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("location: 2.homepage.php");
}
include('connection.php');
$id = $_SESSION['user_id'];
//get username and email
$sql = "SELECT * FROM users WHERE user_id='$id'"; // fix the variable here
$result = mysqli_query($link, $sql);

$count = mysqli_num_rows($result);
if ($count == 1) {
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $username = $row['username'];
    $email = $row['email'];
} else {
    echo "There was an error retrieving the username and email from the database";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User Profile</title>

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
    #container{
            margin-top: 100px;
            color: white;
        }
        textarea{
            width: 100%;
            max-width: 100%;
            font-size: 16px;
            line-height: 1.5em;
            border-left-width: 20px;
            border-color: #8D5496;
            /* background-color: ;
            color: ;*/
            padding: 10px;
            color: white;
        }
        tr{
            cursor: pointer;
        }
        .table tbody {
            background-color: rgba(255, 255, 255, 0); /* Adjust the alpha value for transparency */
            border-color: rgba(0, 0, 0, 0.1);
            color: white;
        }

        .table td {
            background-color: rgba(255, 255, 255, 0); /* Adjust the alpha value for transparency */
            border-color: rgba(0, 0, 0, 0);
            color: white;
        }

        .table th {
            background-color: rgba(255, 255, 255, 0); /* Adjust the alpha value for transparency */
            border-color: rgba(0, 0, 0, 0.1);
            color: white;
        }
   

    </style>
<!--navbar  fixed-top-->
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="#"><h5><strong>User Profile</strong></h5></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarcollapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="2.homepage.php"><h5>Home</h5></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="#"><h5>Profile</h5></a>
                </li>
                
            </ul>

            <ul class="navbar-nav ml-auto">
                
                
                <li class="nav-item">
                    <a class="nav-link" href="2.userprofile.php"  id="admin">
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
    
    <!--Container-->
    
    <div class="container" id="container">
        <div class="row">
            
           <div class="offset-md-3 col-md-6">
               
               <h2>Account Settings:</h2>
               
               <div class="table-responsive ">
        <table class="table table-hover table-condensed table-bordered">
          <tr data-target="#updateusername" data-toggle="modal">
            <td>Username</td>
            <td><?php echo $username; ?></td>
          </tr>
          <tr data-target="#updateemail" data-toggle="modal">
            <td>Email</td>
            <td><?php echo $email; ?></td>
          </tr>
          <tr data-target="#updatepassword" data-toggle="modal">
            <td>Password</td>
            <td>hidden</td>
          </tr>
        </table>
      </div>        
    
</div>

        
        </div>
    
    </div>
    
    <!--update username Form-->
    
    <form method="post" id="updateusernameform">
        
        
        <div class="modal fade" id="updateusername" tabindex="-1" aria-labelledby="hid" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="hid">Edit Username:</h4>
          
          
        <button class="btn-close" data-dismiss="modal"></button>


          
          
      </div>
      <div class="modal-body">
          
          <!--updateusername message from php file-->
          <div id="updateusernamemessage"></div>
          
          

    <div class="form-group mb-3">
        <label for="username">Username:</label>
        <input class="form-control" type="text" name="username" maxlength="30" id="username" value="<?php echo $username; ?>">
    </div>
         
</div>
        
      <div class="modal-footer">
        
          <input class="btn green" name="updateusername" type="submit" value="Submit">
        <!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>-->
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        
      </div>
    </div>
  </div>
</div> 
    
    </form>
    
   <!--update email Form-->
    
    <form method="post" id="updateemailform">
        
        
        <div class="modal fade" id="updateemail" tabindex="-1" aria-labelledby="hid" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="hid">Enter new Email:</h4>
          
          
         <button class="btn-close" data-dismiss="modal"></button>


          
          
      </div>
      <div class="modal-body">
          
          <!--update email message from php file-->
          <div id="emailmessage"></div>
          
          

    <div class="form-group mb-3">
        <label for="email">Email:</label>
        <input class="form-control" type="email" name="email" maxlength="30" id="email" value="<?php echo $email; ?>">
    </div>
         
</div>
        
      <div class="modal-footer">
        
          <input class="btn green" name="updateemail" type="submit" value="Submit">
        <!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>-->
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        
      </div>
    </div>
  </div>
</div> 
    
    </form>
    
   <!--update password Form-->
    
    <form method="post" id="updatepasswordform">
        
        
        <div class="modal fade" id="updatepassword" tabindex="-1" aria-labelledby="hid" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="hid">Enter Current and New Password:</h4>
          
          
        <button class="btn-close" data-dismiss="modal"></button>


          
          
      </div>
      <div class="modal-body">
          
          <!--password message from php file-->
          <div id="passwordmessage"></div>
          
          

    <div class="form-group mb-3">
        <label for="currentpassword" class="visually-hidden">Your Current Password:</label>
        <input class="form-control" type="password" name="currentpassword" maxlength="30" id="currentpassword" placeholder="Your Current Password">
    </div>
          
          
          <div class="form-group mb-3">
        <label for="password" class="visually-hidden">Choose a Password:</label>
        <input class="form-control" type="password" name="password" maxlength="30" id="password" placeholder="Choose a Password">
    </div>
          
          
          <div class="form-group mb-3">
        <label for="password2" class="visually-hidden">Confirm Password:</label>
        <input class="form-control" type="password" name="password2" maxlength="30" id="password2" placeholder="Confirm Password">
    </div>
         
</div>
        
      <div class="modal-footer">
        
          <input class="btn green" name="updatepassword" type="submit" value="Submit">
        <!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>-->
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        
      </div>
    </div>
  </div>
</div> 
    
    </form>
    
    
    <!--Footer-->
    
    <!--Footer-->
    <hr class="featurette-divider"> 
    <footer class="container">
    <p class="lead">RA2211003010<strong>167</strong>, RA2211003010<strong>182</strong>, RA2211003010<strong>185</strong> &copy;<?php
                $today = date("Y");
                    echo $today;
                ?></p></a></p>
  </footer>
    
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="adminprofile.js"></script>

    <!-- jQuery -->


<!-- Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js"></script>
    


</body>
</html>

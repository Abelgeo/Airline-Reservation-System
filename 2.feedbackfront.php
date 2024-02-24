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
  <title>MaanaFly</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="form.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Arvo:ital@0;1&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="form.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-e3wyN5E4TkLjFf7TJCQACghBEqLTcAKjkAqopfuMaAw7S7jFOq6mGp3RMkR4RLcz" crossorigin="anonymous">

<style>

.rating {
  display: inline-block;
  position: relative;
  height: 50px;
  line-height: 50px;
  font-size: 50px;
}
.rating label {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  cursor: pointer;
}

.rating label:last-child {
  position: absolute;
}

.rating label:nth-child(1) {
  z-index: 5;
}

.rating label:nth-child(2) {
  z-index: 4;
}

.rating label:nth-child(3) {
  z-index: 3;
}

.rating label:nth-child(4) {
  z-index: 2;
}

.rating label:nth-child(5) {
  z-index: 1;
}

.rating label input {
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
}

.rating label .icon {
  float: left;
  color: transparent;
}

.rating label:last-child .icon {
  color: #000;
}

.rating:not(:hover) label input:checked ~ .icon,
.rating:hover label:hover input ~ .icon {
  color: #09f;
}

.rating label input:focus:not(:checked) ~ .icon:last-child {
  color: #000;
  text-shadow: 0 0 5px #09f;
}  
body {
  background: -webkit-linear-gradient(to right, rgba(36, 67, 131, 0.67), #6C3483);
  background: linear-gradient(to right, rgba(36, 67, 131, 0.67), #6C3483);
}


@font-face {
  font-family: 'product sans';
  src: url('assets/css/Product Sans Bold.ttf');
  }
h1 {
  font-size: 50px !important;
  margin-bottom: 20px;  
  color: white;  
  font-family :'product sans' !important;
  text-align: center;
}

textarea {
  color: cornflowerblue !important;
  border :3px solid #31B0D5 !important;
  background-color: whitesmoke !important;
  font-weight: bold !important;
}
textarea:focus {
  outline-style: none !important;
  outline: none !important;
}
*:focus {
    outline: none !important;
}
.lead{
  font-weight: lighter;
  color: #D4D3D1;
  font-style: italic;
} 
input {
    border :0px !important;
    border-bottom: 2px solid #31B0D5 !important;
    color :cornflowerblue !important;
    border-radius: 0px !important;
    font-weight: bold !important;
    border: none;
    border-bottom: 2px solid #31B0D5;      
  }
  label {
    color : #79BAEC !important;
    font-size: 19px;
  }  
  div.form-group label {
    color: cornflowerblue !important;
    font-weight: bold;
  }
  div.rating label{
    font-size: 40px !important;
  }
.input-group {
  position: relative;
  display: inline-block;
  width: 100%;
}
.form-box {
  background: rgba(36, 67, 131, 0.67);
  border-radius: 16px;
  box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
  border: 1px solid rgba(36, 67, 131, 1);
  padding: 40px;
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
<main>
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
                    <a class="nav-link text-white" href="2.feedbackfront.php">Feedback</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#" tabindex="-1" aria-disabled="true">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>





<?php
if(isset($_GET['error'])) {
    if($_GET['error'] === 'invalidemail') {
        echo '<script>alert("Invalid email")</script>';
    } else if($_GET['error'] === 'sqlerror') {
        echo"<script>alert('Database error')</script>";
    } else if($_GET['error'] === 'success') {
      echo"<script>alert('Thank you for your Feedback')</script>";
    } 
}
?>
<div class="container mb-4">
  <h1> <i class="far fa-comment-alt"></i> FEEDBACK</h1>
  <div class="row justify-content-center">
  <div class="col-md-6 bg-light form-box">
    <form action="includes/feedback.inc.php" method="POST">
      <div class="row justify-content-center">  
          <div class="col-12 ">              
            <div class="input-group">
                <label for="user_id">Email</label>
                <input type="email" name="email" id="user_id" required >
              </div>              
          </div>                      
          <div class="col-12 mt-4">
            <div class="form-group">         
              <label for="exampleFormControlTextarea1">What was your first impression
                  when you entered the website?</label>     
              <textarea class="form-control" id="exampleFormControlTextarea1" name="1"                
                rows="3" required></textarea>
            </div>                
          </div>             
          
          <div class="col-12 mt-4">
            <div class="form-group">         
              <select class="mt-4" name="2" style="border: 0px; border-bottom: 
              2px solid #31B0D5; background-color: whitesmoke !important;
              font-weight: bold !important;color :cornflowerblue !important;
              width:100%" required>
                <option  selected disabled>How did you first hear about us?</option>
                <option >Search Engine</option>
                <option >Social Media</option>
                <option >Friend/Relative</option>
                <option >Word of Mouth</option>
                <option >Television</option>
                <option>Other</option>
              </select> 
            </div>                
          </div>                   
          
          <div class="col-12 mt-4">
            <div class="form-group">         
              <label for="exampleFormControlTextarea1">Is there anything missing on this page?</label>     
              <textarea class="form-control" id="exampleFormControlTextarea1" name="3"                
                rows="3" required></textarea>
            </div>                
          </div>          
      </div>  
    
      <div class="row">
        <div class="rating ml-3">  
          <label>
            <input type="radio" name="stars" value="1" required />
            <span class="icon">★</span>
          </label>
          <label>
            <input type="radio" name="stars" value="2" required />
            <span class="icon">★</span>
            <span class="icon">★</span>
          </label>
          <label>
            <input type="radio" name="stars" value="3" required />
            <span class="icon">★</span>
            <span class="icon">★</span>
            <span class="icon">★</span>
          </label>
          <label>
            <input type="radio" name="stars" value="4" required />
            <span class="icon">★</span>
            <span class="icon">★</span>
            <span class="icon">★</span>
            <span class="icon">★</span>
          </label>
          <label>
            <input type="radio" name="stars" value="5" required />
            <span class="icon">★</span>
            <span class="icon">★</span>
            <span class="icon">★</span>
            <span class="icon">★</span>
            <span class="icon">★</span>
          </label>
        </div>
      </div>
      <div class="row">
      <div class="col text-center">
  <button name="feed_but" type="submit" class="btn btn-primary mt-3">
    <div style="font-size: 2rem;">
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" fill="currentColor" class="bi bi-send-arrow-down" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M15.854.146a.5.5 0 0 1 .11.54l-2.8 7a.5.5 0 1 1-.928-.372l1.895-4.738-7.494 7.494 1.376 2.162a.5.5 0 1 1-.844.537l-1.531-2.407L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM5.93 9.363l7.494-7.494L1.591 6.602z"/>
        <path fill-rule="evenodd" d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.354-1.646a.5.5 0 0 1-.722-.016l-1.149-1.25a.5.5 0 1 1 .737-.676l.28.305V11a.5.5 0 0 1 1 0v1.793l.396-.397a.5.5 0 0 1 .708.708z"/>
      </svg>
    </div>
  </button>
</div>
      </div>
    </form>

    
  </div>
  </div>
</div>
<?php 
include('footer.php'); ?> 
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
  $(document).ready(function(){
    $('.input-group input').focus(function(){
      me = $(this);
      $("label[for='"+me.attr('id')+"']").addClass("animate-label");
    });

    $('.input-group input').blur(function(){
      me = $(this);
      if ( me.val() == ""){
        $("label[for='"+me.attr('id')+"']").removeClass("animate-label");
      }
    });
    //$('#test-form').submit(function(e){
  //   e.preventDefault() ;
  //   alert("Thank you") ;
  // })
  });
</script>
</main>
</body>
</html>
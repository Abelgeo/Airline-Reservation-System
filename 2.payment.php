
<?php
session_start();

include('connection.php');
if (isset($_POST['pass_but'])) {
    echo "Form submitted.";
} else {
    echo "Form not submitted.";
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
.input-group-addon {
    background-color: transparent;
    border-left: 0;
}
.card-body {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);  
}
@font-face {
  font-family: 'product sans';
  src: url('assets/css/Product Sans Bold.ttf');
  }
h1 {
    font-size: 50px !important;
    margin-bottom: 20px;  
    font-family :'product sans' !important;
    font-weight: bolder;
  }
.cc-number.identified {
    background-repeat: no-repeat;
	background-position-y: 3px;
	background-position-x: 99%;
}

.one-card > div {
    height: 150px;
    background-position: center center;
    background-repeat: no-repeat;
}

.two-card > div {
    height: 80px;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: contain;
    width: 48%;
}

.two-card div.amex-cvc-preview {
    float: right;
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
<?php if(isset($_SESSION['user_id'])) {   ?> 
    ?php
  if(isset($_GET['error'])) {
    if($_GET['error'] === 'sqlerror') {
        echo"<script>alert('Database error')</script>";
    } else if($_GET['error'] === 'noret') {
      echo"<script>alert('No return flight available')</script>";
    } else if($_GET['error'] === 'mailerr') {
      echo"<script>alert('Mail error')</script>";
    }
  }
?>
	<div class="container-fluid py-3">
    <div class="row">
        <div class="col-12 col-sm-8 col-md-6 col-lg-4 mx-auto">
          <h1 class="text-center text-light">PAY INVOICE</h1>
            <div id="pay-invoice" class="card">
                <div class="card-body">
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa fa-3x" style="color:navy;"></i>
              <i class="fa fa-cc-amex fa-3x" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard fa-3x" style="color:red;"></i>
              <i class="fa fa-cc-discover fa-3x" style="color:orange;"></i>
               <i class="fa fa-cc-stripe fa-3x" style="color:blue;"></i>
            </div>
            <hr><!-- log on to codeastro.com for more projects -->
            <form action="2.paymentinc.php" method="post" 
                novalidate="novalidate" class="needs-validation">
  
                <div class="form-group">
                    <label for="cc-number" class="control-label mb-1">Card number</label>
                    <input id="cc-number" name="cc-number" type="tel" class="form-control cc-number identified visa" required autocomplete="off"  >
                    <span class="invalid-feedback">Enter a valid 12 to 16 digit card number</span>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="cc-exp" class="control-label mb-1">Expiration</label>
                            <input id="cc-exp" name="cc-exp" type="tel" class="form-control cc-exp" required placeholder="MM / YY" autocomplete="cc-exp">
                            <span class="invalid-feedback">Enter the expiration date</span>
                        </div>
                    </div>
                    <div class="col-6 p-0">
                        <label for="x_card_code" class="control-label mb-1">CVV</label>
                        <div class="row">
                            <div class="col pr-0">
                                <input id="x_card_code" name="x_card_code" type="password" class="form-control cc-cvc" required autocomplete="off">
                            </div><!-- log on to codeastro.com for more projects -->
                            <div class="col pr-0">                            
                                <span class="invalid-feedback order-last">Enter the 3-digit code on back</span>
                                <div class="input-group-append"><!-- log on to codeastro.com for more projects -->
                                    <div class="input-group-text">
                                    <span class="fa fa-question-circle fa-lg" data-toggle="popover" data-container="body" data-html="true" data-title="CVV" 
                                    data-content="<div class='text-center one-card'>The 3 digit code on back of the card..<div class='visa-mc-cvc-preview'></div></div>"
                                    data-trigger="hover"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <br/>

                <div class='form-row'><!-- log on to codeastro.com for more projects -->
                <div class='col-md-12 mb-2'>
                    <button id="payment-button" type="submit"  name="pay_but"
                    class="btn btn-lg btn-primary btn-block">
                        <i class="fa fa-lock fa-lg"></i>&nbsp;
                        <span id="payment-button-amount">Pay </span>
                        <span id="payment-button-sending" style="display:none;">Sending…</span>
                    </button>
                </div>
            </form>
                </div>
            </div>
        </div>
    </div>
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

$(function () {
  $('[data-toggle="popover"]').popover()
})



$("#payment-button").click(function(e) {
 
    var form = $(this).parents('form');
    
    var cvv = $('#x_card_code').val();
    var regCVV = /^[0-9]{3,4}$/;
    var CardNo = $('#cc-number').val();
    var regCardNo = /^[0-9]{12,16}$/;
    var date = $('#cc-exp').val().split('/');
    var regMonth = /^01|02|03|04|05|06|07|08|09|10|11|12$/;
    var regYear = /^20|21|22|23|24|25|26|27|28|29|30|31$/;
    
    if (form[0].checkValidity() === false) {
      e.preventDefault();
      e.stopPropagation();
    }
    else {
       if (!regCardNo.test(CardNo)) {
       
        $("#cc-number").addClass('required');
        $("#cc-number").focus();
        alert(" Enter a valid 10 to 16 card number");
        return false;
      }
      else if (!regCVV.test(cvv)) {
       
        $("#x_card_code").addClass('required');
        $("#x_card_code").focus();
        alert(" Enter a valid CVV");
        return false;
      }
      else if (!regMonth.test(date[0]) && !regMonth.test(date[1]) ) {
       
        $("#cc_exp").addClass('required');
        $("#cc_exp").focus();
        alert(" Enter a valid exp date");
        return false;
      }
      
      
      
      form.submit();
    }
    
    form.addClass('was-validated');
});
</script>

</body>
</html>
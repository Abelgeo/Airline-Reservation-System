<?php
session_start();
include('connection.php');

//logout
include('logout.php');

?>

<?php if(isset($_SESSION['id'])) { ?>

  <style>
    fieldset {
      width: 60%; 
      margin: 0 auto;
      padding: 20px;
    }
  body {
    font-family: 'Roboto', sans-serif;
    background-color: #efefef;
  }

  

  .form-out {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    background-color: whitesmoke !important;
    padding: 40px;
    margin-top: 30px;
    border-radius: 10px;
  }

  .bg-light {
    background-color: #f8f9fa !important;
  }

  h1 {
    font-size: 2.5rem;
    font-weight: bold;
    margin-bottom: 20px;
  }

  .form-row {
    margin-bottom: 20px;
  }

  label {
    color: #5c5c5c !important;
    font-size: 1rem;
    font-weight: bold;
  }

  input[type="date"],
  input[type="time"],
  input[type="text"],
  input[type="number"],
  select {
    border: 0px !important;
    border-bottom: 2px solid #5c5c5c !important;
    border-radius: 0px !important;
    font-weight: bold !important;
    background-color: #F8F9FA!important;
  }

  input:focus,
  select:focus {
    outline: none !important;
  }

  .input-group {
    position: relative;
    display: inline-block;
    width: 100%;
  }

  .input-group label {
    position: absolute;
    color: #999;
    font-family: "Roboto", sans-serif;
    pointer-events: none;
    transform-origin: 0 0;
    transform: scale(0.9) translateY(100%);
    transition: transform 0.2s linear;
  }

  .input-group label.animate-label {
    transform: scale(0.6) translateY(0%);
  }

  .input-group input {
    padding-top: 20px;
    width: 100%;
    box-sizing: border-box;
  }

  .airline {
    float: right;
    font-weight: bold !important;
  }

  .btn-success {
    background-color: #505050;
    color: white;
    font-size: 1.5rem;
  }

  .btn-success:hover {
    background-color: #404040;
  }

  @media screen and (max-width: 900px) {
    body {
      background-color: lightblue;
    }

    .form-out {
      padding: 20px;
      background-color: none !important;
      margin-top: 20px;
    }
  }
  .arr{
    padding-top:15px;
  }
  .container{
    padding-top: 50px;;
  }
  
</style>



<main>
<?php include "adminheader.php"; ?>
<div class="container mt-0">
  <div class="row justify-content-center">
    <?php
    if(isset($_GET['error'])) {
        if($_GET['error'] === 'destless') {
            echo "<script>alert('Dest. date/time is less than src.');</script>";
        } else if($_GET['error'] === 'sqlerr') {
          echo "<script>alert('Database error');</script>";
        } else if($_GET['error'] === 'same') {
          echo "<script>alert('Same city specified in source and destination');</script>";
        }
    }
    ?>
      <div class="bg-light form-out col-md-10">
      <h1 class="text-secondary text-center mb-4">ADD FLIGHT DETAILS</h1>

      <form method="POST" class=" text-center" 
        action="10.flightinc.php">
        <div class="row">
  <div class="col-md-3 p-0">
    <h5 class="mb-0 form-name">DEPARTURE</h5>
  </div>
  <div class="col">
    <input type="date" name="source_date" class="form-control" required>
  </div>
  <div class="col">
    <input type="time" name="source_time" class="form-control" required>
  </div>
</div>

<div class="row arr">
  <div class="col-md-3">
    <h5 class="form-name mb-0">ARRIVAL</h5>
  </div>
  <div class="col">
    <input type="date" name="dest_date" class="form-control" required>
  </div>
  <div class="col">
    <input type="time" name="dest_time" class="form-control" required>
  </div>
</div>

<div class="row form-row mb-4">
    <div class="col">
        <?php
        $sql = 'SELECT * FROM cities ';
        $stmt = mysqli_stmt_init($link);
        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        echo '<select class="mt-4" name="dep_city" style="border: 0px; border-bottom: 
                2px solid #5c5c5c; background-color: #F8F9FA !important;
                font-weight: bold !important;
                width:80%">
                <option selected>From</option>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<option value=' . $row['city']  . '>' .
                $row['city'] . '</option>';
        }
        ?>
    </select>
    </div>
    <div class="col">
        <?php
        $sql = 'SELECT * FROM cities ';
        $stmt = mysqli_stmt_init($link);
        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        echo '<select class="mt-4" name="arr_city" style="border: 0px; border-bottom: 
                    2px solid #5c5c5c; background-color: #F8F9FA !important;
                    font-weight: bold !important;
                    width:80%">
                    <option selected>To</option>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<option value=' . $row['city']  . '>' .
                $row['city'] . '</option>';
        }
        ?>
    </select>
    </div>
</div>

  

<div class="row">
  <div class="col">
    <div class="input-group">
      <label for="dura">Duration</label>
      <input type="text" name="dura" id="dura" required />
    </div>
  </div>
  <div class="col">
    <div class="input-group">
      <label for="price">Price</label>
      <input type="number" style="border: 0px; border-bottom: 2px solid #5c5c5c;" name="price" id="price" required />
    </div>
  </div>

  <?php
  $sql = 'SELECT * FROM Airline ';
  $stmt = mysqli_stmt_init($link);
  mysqli_stmt_prepare($stmt, $sql);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  echo '<select class="airline col-md-3 mt-4" name="airline_name" style="border: 0px; border-bottom: 
            2px solid #5c5c5c; background-color: #F8F9FA !important;">
            <option selected>Select Airline</option>';
  while ($row = mysqli_fetch_assoc($result)) {
    echo '<option value=' . $row['airline_id']  . '>' .
      $row['name'] . '</option>';
  }
  ?>
  </select>
  </div>
  <div class="row">
    <div class="col-md-12 text-center"> <!-- Use col-md-12 to take full width -->
        <button name="flight_but" type="submit" class="btn btn-success mt-5">
            <div style="font-size: 1.5rem;">
                <i></i> Proceed
            </div>
        </button>
    </div>
</div>
</div>
            


      </form>
    </div>
</div>
</div>
<hr class="featurette-divider"> 
    <footer class="container">
    <p class="lead">RA2211003010<strong>167</strong>, RA2211003010<strong>182</strong>, RA2211003010<strong>185</strong> &copy;<?php
                $today = date("Y");
                    echo $today;
                ?></p></a></p>
  </footer>
</main>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
  $(document).ready(function () {
    $('.input-group input').focus(function () {
      me = $(this);
      $("label[for='" + me.attr('id') + "']").addClass("animate-label");
    });
    $('.input-group input').blur(function () {
      me = $(this);
      if (me.val() == "") {
        $("label[for='" + me.attr('id') + "']").removeClass("animate-label");
      }
    });
  });
</script>

<?php } ?>
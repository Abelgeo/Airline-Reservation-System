<?php
session_start();
include('connection.php');

//logout
include('logout.php');
//remember me
//include('9.adminheader.php');
?>
<?php
if(isset($_POST['del_flight']) and isset($_SESSION['id'])) {
  $flight_id = $_POST['flight_id'];
  $sql = 'DELETE FROM flight WHERE flight_id=?';
  $stmt = mysqli_stmt_init($link);
  if(!mysqli_stmt_prepare($stmt,$sql)) {
      header('Location: 9.listflights.php?error=sqlerror');
      exit();            
  } else {  
    mysqli_stmt_bind_param($stmt,'i',$flight_id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($link);
    // header('Location: all_flights.php');
    echo("<script>location.href = '9.listflights.php';</script>");
    exit();
  }
}
?>

<style>
table {
  background-color: white;
}
h1 {
  margin-top: 20px;
  margin-bottom: 20px;
  font-family: 'product sans';  
  font-size: 45px !important; 
  font-weight: lighter;
}
a:hover {
  text-decoration: none;
}
body {
  /* background-color: #B0E2FF; */
  background-color: #efefef;
}
th {
  font-size: 22px;
  /* font-weight: lighter; */
  /* font-family: 'Courier New', Courier, monospace; */
}
td {
  margin-top: 10px !important;
  font-size: 16px;
  font-weight: bold;
  font-family: 'Assistant', sans-serif !important;
}
</style>
    <main>
    <?php include_once 'adminheader.php'; ?>
        <?php if(isset($_SESSION['id'])) { ?>
          <div class="container-md mt-2">
            <h1 class="display-4 text-center text-secondary"
              >FLIGHT LIST</h1>
            <table class="table table-bordered">
              <thead class="table-dark">
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Arrival</th>
                  <th scope="col">Departure</th>
                  <th scope="col">Source</th>
                  <th scope="col">Destination</th>
                  <th scope="col">Airline</th>
                  <th scope="col">Seats</th>
                  <th scope="col">Price</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                
                <?php
                $sql = 'SELECT * FROM Flight ORDER BY flight_id DESC';
                $stmt = mysqli_stmt_init($link);
                mysqli_stmt_prepare($stmt,$sql);                
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "
                  <tr class='text-center'>                  
                    <td scope='row'>
                      <a href='pass_list.php?flight_id=".$row['flight_id']."'>
                      ".$row['flight_id']." </a> </td>
                    <td>".$row['arrivale']."</td>
                    <td>".$row['departure']."</td>
                    <td>".$row['source']."</td>
                    <td>".$row['Destination']."</td>
                    <td>".$row['airline']."</td>
                    <td>".$row['Seats']."</td>
                    <td>$ ".$row['Price']."</td>
                    <td>
                    <form action='9.listflights.php' method='post'>
                      <input name='flight_id' type='hidden' value=".$row['flight_id'].">
                      <button  class='btn' type='submit' name='del_flight'>
                      <i><img width='20' height='20' src='https://img.icons8.com/glyph-neue/64/FA5252/delete--v1.png' alt='delete--v1'/></i></button>
                    </form>
                    </td>                  
                  </tr>
                  ";
                }
                ?>

              </tbody>
            </table>

          </div>
        <?php } ?>

    </main>
	
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
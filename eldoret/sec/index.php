<?php
    include ('include/conn.php');
    ini_set('session.gc_maxlifetime', 1440); 
    session_start();
    if(empty($_SESSION['phone'])){
        header("Location: ../index.php");
        exit();
    }else{
?>
<!DOCTYPE html>
<header>
    <title>Eldoret Shuttle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="include/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</header>    
<body style="background-color:#000;" oncontextmenu="return false;" onload="myFunction()" style="margin:0;">
<center><div id="loader" class="p-2" style="margin-top: 230px;"></div></center>
<div class="container animate-bottom" style="display:none;" id="myDiv">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="card bg-transparent col-md-4">
      <div class="row">
        <div class="col-md-12">
          <?php 
            $phone = $_SESSION['phone'];
            $sql = "SELECT * FROM passengers WHERE phone = '$phone'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {
                $lname = $row['lname'];
                ?>
            <center><span class="text-warning"><i class="fa fa-user-circle"></i> <?php echo $lname; ?></span></center>
        </div>
      </div>
      <img src="assets/img/2.jpg" alt="" style="width: 100%; height: 100px;">
      <div class="card-header text-light text-center h4">Eldoret Shuttle Online Booking</div>
        <div class="card-body text-success">
          <form action="avail.php" method="POST">
            <label>From: </label><br>
            <select name="start" class="form-control text-light" style="width: 100%; background-color: #000; font-family: cursive;" required>
              <option disabled selected value=""> --- From ---</option>
              <option value="Malaba">Malaba</option>
              <option value="Bungoma">Bungoma</option>
              <option value="Eldoret">Eldoret</option>
              <option value="Nakuru">Nakuru</option>
              <option value="Nairobi">Nairobi</option>
            </select><br>
            <label>To: </label><br>
            <select name="end" class="form-control text-light" style="width: 100%; background-color: #000; font-family: cursive;" required>
              <option value="" disabled selected>--- Destination ---</option>
              <option value="Malaba">Malaba</option>
              <option value="Bungoma">Bungoma</option>
              <option value="Eldoret">Eldoret</option>
              <option value="Nakuru">Nakuru</option>
              <option value="Nairobi">Nairobi</option>
            </select><br>
            <button name="search" class="btn btn-warning bg-transparent form-control w-100 text-warning" style="width: 100%;font-family: cursive;"> Submit Searches </button>
          </form>
        </div>
        <?php } } else{
          echo "<script> alert('There was an error. Plese login again later')
          window.location='../index.php';
          </script>";
        }?>
        </div>
      </div>
      <?php include('btm_nav.php');?>
    </div>
</div>
<script type="text/javascript" src="include/load.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
<?php }?>

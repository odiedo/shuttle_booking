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
    <!-- to be deleted -->
    <link href="../../hostels/hostel/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../../hostels/hostel/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../hostels/hostel/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">


    <!-- External CSS libraries -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <style>
        .shuttle{
            height: 400px;
            width: 100%;
            border-radius: 21px;
            background-size: cover;
        }
.tile
{
  width:100%;
}
#tile-1 .tab-pane
{
  height:30px;
}
#tile-1 .nav-tabs
{
  background-color: red;
  border-radius:4px;
  position: relative;
  border: none!important;
}
#tile-1 .nav-tabs li
{
  margin:0px!important;
}
#tile-1 .nav-tabs li a
{
  position:relative;
  margin-right:3px!important;
  padding: 4px 3px!important;
  font-size:16px;
  border:none!important;
  color: white;
}
#tile-1 .nav-tabs a:hover
{
  background-color:!important;
  border:none;
}#tile-1 .nav-tabs li a
{
  position:relative;
  margin-right:3px!important;
  padding: 6px 3px!important;
  font-size:16px;
  border:none!important;
  color: #362411;
}
#tile-1 .nav-tabs a:hover
{
  background-color:!important;
  border:none;
}
    </style>
</header>    
<body style="background-color:#000;" oncontextmenu="return false;">
<?php 
$phone = $_SESSION['phone'];
$sql = "SELECT * FROM passengers WHERE phone = '$phone'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
// output data of each row
  while($row = mysqli_fetch_assoc($result)) {
  $lname = $row['lname'];
  $fname = $row['fname'];
  $phone = $row['phone'];
  $date = $row['join_date'];
  $email = $row['email'];?>
<div class="container mt-3">
  <div class="row">
    <div class="col-md-4">

    </div>
    <div class="col-md-4">
      <h5 class="breadcrumb pl-4 h5 bg-transparent border-0 text-warning" style="border: 1px #0e24 solid; width: 100%; box-shadow: 0px 3px 3px 0px goldenrod;">
        <center>Profile <i class="fa fa-user-circle-o"></i></center>
      </h5>  
      <div class="card bg-transparent p-1 mb-1" style="box-shadow: 0px 3px 3px 0px goldenrod;">
        <div class="card-header text-warning text-center"><i class="fa fa-user-circle text-center" style="font-size: 40px;"></i><br><span><?php echo $lname; ?></span></div>
        <div class="card-body h6">
          <b class="text-warning">First Name: </b> <small class="float-right text-light"><?php echo $fname; ?></small><br>
          <b class="text-warning">Last Name: </b> <small class="float-right text-light"><?php echo $lname; ?></small><br>
          <b class="text-warning">Phone: </b> <small class="float-right text-light">0<?php echo $phone; ?></small><br>
          <b class="text-warning">Email: </b> <small class="float-right text-light"><?php echo $email; ?></small><br>
          <b class="text-warning">Join Date: </b> <small class="float-right text-light"><?php echo $date; ?></small><br>
        <button class="text-warning mt-3 btn btn-warning w-100 bg-transparent"><i class="fa fa-edit"></i>Edit</button>
        </div>
      </div>
 
      <div class="card  bg-transparent" style="box-shadow: 0px 3px 3px 0px goldenrod;">
        <div class="card-body text-light text-center">
          <span class="text-warning text-center text-uppercase">Referral <i class="fa fa-list"></i></span><br>
          <span class="text-light" style="font-family: serif;"><i>21</span><br>
            <marquee direction="up" class="text-success" style="font-size: 10px; height: 50px">
              The quick fox jumped over the lazy dog.<br>
              The quick fox jumped over the lazy dog.<br>
              The quick fox jumped over the lazy dog.<br>
              The quick fox jumped over the lazy dog.<br>
              The quick fox jumped over the lazy dog.<br>
              The quick fox jumped over the lazy dog.<br>
              The quick fox jumped over the lazy dog.<br>
              The quick fox jumped over the lazy dog.<br>
              The quick fox jumped over the lazy dog.<br>
              The quick fox jumped over the lazy dog.<br>
              The quick fox jumped over the lazy dog.<br>
              The quick fox jumped over the lazy dog.<br>
              The quick fox jumped over the lazy dog.
            </marquee>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      
    </div>
  </div>
</div>




<?php } } else{
  echo "<script> alert('There was an error. Plese login again later')
    window.location='../index.php';
    </script>";}?>


<?php include('btm_nav.php');?>


<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>

<!-- Bootstrap JS Requirements -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
<?php }?>

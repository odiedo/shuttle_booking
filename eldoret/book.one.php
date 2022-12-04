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

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   
        <!-- Custom Stylesheet -->
    </header>     
<body style="background-color:#000;" oncontextmenu="return false;">
<br><br>
<center>
<?php
$plate_no = $_GET['plate_no'];
$price = $_GET['price'];
$k = array();
$sql = "SELECT * FROM vehicle_seats WHERE  number_plate= '$plate_no'";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              $k[] = $row['seat_no'];
            }
            $ais = array("A","B","C","D","E");
            $aisle = array("A3","C2","D2");
            
            
            echo "<form method='POST' action=''> <table class='table-primary' cellpadding='4'>";
            foreach($ais as $i){
              echo "<tr>";
              for($r=1;$r<=4;$r++){
                $seatno = $i.$r;
                if(in_array($seatno,$k)){
                  $seat = '<input type="checkbox" disabled="disabled" value="'.$seatno.'" class="box'.$plate_no.'" name="seat[]" style="width:28px; height:28px; outline : 1px solid YELLOW;" id="'.$price.'" onclick="getSum();" >';
                }elseif(!in_array($seatno,$aisle)){
                  $seat = '<input type="checkbox" value="'.$seatno.'" name="seat" style="width:28px; height:28px; cursor:url(assets/img/shuttle.jpg),auto; outline : 1px solid #009900;" class="box'.$plate_no.'" id="'.$price.'" onclick="getvalue'.$plate_no.'();test'.$plate_no.'(this);" >';
                }else{
                  $seat = "&nbsp;";
                }
                echo "<td>$seat</td>";
              }
              echo "</tr>";
            }
            echo "
            <tr>
              <td colspan='4'><input type='submit' class='btn btn-info' value='submit' name='submit'></td>
            </tr>
            </table></form>";
            
            ?>
          	
            </center>



<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>

<!-- Bootstrap JS Requirements -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
<?php } }?>

<?php
if (isset($_POST['submit'])){ 
    // prepare and bind
    // set parameters and execute
    $seat_no = $_POST['seat'];
    $phone = '0748768590';
    
    $date = date('Y-m-d H:i:s');
    $plate_no = $_GET['plate_no'];

    $sql = "INSERT INTO vehicle_seats (number_plate, seat_no, phone, date) VALUES('$plate_no', '$seat_no', '$phone', '$date')";
    if($conn->query($sql) === TRUE) {
        echo "<script>
            window.location='#confirm.php';
            alert('Please confirm your booking here');
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;  
    }
}
?>

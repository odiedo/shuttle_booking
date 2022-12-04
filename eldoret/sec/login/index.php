<html>
<head>
    <title>Eldoret Shuttle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="../assets/css/bootstrap.min.css">

    <link type="text/css" rel="stylesheet" href="../assets/fonts/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="../assets/fonts/flaticon/font/flaticon.css">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="../assets/css/style.css">
    <style>
        body{
    background-color: #000;
    color: white;
}
.card-primary:not(.card-outline) > .card-header {
    background-color: #8A080A;
}
.card-primary:not(.card-outline) > .card-header,
.card-primary:not(.card-outline) > .card-header a {
    color: #ffffff;
}
.card-primary:not(.card-outline) > .card-header a.active {
    color: #1F2D3D;
}
.card-primary.card-outline {
    border-top: 3px solid #8A080A;
}

.m-safe{
    top: 50%; 
    left:50%; 
    position:absolute; 
    transform: translate(-50%, -50%); 
    max-width:350px; 
    width:100%;
}
.m-safe .row {
    line-height: 25px;
}
img {
    height: 180px; 
    width: 180px; 
    border-radius: 50%;
}
.card-header{
    color: white;
    text-shadow: 0px 0px 10px yellow; 
    text-align: center;
}
.inst{
    text-align: center; 
    font-family: serif; 
}
    </style>
</head>
<body style="background-color:#09030C;">
<div class="container m-safe">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary card-outline bg-transparent">
                    <div class="card-body">
                        <center><i class="fa fa-user-circle-o text-light"></i><br><h2 style="font-family: cursive;" class="text-light">Eldoret Shuttle</h2></center>
                        <div class="text-light inst h6">
                            Admin Login
                        </div>
                        <form action="sign_in.php" method="post">
                            <div class="login" style="font-family: agency fb;">
                                <input type="number" name="id_number" placeholder="ID Number" autocomplete="off" class="form-control border-top-0 text-danger w-100 border-right-0 border-left-0 bg-transparent" required><br>
                                <input type="password" name="password" placeholder="Password" class="form-control border-top-0 w-100 text-danger border-right-0 border-left-0 bg-transparent" required><br>
                                <button class="bg-transparent w-100" name="submit" onmousedown="login()" style="color: white; text-align: center; border: 2px solid #8A080A; font-family: serif;">>> Login <<</button>            
                            </div>
                        </form>
                        <h6 class="text-center text-danger">or</h6>
                        <center><span>*************************</span></center>
                    <p style="color: white; text-align: center;font-family: serif; bottom: 0%;"><i> Serve Now, Serve Fast, Serve Better</i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
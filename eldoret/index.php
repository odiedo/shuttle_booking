<html>
<head>
    <title>Eldoret Shuttle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="sec/assets/css/bootstrap.min.css">

    <link type="text/css" rel="stylesheet" href="sec/assets/fonts/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="sec/assets/fonts/flaticon/font/flaticon.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="sec/assets/img/favicon.ico" type="image/x-icon" >

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="sec/assets/css/style.css">
    <style>
        body{
    background-color: #000;
    color: white;
}
.card-primary:not(.card-outline) > .card-header {
    background-color: goldenrod;
}
.card-primary:not(.card-outline) > .card-header,
.card-primary:not(.card-outline) > .card-header a {
    color: #ffffff;
}
.card-primary:not(.card-outline) > .card-header a.active {
    color: #1F2D3D;
}
.card-primary.card-outline {
    border-top: 3px solid goldenrod;
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
                    <h2 style="font-family: cursive;" class="text-warning text-center">Eldoret Shuttle <br><i style="font-size:60px;" class="fa fa-user-circle text-warning"><br><span class="text-center inst text-light h4">Login</span></i></h2></center>
                        <form action="sign-in.php" method="post">
                            <div class="login" style="font-family: agency fb;">
                                <input type="tel" name="phone" placeholder="Phone" autocomplete="off" class="form-control border-top-0 text-warning w-100 border-right-0 border-left-0 border-warning bg-transparent" required><br>
                                <input type="password" name="password" placeholder="Password" class="form-control border-top-0 w-100 text-warning border-right-0 border-left-0 bg-transparent border-warning" required><br>
                                <button class="bg-transparent w-100 btn btn-warning text-warning" name="submit" onmousedown="login()" style="font-family: cursive;">>> Login <<</button>            
                            </div>
                        </form>
                        <h6 class="text-center text-danger">or</h6>
                        <center><span>*************************</span></center>
                    <p class="text-light text-center" style="font-family: cursive;"><i> Register now, Travel Fast, Travel Safe</i></p>
                    <p style="text-align: right;"><a href="reg.php" class="text-danger btn btn-danger bg-transparent">>>Register</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

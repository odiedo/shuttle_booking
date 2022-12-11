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
    text-align: center; 
    font-family: serif; 
}
    </style>
</head>
<body style="background-color:#09030C;">
<div class="container m-safe">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary pt-4 card-outline bg-transparent">
                <div class="card-body">
                    <center><h2 style="font-family: cursive;" class="text-light">Eldoret Shuttle</h2></center>
                    <div class="text-light inst h6">Create account</div>
                    <form action="sign-up.php" method="post">
                        <div class="login" style="font-family: agency fb;">
                            <input type="text" name="fname" placeholder="First name" autocomplete="off" class="form-control border-top-0 text-light w-100 border-right-0 border-left-0 bg-transparent" required><br>
                            <input type="text" name="lname" placeholder="Last name" autocomplete="off" class="form-control border-top-0 text-light w-100 border-right-0 border-left-0 bg-transparent" required><br>
                            <input type="tel" name="phone" placeholder="Phone" autocomplete="off" class="form-control border-top-0 text-light w-100 border-right-0 border-left-0 bg-transparent" required><br>
                            <input type="email" name="email" placeholder="Email address" autocomplete="off" class="form-control border-top-0 text-light w-100 border-right-0 border-left-0 bg-transparent" required ><br>
                            <input type="password" name="password" placeholder="Password" class="form-control border-top-0 w-100 text-light border-right-0 border-left-0 bg-transparent" required><br>
                            <button class="bg-transparent w-100 btn btn-warning text-warning" name="save" style="font-family: serif;">>>Register<<</button>            
                        </div>
                    </form>
                    <center><span>*************************</span></center>
                    <p style="font-family: serif;" class="text-light text-center"><i> Register now, Travel Fast, Travel Safe</i></p>
                    <p style="text-align: right;">Already registered? <a href="index.php" class="text-primary">login</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

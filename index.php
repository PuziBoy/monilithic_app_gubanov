<?php
require_once "php/connect.php";
$link = mysqli_connect($host, $user, $pass, "architect");

$log = mysqli_query( $link,"SELECT * FROM `password` WHERE `psw`='".mysqli_real_escape_string($link,$_POST['password'])."' ");
$ps = mysqli_fetch_assoc($log);
if($ps['psw'] === ($_POST['password'])){
    header("Location: php/dash_board.php"); exit();
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class = "row">
        
            <div  class="col-xl-7 col-lg-7 col-md-12 col-sm-12" style="padding-top:100px ; padding-left:500px ;">
                <form method = "post">
                    <label for="inputPassword4" class="form-label">Пароль</label>
                     <input type="password" name="password" class="form-control" id="inputPassword4">
                     <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12" style="padding-top:20px ; padding-left:180px;">
                        <button type="button" name ="enter" class="btn btn-primary">Primary</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
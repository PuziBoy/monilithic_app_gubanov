<?php 
require_once "connect.php";
if(isset($_POST['submit'])){
    $query = mysqli_query($link, "INSERT INTO `category` (`id`, `name`) VALUES (NULL, '". $_POST["category"] ."')"); 
    if ($query == true) {
        header("Location: ../index.php"); exit();
    } 
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category managment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <form method="post">
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12" style="padding-top: 50px ; padding-left: 120px;">
                    <label class="form-label">Category name</label>
                    <input type="text" name="category" class="form-control" placeholder="Category name" aria-label="Username" aria-describedby="basic-addon1">
                    <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12" style="padding-top: 20px; padding-left: 550px;">
                        <button type="submit" name= "submit" class="btn btn-primary btn-lg">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body> 
</html>
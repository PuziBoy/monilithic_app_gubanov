<?php 
require_once "connect.php";
$datat = mysqli_query($link, "SELECT * FROM category");
if(isset($_POST['submit'])){
    $query = mysqli_query($link, "INSERT INTO `dashboard` (`id`, `name`, `email`, `category`, `Note`) VALUES 
    (NULL, '". $_POST["full_name"] ."', '". $_POST["email"] ."', '". $_POST["options"] ."', '". $_POST["note"] ."')");
    if ($query == true) {
        header("Location: category.php"); exit();
    }else{
        echo "Make new form";
    }
    
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dash Board</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script lang=""> </script>
</head>
<body>
    <div class="container">
        <div class = "row">
            <form method="post" style="padding-top: 50px ; padding-left: 120px;">
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email.example@mail.com">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                    </div> 
                </div>
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12" style="padding-top: 20px;">
                    <label class="form-label">Full Name</label>
                    <input type="text"  name="full_name" class="form-control" placeholder="Firstname Lastname" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12" style="padding-top: 20px;">    
                    <label class="form-label">Category</label>
                    <select name="options" class="form-select" aria-label="Default select example">
                        <option selected>Option One</option>
                        <?php

                            while ($oneForm = mysqli_fetch_assoc($datat)) {
                            echo "<option value= '". $oneForm["id"] ."'>". $oneForm["name"] ."</option>";
                            }   
                        ?>
                    </select>
                </div> 
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12" style="padding-top: 20px;">
                    <label for="exampleFormControlTextarea1" class="form-label">Note</label>
                    <textarea class="form-control" name="note" id="exampleFormControlTextarea1" rows="3" placeholder="Text note"></textarea>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12" style="padding-top: 20px; padding-left: 600px;">
                    <button type="submit" name= "submit" class="btn btn-primary btn-lg">Submit</button>
                </div>
            </form>  
        </div>
    </div> 
</body>
</html>
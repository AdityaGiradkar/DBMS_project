<?php
  include ("db.php");
  if(isset($_GET['submit'])){
    $num      = trim($_GET['p_no']);
    $name     = trim($_GET['p_name']);
    $cost     = trim($_GET['p_cost']);
    $ctegeory = trim($_GET['p_ctg']);
    $about    = trim($_GET['about']);

    $num      = mysqli_real_escape_string($con, $num);
    $name     = mysqli_real_escape_string($con, $name);
    $cost     = mysqli_real_escape_string($con, $cost);
    $ctegeory = mysqli_real_escape_string($con, $ctegeory);
    $about    = mysqli_real_escape_string($con, $about);

    //$query = "INSERT INTO `product`(`product_no`, `name`, `category_id`, `cost`, `about`) VALUES ('$num','$name','$ctegeory','$cost','$about')";
    //$run = mysqli_query($con, $query);

    $query = "INSERT INTO `product`(`product_no`, `name`, `category_id`, `cost`, `about`) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, 'ssiis', $num, $name, $ctegeory, $cost, $about);
    //mysqli_stmt_execute($stmt);

    if(mysqli_stmt_execute($stmt)){
      echo '<script> alert("intserted sucessfully"); </script>';
    }else{
      echo '<script> alert("error while inserting data"); </script>'; 
    }
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Inser Product</title>
  </head>
  <body>
      <div class="container" style="padding-top: 2%;">
          <div style="text-align:center">
            <strong><h2>PRODUCT ENTRY</h2></strong>
          </div>
          <div class="container" style="padding-top: 2%;">
              <form method="GET">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Product Number</label>
                    <input type="text" class="form-control" name="p_no" id="exampleFormControlInput1" pattern="[A-Za-z0-9]{1,5}" placeholder="product number! eg.N657" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Product Name</label>
                    <input type="text" class="form-control" name="p_name" id="exampleFormControlInput1" pattern="[A-Za-z0-9]{1,20}" placeholder="product Name" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Product Cost</label>
                    <input type="text" class="form-control" name="p_cost" id="exampleFormControlInput1" pattern="[0-9]{1,10}" placeholder="product Cost" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Select Category</label>
                    <select class="form-control" name="p_ctg" id="exampleFormControlSelect1">
                      <option value="1">Electronics</option>
                      <option value="2">Household</option>
                      <option value="3">Fassion</option>
                      <option value="4">Books</option>
                      <option value="5">Sports</option>
                      <option value="6">Gaming</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">About Product</label>
                    <textarea class="form-control" name="about" id="exampleFormControlTextarea1" pattern="[A-Za-z0-9]{0,}" rows="3" required></textarea>
                  </div>
                  <button type="submit" name="submit" class="btn btn-primary mb-2">Submit</button>
                </form>
            </div>
        </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
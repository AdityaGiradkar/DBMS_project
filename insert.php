<?php
  include ("db.php");
  if(isset($_GET['submit'])){

    $num = $_GET['p_no'];
    $name = $_GET['p_name'];
    $cost = $_GET['p_cost'];
    $ctegeory = $_GET['p_ctg'];
    $about = $_GET['about'];

    $query = "INSERT INTO `product`(`product_no`, `name`, `category_id`, `cost`, `about`) VALUES ('$num','$name','$ctegeory','$cost','$about')";
    $run = mysqli_query($con, $query);

    if($run){
      echo '<script> alert("intserted sucessfully"); </script>';
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
                    <input type="text" class="form-control" name="p_no" id="exampleFormControlInput1" placeholder="product number! eg.N657">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Product Name</label>
                    <input type="text" class="form-control" name="p_name" id="exampleFormControlInput1" placeholder="product Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Product Cost</label>
                    <input type="text" class="form-control" name="p_cost" id="exampleFormControlInput1" placeholder="product Cost">
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
                    <textarea class="form-control" name="about" id="exampleFormControlTextarea1" rows="3"></textarea>
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
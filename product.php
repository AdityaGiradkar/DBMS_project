<?php
    session_start();
    include("db.php");
    if(isset($_GET['product-button'])){
        $P_name = $_GET['product-name'];
        $qry1 = "SELECT `product_no`, `name`, `cost`, `about` FROM `product` WHERE name LIKE '%$P_name%'";
        $run1 = mysqli_query($con, $qry1);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
        .main{
            margin-top: 2%;
            margin-bottom: 2%;
        }

        .input-bar{
            width:90%;
        }

        /*@media(max-width: 800px){
           .input-bar{
               width:80%;
           } 
        }*/
    </style>
</head>
<body>
    <nav class="navbar sticky-top navbar-light navbar-expand-lg bg-light">
        
        <a class="navbar-brand" href="#">Navbar</a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
        </ul>

    </nav>


    <div class="container">
        <div class="main container-fluid">
            <form class="form-inline my-2 my-lg-0" method="GET" action="">
                    <input class="form-control mr-sm-2 input-bar" style = "width: 90%;" type="search" placeholder="Search" name="product-name" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" name="product-button" type="submit">Search</button>
            </form>
        </div>

        <div class="table-responsive-md">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Sr. No.</th>
                        <th scope="col">Product No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Cost</th>
                        <th scope="col">About Product</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(isset($_GET['product-button'])){
                        $i=1;
                        while($row = mysqli_fetch_assoc($run1)){   
                    ?>
                            <tr>
                                <th scope="row"><?php echo $i; ?></th>
                                <td><?php echo $row['product_no']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['cost']; ?></td>
                                <td><?php echo $row['about']; ?></td>
                            </tr>
                        <?php 
                            $i++;
                        } 
                    } ?>
                </tbody>
            </table>
        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--CSS Styles-->
    <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="eCargoMS1.css">   
    
</head>

<body>
  
<!--Navigation bar starts here-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="https://www.logotypes101.com/logos/660/4E5FCAC963A972ABFE3FE981905656AF/cargo.png" length="100" height="50" alt="logo"></a>
        
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">

            <!--first tab-->
            <li class="nav-item">
              <a class="nav-link" href="new devop.html">Home <span class="sr-only">(current)</span></a>
            </li>

             <!--second tab tab-->
            <li class="nav-item">
              <a class="nav-link" href="eCargo_MS.php">Track my cargo</a>
            </li>


            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Services
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="User_Account/myDetail.php">My Account</a>
                <a class="dropdown-item" href="Create-Order-Request_Page.php">FEE Calculator</a>
                
              </div>
            </li>


            <li class="nav-item">
              <a class="nav-link" href="MediaCenter/media.php">Media Center</a>
            </li>


             <!--last contactus tab-->
             <li class="nav-item">
                <a class="nav-link" href="ContactUs.html">Contact-Us</a>
              </li>

          </ul>
          <!--sign-in/log-in function from here-->
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <a href="login.php"><!--add login page url-->
            <input type="button" class="btn btn-outline-success my-2 my-sm-0"  value="Login"></a>

            <a href="registration.php"><!--add sign-in page url-->
            <input type="button" class="btn btn-outline-success my-2 my-sm-0"  value="Register"></a>


               
           
          </form>
        </div>
      </nav>
<!--navigation bar ends from here-->

<!--______________________________________________tracking Page_______________________________________________-->

<!---------- Title------>
   <div class= "container1">
        <h2 style="text-align:center; color : black">TRACKING DETAILS OF YOUR ORDERS</h2>
   </div>
   <br>
<!-----Search Box-------->
 <div class='Container4'>
 <form action = "eCargo_MS.php" method = "get"  style="margin: auto; width: 220px;">
    <input type="text" id="userid" name="userid" placeholder="Enter User ID" width ="300px">
    <input type="submit" value="TRACK!">
 </form>
</div>

 
 <!--PHP Starts-->
<?php $user = $_GET['userid']; ?>
<div class = 'container3'>        
  <?php require_once('eCargoMS_conn.php'); ?>
  <?php
  $query = "SELECT * FROM orders where user_id ='$user' ";
  $resultset = mysqli_query($connection , $query);

 if ($resultset) 
 {
    $table = '<table class = "center">';
    $table  .= '<tr><th>Order_ID</th><th>Container Type</th><th>Delivery Method</th><th>Current Location</th><th>Destination</th></tr>';

    while ($record = mysqli_fetch_assoc($resultset))
    {
       $table .= '<tr>';
       $table .= '<td>' . $record['Order_ID'] . '</td>';
       $table .= '<td>' . $record['Container Type'] . '</td>';
       $table .= '<td>' . $record['Delivery Method'] . '</td>';
       $table .= '<td>' . $record['Current Location'] . '</td>';
       $table .= '<td>' . $record['Destination'] . '</td>';
       $table .= '</tr>';
    }
 }
 ?>

<?php echo $table ?>
</div>
 
<!--PHP ends-->

  <!------ footer begins ---->
<br/><br/><br/><br/><br/><br/>
    <footer>

    <div class="card text-center">
    <div class="card-footer text-muted">
        <p>© 2022 Copyright:<a href="new devop.html">E-Cargo Service&nbsp;</a><img src="https://www.logotypes101.com/logos/660/4E5FCAC963A972ABFE3FE981905656AF/cargo.png" length="100" height="50" alt="logo"></p>
    </div>
  </div>


    </footer>
<!--------- footer ends ------>  




<!-- Bootstrap JS -->
<script src="source/js/popper.min.js"></script>
<script src="source/js/jquery-3.4.1.slim.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js" ></script>
</body>



</html>
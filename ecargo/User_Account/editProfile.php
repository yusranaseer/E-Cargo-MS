<?php
    $id = $_GET['eid'];
    $con = mysqli_connect('localhost','root' ,'','ecargoms');

            if(!$con){
            echo "Oops!!! Something went wrong"; 
            }

        $sqluser= "Select * from user where user_id = '$id'";
        $execuser = mysqli_query($con, $sqluser);
   
            while ($rowuser = mysqli_fetch_array($execuser)){
                

               $uname = $rowuser['name'];
               $uemail = $rowuser['email'];
               $unumber = $rowuser['contact_number'];
               $uaddress = $rowuser['address'];
   
            }
            
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >

<!--	Style CSS	-->
<link href="source/css/user.css" rel="stylesheet">

<!-- Link for fontawesome -->
<script src="https://kit.fontawesome.com/affc06d9e8.js" crossorigin="anonymous"></script>
	
<title>My Details</title>
</head>
<body>

<!-- Navigation bar -->
<?php
    include 'nav_footer/navigationBar.php';
?>

<!-- Profile start -->
<div class="container-fluid bg-1">
    <div class="container">
        <div class="row">
            <div class="col-4 margin-2">
                <img class="rounded-circle" width="200" height="200" src="images/myprofile/profile.png" alt="profil picture">  <!--Profile-->
            </div>
        </div>
    </div>
</div>
<!-- Profile end -->
	  
<div class="container margin-1">
    <div class="row">
        <!-- Side bar start -->
        <div class="col-4">
            <div>
                <div class="mt-3">
                    <ul>
                        <li class="sidebar-link">                        
                            <a href="myDetail.php"><i class="fas fa-user"></i> My Detail</a>
                        </li>
                        <li class="sidebar-link">
                            <a href="myOrder.php"><i class="fas fa-clipboard"></i> My Order</a>
                        </li>
                        <li class="sidebar-link-active">
                            <a class="text-primary active" href="editProfile.php"><i class="fas fa-edit"></i> Edit Profile</a>
                        </li>
                        <li class="sidebar-link">
                            <a href="changePassword.php"><i class="fa fa-key" aria-hidden="true"></i> Change Password</a>
                        </li>
                        <li class="sidebar-link">
                            <a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
                        </li>
                    </ul>                    
                </div>
            </div>
        </div>
        <!-- Side bar end -->

        <!-- Edit profile start -->
        <div class="col-8">
            <div class="shadow bg-white rounded detail-1">    
                <form method="POST">
                    <div class="form-group">
                        <label for="profile">Change profile photo</label>
                        <input type="file" class="form-control-file" id="profile">
                    </div>
                    <div class="row margin-3">
                        <div class="col-3">
                        <label for="name">Name</label>
                        </div> 
                        <div class="col-9">
                        <input type="name" class="form-control" id="name" placeholder="Your name" required value="<?php echo $uname?>" name="Name" >
                        </div>
                    </div>
                    <div class="row margin-3">
                        <div class="col-3">
                        <label for="email">E-mail</label>
                        </div> 
                        <div class="col-9">
                        <input type="email" class="form-control" id="email" placeholder="Your email" required value="<?php echo $uemail?>" name="email" >
                        </div>
                    </div>
                    <div class="row margin-3">
                        <div class="col-3">
                        <label for="phone">Phone Number</label>
                        </div> 
                        <div class="col-9">
                        <input type="tel" class="form-control" id="phone" placeholder="Phone number" required value="<?php echo $unumber?>" name="phone" >
                        </div>
                    </div>
                    
                    <div class="row margin-3">
                        <div class="col-3">
                        <label for="address">Address</label>
                        </div> 
                        <div class="col-9">
                        <textarea id="address" class="form-control" rows="5" placeholder="Address" name="address" ><?php echo $uaddress?></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <div class="form-check">
                        <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                    </div>
                        
                </form>
            </div>
        </div>
        <!-- Edit profile end -->
    </div>
</div>

<div class="bg-2"></div>
    
<!-- footer ---->
<?php
    include 'nav_footer/footer.php';
?>

<!-- Bootstrap JS -->
<script src="source/js/popper.min.js"></script>
<script src="source/js/jquery-3.4.1.slim.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js" ></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>

<?php

if(isset($_POST['submit']))
{
    $name = $_POST['Name'];    
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $con = mysqli_connect('localhost','root' ,'','ecargoms');

        if(!$con){
            echo "Oops!!! Something went wrong"; 
        }
      
    $editdata = "UPDATE user set name='$name', email='$email', contact_number='$phone', address='$address' where user_id = '$id'";

    $execd = mysqli_query($con, $editdata);

    if($execd){
        ?>
        <script>
          Swal.fire(
            {
              icon: 'Success',
              title:'Updated',
              text:'Succesfully Updated User Info!'
            }
          )
        </script>
  <?php
    }
}
?>
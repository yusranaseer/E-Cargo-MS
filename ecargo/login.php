<html>
<head>
<title>login</title>
<link rel="stylesheet" href="login-reg.css">
</head>
<body>

<!-- <?php
  include 'message.php';
?> -->

<div class="login">
  <h1>Login</h1>
    <form method="post" name="f1">
      <input type="text" name="username" placeholder="Username" required="required" />
        <input type="password" name="password" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large" name="login">Let me in.</button>
        <h5>Not a registered user? <a href="registration.php">click here to Register</a></h5>
    </form>
</div>

<script>  
            function validation()  
            {  
                var id=document.f1.username.value;  
                var ps=document.f1.password.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
          </script> 
</body>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</html>

<?php
session_start();
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'ecargoms';

$con = mysqli_connect($host, $user, $pass, $db);

if(isset($_POST['login']))
{
  $username = $_POST['username'];  
  $password = $_POST['password'];  
  
      $username = stripcslashes($username);  
      $password = stripcslashes($password);

      $username = mysqli_real_escape_string($con, $username);  
      $password = mysqli_real_escape_string($con, $password);  
    
      $sql = "select * from user";
      $status = 0;
      $result = mysqli_query($con, $sql);  

      while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
      {
        if($row['username']== $username && $row['password']==$password)
        {
          $_SESSION['sid'] = $row['user_id'];
          $_SESSION['sname'] = $row['username'];

          ?>
          <script>
            location.href = 'User_Account/myDetail.php';
          </script>
          <?php
          $status=1;
        }
      }

      if($status==0){
        ?>
        <script>
          Swal.fire(
            {
              icon: 'error',
              title:'Unauthorized Access',
              text:'Invalid Username or Password'
            }
          )
        </script>
  <?php
      }
    }
  ?>
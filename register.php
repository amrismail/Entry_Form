<?php
    
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'usersdb');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   
   if (isset($_POST['register_btn'])){
    session_start();
    //$user_id = ($_POST['user_id']);
    $username = ($_POST['username']);
    $email = ($_POST['email']);
    $password = ($_POST['password']);
    $date = date('y-m-d');
    
    $password = md5($password);
    $sql = "INSERT INTO users( username, email, password, registration_date) VALUES('$username','$email','$password','$date')";
    mysqli_query($db, $sql);
    $_SESSION['message'] = "You are now logged in";
    $_SESSION['username'] = $username;
    echo "$sql";
    header("location: welcome3.php?username=$username");

   }
   
   
   
?>


<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Registration form</title>
    <script type="text/javascript">
function validateForm() {
var name= document.getElementById("username").value;
</script>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="css/normalize.css">

    
        <link rel="stylesheet" href="css/style.css">

    
    
    
    
  </head>

  <body>

    <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Register</a></li>
        <li class="tab"></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">
          <h1>Registration form </h1>
          <form method="POST" action="register.php" onsubmit="return validateForm()" >
          
          <div class="top-row">
            <div class="field-wrap">
             <!-- <label>
                ID<span class="req">*</span>
              </label>
              <!--<input type="text" name="user_id" required autocomplete="off" />-->
            </div>
        
            <div class="field-wrap">
              <label>
                Username<span class="req">*</span>
              </label>
              <input type="text" name="username"required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="email" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>
          </div>
          
          <button type="submit" name="register_btn" class="button button-block"/>Get Started</button>
          
          </form>

        </div>
        
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
  </body>
</html>

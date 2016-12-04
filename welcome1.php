<?php
    session_start();
    ?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
</head>
<body>
<div><h1>Welcome <?php echo $_SESSION['username']; ?> </h1>
</div>



</body>
</html>
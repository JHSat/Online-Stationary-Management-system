<?php
    require 'connection.php';
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="large.png" />
       <img src="large.png" alt="HTML5 Icon" style="width:128px;height128px;">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
 
        <div>
            
            <br><br><br>
           <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3>LOGIN</h3>
                            </div>
                            <div class="panel-body">
                                <p>Login to see orders.</p>
                                <form method="post" action="order.php">
                                    <div class="form-group">
                           <input type="email" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                    </div>
                                    <div class="form-group">
                           <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" pattern=".{6,}">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Login" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
           </div>
           <br><br><br><br><br>
           <footer class="footer">
               <div class="container">
                <center>
                   <p>Copyright &copy Stationary</a> Store. All Rights Reserved.</p>
                   
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>



 <?php



 if(isset($_POST['submit']))
 {
	 $email=$_POST['email'];
	 $psw=$_POST['password'];
	 $query="select * from admin where email='admin@gmail.com' && password='123456'";
	 $data=mysqli_query($conn,$query);
	 $total=mysqli_num_rows($data);
	 if($total==1)
	 {
         $_SESSION['email']=$email;
		 header('location:order.php');
	 }
	 else
	 {
                echo "<script type='text/javascript'>alert('Login failed....');</script>";
	 }

 }


 ?>

<?php 
	include("functions/connection.php");
	session_start();
?>

<html>
	<head>
		<title>Schedule Management</title>
		<link rel="stylesheet" type="text/css" href="styles/style.css"/>
	</head>

	<body>
		<div>
		  <div id="header">
		    <div id="section">
		      <div><a href="home.php"><img src="images/logo.png" alt="" height="100px" width="350px"/></a></div>
		      <h1>
		      <span>DEPARTMENT OF CIVIL ENGINEERING 
		      <h3 style="font-size:18px; text-align:center; color:white;">
		      <i>Schedule Information</i>
		      </h3>
		      </span>
		      </h1> 
		    </div>
		  </div>

		<ul id="menu"> <li style="margin-left:300px"><a href=""></a></li>
	  
    </ul>

     <div id="content">

      <form class="register" method="post">

         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         Username<sup>*</sup>  <input type="text" name="formid" class="register-input" required /> <br>

         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         Password<sup>*</sup>  <input type="password" name="formpass" class="register-input" required /> <br>

         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         Role<sup>*</sup> : 
               <select name ="formrole" style="width:40%; margin: 10px;">
                        <option>Faculty</option>
                        <option>Admin</option>
               </select> <br/><br/>

          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="forgot.php">Forgot Password?</a>

         <input type="submit" value="Login" name="login" class="register-button" style="margin-left: 160px">

       </form>
        
      </div>

  	  <div id="footer">
        <div>
            <div id="connect"> 
              <a href="https://www.facebook.com/social.mansingh" target="_blank"><img src="images/icon-facebook.gif" alt=""  /></a> 
              <a href="https://twitter.com/" target="_blank"><img src="images/icon-twitter.gif" alt="" /></a>
              <a href="https://www.youtube.com/" target="_blank"><img src="images/icon-youtube.gif" alt="" /></a>
            </div>
          
          <div class="section">
              <p>
                Copyright <sup>&copy;</sup> <a href="http://www.mnnit.ac.in">MNNIT</a> - All Rights Reserved<br/>
                      Developed &amp; Maintained By : Team MCA
              </p>
          </div>
        </div>
       </div>
      </div>
	</body>
</html>

<?php
  
  if(isset($_POST['login']))
  {
      $id = $_POST['formid'];
      $pass = $_POST['formpass'];
      $role = $_POST['formrole'];
      $pass = md5($pass);
      $query = "select * from login where id ='$id' AND pass ='$pass' AND role = '$role'";

     if( mysqli_num_rows(mysqli_query($conn,$query)) )
     {
        if($role == "Admin")
        {
            $_SESSION['aid'] = $id;
            echo "<script>window.open('admin/admin.php','_self')</script>";
        }
        else
        {
        	
        	$_SESSION['fid'] = $id;
            echo "<script>window.open('faculty/faculty.php','_self')</script>";
        }
     }
     else
     {
        echo "<script>";
        echo "alert('Sorry, invalid information.')";
        echo "</script>";
     }
  }
?>

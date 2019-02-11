<?php 
	include("../functions/connection.php");
	session_start(); 
        if(!isset($_SESSION['fid']))  
        header("Location: ../home.php");
 ?>

<html>
    <head>
          <title>Faculty's Home</title>
          <link rel="stylesheet" type="text/css" href="../styles/style.css" />

    </head>

    <body>
        <div id="page">
          <div id="header">
            <div id="section">
              <div><a href="faculty.php"><img src="../images/logo.png" alt="" height="100px" width="350px"/></a></div>
              <h1>
              <span>DEPARTMENT OF CIVIL ENGINEERING 
              <h3 style="font-size:18px; text-align:center; color:white;">
              <i>Schedule Information</i>
              </h3>
              </span>
              </h1> 
            </div>
         </div>

        <ul id="menu">
            <li style="margin-left:300px"><a href="faculty.php">Home</a></li>
            <li style="margin-left:95px"><a href="myprofile.php">My Profile</a></li>
            <li style="margin-left:95px"><a href="changepass.php">Change Password</a></li>
            <li style="margin-left:95px"><a href="logout.php">LogOut</a></li>
        </ul>
      
    <!-- _______________________Start of content Area_____________________________-->
      <div id="content" style=" height:480px">

      <form class="register" method="post">

           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         Current Password<sup>*</sup>
         <input type="password" name="old" class="register-input" required > <br>

         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         New Password<sup>*</sup>
         <input type="password" name="new1" class="register-input" required > <br>

         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         Retype New Password<sup>*</sup> 
         <input type="password" name="new2" class="register-input" required > <br>
         
         <br>

         <input type="submit" value="Change Password" name="changepass" class="register-button" style="margin-left: 160px">
      </form>
        
      </div>

    <!-- _______________________End of Content Area_____________________________-->
      <div id="footer">
        <div>
            <div id="connect"> 
              <a href="https://www.facebook.com/social.mansingh" target="_blank"><img src="../images/icon-facebook.gif" alt=""  /></a> 
              <a href="https://twitter.com/" target="_blank"><img src="../images/icon-twitter.gif" alt="" /></a>
              <a href="https://www.youtube.com/" target="_blank"><img src="../images/icon-youtube.gif" alt="" /></a>
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

if( isset($_POST['changepass']) )
{
  $old = $_POST['old'];
  $new1 = $_POST['new1'];
  $new2 = $_POST['new2'];
  $fid = $_SESSION['fid'];
  $mdpass = md5($new1);

  if( $new1 == $new2 )
  {
    $sql = "select * from faculty where fid = '$fid'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    $pass = $row['pass'];

    if( $pass == $old )
    {
      $sql = "update faculty set pass = '$new1' where fid = '$fid'";
      mysqli_query($conn,$sql);

      $sql = "update login set pass = '$mdpass' where id='$fid'";

      if( mysqli_query($conn,$sql) )
      {
        echo "<script>";
        echo "alert('Your Password has been changed.')";
        echo "</script>";
      }
    }
    else
    {
      echo "<script>";
      echo "alert('Your old Password is not correct.')";
      echo "</script>";
    }
  }
  else
  {
    echo "<script>";
    echo "alert('Please type correct Password in both filed.')";
    echo "</script>";
  }
}

?>
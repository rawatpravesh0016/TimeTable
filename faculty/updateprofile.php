<?php 
    include("../functions/functions.php");
    session_start(); 
    if(!isset($_SESSION['fid']))  
      header("Location: ../home.php");       
?>
<html>
    <head>
          <title>My Profile</title>
          <link rel="stylesheet" type="text/css" href="../styles/style.css" />
    </head>

    <body onload="noBack()">
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
    <div id="content" style=" height:750px">

      <form class="register" method="post">

         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         Faculty ID : 
         <input type="text" name="fid" class="register-input" readonly value="<?php echo $_SESSION['fid']; ?>"> <br>

         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         Full Name : 
         <input type="text" name="fname" class="register-input" value="<?php echo  fgetname(); ?>"> <br>

         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         Mail ID : 
         <input type="text" name="email" class="register-input" value="<?php echo  getemail(); ?>" > <br>

         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         Contact Number : 
         <input type="text" name="contact" class="register-input" value="<?php echo  getcontact(); ?>" > <br>

         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         Security Question : 
         <input type="text" name="qus" class="register-input" value="<?php echo  getqus(); ?>" > <br>

         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         Security Answer : 
         <input type="text" name="ans" class="register-input" value="<?php echo  getans(); ?>" > <br>

         <input type="submit" value="Update Profile" name="update" class="register-button" style="margin-left: 160px">
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
  
    function fgetname ()
    {
      global $conn;
      $fid = $_SESSION['fid'];
      $sel = mysqli_query($conn,"select * from faculty where fid = '$fid'");
      $res = mysqli_fetch_array($sel);
      return $res['fname'];
    }
    function getemail ()
    {
      global $conn;
      $fid = $_SESSION['fid'];
      $sel = mysqli_query($conn,"select * from faculty where fid = '$fid'");
      $res = mysqli_fetch_array($sel);
      return $res['mailid'];
    }
    function getcontact ()
    {
      global $conn;
      $fid = $_SESSION['fid'];
      $sel = mysqli_query($conn,"select * from faculty where fid = '$fid'");
      $res = mysqli_fetch_array($sel);
      return $res['contact'];
    }
    function getqus ()
    {
      global $conn;
      $fid = $_SESSION['fid'];
      $sel = mysqli_query($conn,"select * from faculty where fid = '$fid'");
      $res = mysqli_fetch_array($sel);
      return $res['squs'];
    }
    function getans ()
    {
      global $conn;
      $fid = $_SESSION['fid'];
      $sel = mysqli_query($conn,"select * from faculty where fid = '$fid'");
      $res = mysqli_fetch_array($sel);
      return $res['sans'];
    }
    

    if(isset($_POST['update']))
    {
        $fid = $_SESSION['fid'];
        $fname = $_POST['fname'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $qus = $_POST['qus'];
        $ans = $_POST['ans'];
        
        $query = "update faculty set fname ='$fname', mailid ='$email', contact = '$contact', squs = '$qus', sans = '$ans' where fid = '$fid '";
        $sel = mysqli_query($conn,$query);
        if($sel)
        {
          echo "<script>";
          echo "alert('Profile Updated succesfully.')";
          echo "</script>";
          echo "<script>window.open('myprofile.php','_self')</script>";
        }
        else
        {
          echo "<script>";
          echo "alert('Error during updation.')";
          echo "</script>";
        }
    }
    
?>
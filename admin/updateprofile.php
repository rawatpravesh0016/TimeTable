<?php 
    include("../functions/connection.php");
    session_start(); 
    if(!isset($_SESSION['aid']))  
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
              <div><a href="admin.php"><img src="../images/logo.png" alt="" height="100px" width="350px"/></a></div>
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
    
    <li style="margin-left:290px"><a href="admin.php">Home</a></li>
    <li><a href="">=> Add <=</a>
      <ul>
        <li><a href="set_session.php">Set Session</a></li>
        <li><a href="add_course.php">Add Course</a></li>
        <li><a href="add_subject.php">Add Subject </a></li> 
        <li><a href="add_venue.php">Add Venue</a></li>
        <li><a href="add_lecture.php">Add Lecture</a></li>
        <li><a href="add_faculty.php">Add Faculty</a></li>
        <li><a href="add_admin.php">Add Admin</a></li>
      </ul>
    </li>
    <li><a href="">=> Delete <=</a>
      <ul>
        <li><a href="delete_course.php">Delete Course</a></li>
        <li><a href="delete_subject.php">Delete Subject </a></li> 
        <li><a href="delete_venue.php">Delete Venue</a></li>
        
        <li><a href="delete_faculty.php">Delete Faculty</a></li>
        <li><a href="delete_admin.php">Delete Admin</a></li>
      </ul>
    </li>
    <li><a href="">=> View <=</a>
      <ul>
        <li><a href="view_venue.php">ByVenue</a></li>
        
      </ul>
    </li>
    <li><a href="">Settings</a>
      <ul>
        <li><a href="myprofile.php">My Profile</a></li>
        <li><a href="changepass.php">Change Password</a></li>
      </ul>
    </li>
    <li><a href="logout.php">LogOut</a>
    </li>
  </ul>
      
    <!-- _______________________Start of content Area_____________________________-->
    <div id="content" style=" height:850px">

      <form class="register" method="post">

         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         Admin ID : 
         <input type="text" name="aid" class="register-input" readonly value="<?php echo $_SESSION['aid']; ?>"> <br>

         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         Full Name : 
         <input type="text" name="aname" class="register-input" value="<?php echo  getname(); ?>"> <br>

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
  
    function getname ()
    {
      global $conn;
      $aid = $_SESSION['aid'];
      $sel = mysqli_query($conn,"select * from admin where aid = '$aid'");
      $res = mysqli_fetch_array($sel);
      return $res['aname'];
    }
    function getemail ()
    {
      global $conn;
      $aid = $_SESSION['aid'];
      $sel = mysqli_query($conn,"select * from admin where aid = '$aid'");
      $res = mysqli_fetch_array($sel);
      return $res['mailid'];
    }
    function getcontact ()
    {
      global $conn;
      $aid = $_SESSION['aid'];
      $sel = mysqli_query($conn,"select * from admin where aid = '$aid'");
      $res = mysqli_fetch_array($sel);
      return $res['contact'];
    }
    function getqus ()
    {
      global $conn;
      $aid = $_SESSION['aid'];
      $sel = mysqli_query($conn,"select * from admin where aid = '$aid'");
      $res = mysqli_fetch_array($sel);
      return $res['squs'];
    }
    function getans ()
    {
      global $conn;
      $aid = $_SESSION['aid'];
      $sel = mysqli_query($conn,"select * from admin where aid = '$aid'");
      $res = mysqli_fetch_array($sel);
      return $res['sans'];
    }
    

    if(isset($_POST['update']))
    {
        $aid = $_SESSION['aid'];
        $aname = $_POST['aname'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $qus = $_POST['qus'];
        $ans = $_POST['ans'];
        
        $query = "update admin set aname ='$aname', mailid ='$email', contact = '$contact', squs = '$qus', sans = '$ans' where aid = '$aid '";
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

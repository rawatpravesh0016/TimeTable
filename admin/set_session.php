<?php

	session_start();
	if(!isset($_SESSION['aid']))
	 header("Location: ../home.php");

?>

<html>
    <head>
          <title>Set Session</title>
          <link rel="stylesheet" type="text/css" href="../styles/style.css" />
    </head>

    <body>
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
      <div id="content">

    	<form class="register" method="post">

    		   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Session Years<sup>*</sup>
			   <input type="text" name="formyname" class="register-input" required > <br>

			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Semester Type<sup>*</sup> : 
      			   <select name ="formstype" style="width:40%; margin: 10px;">
                        <option>Odd</option>
                        <option>Even</option>
               </select> <br/>

			   <input type="submit" value="Set Session" name="set" class="register-button" style="margin-left: 160px">
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
include("../functions/connection.php");

if( isset($_POST['set']) )
{

$yname = $_POST['formyname'];
$stype = $_POST['formstype'];

$query = "DELETE FROM year";
mysqli_query($conn,$query);

$query = "INSERT into year values ('$yname','$stype')";

if( !mysqli_query($conn,$query) )
{
  echo "<script>";
  echo "alert('Error during set session.')";
  echo "</script>";
}
else
{
	echo "<script>";
	echo "alert('Session set successfully.')";
	echo "</script>";
}

}
?>

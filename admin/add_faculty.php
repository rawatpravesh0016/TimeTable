<?php
	session_start();
	if(!isset($_SESSION['aid']))
      header("Location: ../home.php");
?>

<html>
    <head>
          <title>Add Faculty</title>
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
      <div id="content" style=" height:850px">

    	<form class="register" method="post">

    		   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Faculty ID<sup>*</sup>(at MAX 5 characters)
			   <input type="text" name="formfid" class="register-input" required maxlength="5"> <br>

			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Full Name<sup>*</sup> 
			   <input type="text" name="formfname" class="register-input" required > <br>

			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Mail ID<sup>*</sup> 
			   <input type="email" name="formmail" class="register-input" required > <br>

			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Contact Number<sup>*</sup> 
			   <input type="text" name="formcontact" class="register-input" required > <br>

			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Password<sup>*</sup>
			   <input type="Password" name="formpassword" class="register-input" required style="width:60%"> <br><br>

			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Security Question<sup>*</sup>
			   <select name="formsqus" style="width: 45%;">
							<option>What is your pet name?</option>
							<option>Name of your best friend</option>
							<option>What is your lucky number?</option>
			        <option>Which was your first school?</option>
			        <option>What’s your nickname at home?</option>
			        <option>Name of your roommate in college</option>
			        <option>The last 6 digits of your ID number</option>
			   </select> 
			   <br><br><br>

			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Security Answer<sup>*</sup>
			   <input type="text" name="formsans" class="register-input" required > <br>

			   <input type="submit" value="Add Faculty" name="add" class="register-button" style="margin-left: 160px">
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

if( isset($_POST['add']) )
{

$fid = $_POST['formfid'];
$fname = $_POST['formfname'];
$mail = $_POST['formmail'];
$contact = $_POST['formcontact'];
$pass = $_POST['formpassword'];
$squs = $_POST['formsqus'];
$sans = $_POST['formsans'];

$query = "insert into faculty values ('$fid','$fname','$mail','$contact','$pass','$squs','$sans')";

if( !mysqli_query($conn,$query) )
{
  echo "<script>";
  echo "alert('This username is already in use')";
  echo "</script>";
}
else
{
	$pass = md5($pass);
	$role = "Faculty";
	$query = "insert into login values ('$fid','$pass','$role')";

	if( !mysqli_query($conn,$query) )
	{
	  echo "<script>";
	  echo "alert('Error during add faculty.')";
	  echo "</script>";
	}
	else
	{
	  echo "<script>";
	  echo "alert('Fuculty Added Successfully')";
	  echo "</script>";
	}
}

}

?>

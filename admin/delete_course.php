<?php 
	include("../functions/functions.php");
	session_start();
	if(!isset($_SESSION['aid']))
	header("Location: ../home.php");
 ?>
<html>
    <head>
          <title>Delete Course</title>
          <link rel="stylesheet" type="text/css" href="../styles/style.css" />

          <script type="text/javascript">
			   function update(str)
			   {
			      var xmlhttp;
			      if (window.XMLHttpRequest)
			      {// code for IE7+, Firefox, Chrome, Opera, Safari
			        xmlhttp=new XMLHttpRequest();
			      }
			      else
			      {// code for IE6, IE5
			        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			      } 

			      xmlhttp.onreadystatechange = function() 
			      {
			        if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
			        {
			          document.getElementById("data").innerHTML = xmlhttp.responseText;
			        }
			      }
			      xmlhttp.open("GET","get_branch.php?opt="+str, true);
			      xmlhttp.send();
			  }
		  </script>

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
			   Select Course Name<sup>*</sup> : &nbsp;&nbsp;
			   <select name="formcname" style="width: 45%;" onchange="update(this.value)">
			   <option>Select an Option</option>
			   <?php get_course(); ?>
			   </select><br/><br/>

			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Select Branch Name<sup>*</sup> : &nbsp;&nbsp;
			   <select name="formbname" style="width: 45%;" id="data">
			   </select><br/><br/><br>
			   
			   <input type="submit" value="Delete Course" name="delete" class="register-button" style="margin-left: 160px">
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
//include("connection.php");

if( isset($_POST['delete']) )
{

$cname = $_POST['formcname'];
$bname = $_POST['formbname'];

	$query = "delete from course where cname = '$cname' AND bname = '$bname'";
	$run = mysqli_query($conn,$query);
	
	if($run)
	{
		echo "<script>";
		echo "alert('successfully deleted')";
		echo "</script>";
	}
	else
	{
		echo "<script>";
		echo "alert('NOT delete')";
		echo "</script>";
	}
  echo "<meta http-equiv='refresh' content='0'>";
}

?>

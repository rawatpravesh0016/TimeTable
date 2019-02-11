<?php 
	include("../functions/functions.php");
	session_start();
	if(!isset($_SESSION['aid']))
	header("Location: ../home.php");
 ?>
<html>
    <head>
          <title>Delete Lecture</title>
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
			          document.getElementById("branch").innerHTML = xmlhttp.responseText;
			        }
			      }
			      xmlhttp.open("GET","get_branch.php?opt="+str, true);
			      xmlhttp.send();
			  }

			  function update1(str)
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
			          document.getElementById("fid").innerHTML = xmlhttp.responseText;
			        }
			      }
			      xmlhttp.open("GET","get_fid.php?opt="+str, true);
			      xmlhttp.send();
			  }

			  function update2(str)
			   {
			      var xmlhttp;
			      var course = document.getElementById("course").value;

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
			          document.getElementById("sem").innerHTML = xmlhttp.responseText;
			        }
			      }
			      xmlhttp.open("GET","get_sem.php?opt="+str+"&cname="+course, true);
			      xmlhttp.send();
			  }

			  function update3(str)
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
			          document.getElementById("etime").innerHTML = xmlhttp.responseText;
			        }
			      }
			      xmlhttp.open("GET","get_etime.php?opt="+str, true);
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
      <div id="content" style=" height:590px">

    	<form class="register" method="post">

    		   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    		   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Select Course<sup>*</sup> : &nbsp;&nbsp;
			   <select id="course" name="formcname" style="width: 25%;" onchange="update(this.value)">
			   <option>Select an Option</option>
			   <?php get_course(); ?>
			   </select> <br><br/>

			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Select Branch<sup>*</sup> : &nbsp;&nbsp;
			   <select id="branch" name="formbname" style="width: 25%;" onchange="update2(this.value)">
			   </select> <br><br/>

			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Select Semester<sup>*</sup> : 
			   <select id="sem" name="formsem" style="width: 25%;">
			   </select> <br><br/>

			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Select Day<sup>*</sup> :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   <select name="formday" style="width: 25%;">
							<option>Monday</option>
							<option>Tuesday</option>
			        		<option>Wednesday</option>
			        		<option>Thursday</option>
			        		<option>Friday</option>
			    </select> <br/><br/>

			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Start Time<sup>*</sup> : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   <select id="stime" name="formstime" style="width: 25%;" onchange="update3(this.value)">
			   				<option>Select an Option</option>
							<option>08</option>
							<option>09</option>
			        		<option>10</option>
			        		<option>11</option>
			        		<option>12</option>
			        		<option>14</option>
							<option>15</option>
			        		<option>16</option>
			        		<option>17</option>
			    </select> <br/><br/>

			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   End Time<sup>*</sup> : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   <select id="etime" name="formetime" style="width: 25%;">							
			    </select> <br/><br/>

			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Faculty Name<sup>*</sup> : &nbsp;&nbsp;
			   <select name="formfname" style="width: 25%;" onchange="update1(this.value)">
			   <option>Select an Option</option>
			   <?php get_facultyname(); ?>
			   </select> <br><br/>

			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   1<sup style="color: black;">st</sup> Faculty ID<sup>*</sup> :
			   &nbsp;&nbsp;
			   <select name="formfid1" style="width: 25%;" id="fid">
			   <option>Select an Option</option>
			   </select><br><br>

			   <input type="submit" value="Delete Lecture" name="delete" class="register-button" style="margin-left: 160px">
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

if( isset($_POST['delete']) )
{

$cname = $_POST['formcname'];
$bname = $_POST['formbname'];
$sem = $_POST['formsem'];
$day = $_POST['formday'];
$stime = $_POST['formstime'];
$etime = $_POST['formetime'];
$fid1 = $_POST['formfid1'];

$query = "delete from mastertable where cname='$cname' AND bname='$bname' AND sem=$sem AND day='$day' AND stime=$stime AND etime=etime AND fid1='$fid1'";

$run = mysqli_query($conn,$query);

if( mysqli_affected_rows($conn)==0 )
{
  echo "<script>";
  echo "alert('Not in Master Table.')";
  echo "</script>";
}
else
{
	echo "<script>";
	echo "alert('Lecture deleted successfully.')";
	echo "</script>";
}
}
?>

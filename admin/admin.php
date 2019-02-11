<?php 
	include("../functions/functions.php");
	session_start();
	if(!isset($_SESSION['aid']))
	header("Location: ../home.php");
 ?>
<html>
    <head>
          <title>Admin's Home</title>
          <link rel="stylesheet" type="text/css" href="../styles/style.css" />
          
           <script type="text/javascript">
              

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

           </script>

    </head>

    <body >
        <div id="page" >
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
    	
    	<div style="float: left; position: absolute; margin-left: 50px;">
	        
	        <form action="viewbyfaculty.php" class="register" method="post" target="_blank">
	               

	               <br/>
	               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	               Faculty Name<sup>*</sup> : &nbsp;&nbsp;
	               <select name="formfname" style="width: 25%;" onchange="update1(this.value)">
	               <option>Select an Option</option>
	               <?php get_facultyname(); ?>
	               </select> <br><br/><br/>

	               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	               Faculty ID<sup>*</sup> : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	               <select name="formfid" style="width: 25%;" id="fid">
	               <!--option>Select an Option</option-->
	               </select><br><br><br/>

	               <input type="submit" value="By Faculty" name="faculty" class="register-button" style="margin-left: 160px">

	        </form>

		</div>

		<div style="float: right; margin-right: 50px;">
	        
	        <form action="viewbycourse.php" class="register" method="post" target="_blank">
	               
	           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    		   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Select Course<sup>*</sup> : &nbsp;&nbsp;
			   <select id="course" name="formcname" style="width: 25%;" onchange="update(this.value)" required>
			   <option>Select an Option</option>
			   <?php get_course(); ?>
			   </select> <br><br/>

			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Select Branch<sup>*</sup> : &nbsp;&nbsp;
			   <select id="branch" name="formbname" style="width: 25%;" onchange="update2(this.value)" required>
			   </select> <br><br/>

			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Select Semester<sup>*</sup> : 
			   <select id="sem" name="formsem" style="width: 25%;" required>
			   </select> <br><br/>

               <input type="submit" value="By Course" name="course" class="register-button" style="margin-left: 160px">
	        
	        </form>
		
		</div>    

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

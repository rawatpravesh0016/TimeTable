<?php include("functions/functions.php"); ?>

<html>
    <head>
          <title>Forgot Password</title>
          <link rel="stylesheet" type="text/css" href="styles/style.css" />

        <script type="text/javascript">
         function update(str)
         {
            var xmlhttp;
            //document.getElementById("data").value = "Man Singh";
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
                document.getElementById("data").value = xmlhttp.responseText;
              }
            }
            xmlhttp.open("GET","get_squs.php?opt="+str, true);
            xmlhttp.send();
        }
      </script>

    </head>

    <body>
        <div id="page">
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

    <ul id="menu">
    <li style="margin-left:300px"><a href=""></a></li>
      </ul>
      
    <!-- _______________________Start of content Area_____________________________-->
      <div id="content" >

      <form class="register" method="post">

         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         Select Faculty ID<sup>*</sup> : &nbsp;&nbsp;
         <select name="formfid" style="width: 50%;" onchange="update(this.value)" > 
         <option>Select an Option</option>
         <?php get_fid(); ?> 
         </select><br><br><br>

         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         Security Qusestion : &nbsp;
         <input type="text" name="formsqus" style="width: 50%;" id="data" disabled> <br><br><br>

         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         Security Answer<sup>*</sup> : &nbsp;&nbsp;&nbsp;
         <input type="text" name="formsans" style="width: 50%;" required> <br>

         <input type="submit" value="Password?" name="find" class="register-button" style="margin-left: 160px">
    </form>
        
      </div>

    <!-- _______________________End of Content Area_____________________________-->
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

if( isset($_POST['find']) )
{

  $fid = $_POST['formfid'];
  $ans = $_POST['formsans'];

	$query = "select pass from faculty where fid = '$fid' AND sans = '$ans'";
	$run = mysqli_query($conn,$query);
	
	if(mysqli_num_rows($run)==1)
	{
    $result = mysqli_fetch_array($run);
    $pass = $result['pass'];
		echo "<script>";
    echo "alert('Your Password is : $pass')";
		echo "</script>";
    echo "<script>window.open('home.php','_self')</script>";
	}
	else
	{
		echo "<script>";
		echo "alert('Wrong Answer.')";
		echo "</script>";
	}

}

?>

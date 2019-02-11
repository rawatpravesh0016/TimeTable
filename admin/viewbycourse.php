<?php 

    include("../functions/functions.php"); 

    session_start();
    if(!isset($_SESSION['aid']))
       header("Location: ../home.php");

  $course = $_POST['formcname'];
	$branch = $_POST['formbname'];
	$sem = $_POST['formsem'];

      //echo "<script>";
      //echo "alert('$course $branch $sem')";
      //echo "</script>";

	//$course = "BTech";
	//$branch = "Civil";
	//$sem = 3;
?>

<html>

    <head>
          <title>Course's Schedule</title> 
          <link rel="stylesheet" type="text/css" href="../styles/table.css"/>
          
          <style>
            #content div.left
            {
                width: 600px;
                float: left;
                margin-left: 10px;
            }

            #content div.right
            {
                width: 600px;
                float: right;
                margin-right: 10px;
            }
          </style>
    </head>

    <body >

     <font color="black">
     <h2 style="font-size:20px; text-align: center;"> 
       Motilal Nehru National Institute Of Technology Allahabad<br/>
     			   Department of Civil Engineering<br/>
      Time Table [<?php get_session_sem($course,$branch) ?><br/>
		<?php echo $course; echo " "; echo $branch; echo "-"; echo $sem; echo " Semester"; ?>
    </h2>
    </font>
      
    <!-- _______________________Start of content Area_____________________________-->

      <div id="content">
     
      <?php  
                $tname="showsubject";
                deletetable($tname);
      ?>

        <table border="2"> 
            <tr>
                <td>Day</td>
                <td>08:00-09:00 Hrs</td><td>09:00-10:00 Hrs</td><td>10:00-11:00 Hrs</td>
                <td>11:00-12:00 Hrs</td><td>12:00-01:00 Hrs</td><td rowspan="6">Lunch Break</td>
                <td>02:00-03:00 Hrs</td><td>03:00-04:00 Hrs</td><td>04:00-05:00 Hrs</td><td>05:00-06:00 Hrs</td>
            </tr>
            <tr>
                <td>Monday</td>
                <?php get_schedule($course,$branch,$sem,"Monday") ?>
            </tr>
            <tr>
                <td>Tuesday</td>
                <?php get_schedule($course,$branch,$sem,"Tuesday") ?>
            </tr>
            <tr>
                <td>Wednesday</td>
                <?php get_schedule($course,$branch,$sem,"Wednesday") ?>
            </tr>
            <tr>
                <td>Thursday</td>
                <?php get_schedule($course,$branch,$sem,"Thursday") ?>
            </tr>
            <tr>
                <td>Friday</td>
                <?php get_schedule($course,$branch,$sem,"Friday") ?>
            </tr>
        </table>

    <br/>
       
      <div class="left">        <?php getCourseName1(); ?>     </div>
      
      <div class ="right">      <?php getCourseName2(); ?>     </div>

      <br/><br/><br/><br/><br/><br/><br/>
      <div style="float:left;margin-left: 20px">        <b>O.C.TimeTable,CED</b>     </div>
      
      <div style="float:right;margin-right: 200px">      <b>Head,CED</b>     </div>

      <center><input type="button" value="Print" style="margin-top:120px" onClick="window.print()" "/></center>

    </div>
    </body>
</html>

<?php 
	include("../functions/functions.php"); 
	session_start();
	
    if(!isset($_SESSION['fid']))
	    header("Location: ../home.php");
	
    $fid = $_SESSION['fid'];
	
    deletetable("showsubject");
?>

<html>
    <head>
          <title>Weekely Schedule</title> 
          <link rel="stylesheet" type="text/css" href="../styles/table.css"/>

          <style>
            #content div.left
            {
                width: 500px;
                float: left;
                margin-left: 10px;
            }

            #content div.right
            {
                width: 500px;
                float: right;
                margin-right: 10px;
            }
          </style>

    </head>

    <body>

     <font color="black">
     <h2 style="font-size:20px; text-align: center;"> Motilal Nehru National Institute Of Technology Allahabad<br/>
     								Department of Civil Engineering<br/>
                                    Time Table <?php get_session() ?>
    </h2> <br>
    
    </font>
      
    <!-- _______________________Start of content Area_____________________________-->
    <div id="content">
    
     <h2 style="font-size:20px;"> Faculty Name : <?php fname($fid);  ?> </h2>
        <table>
            <tr>
                <td>Day</td>
                <td>08:00-09:00 Hrs</td><td>09:00-10:00 Hrs</td><td>10:00-11:00 Hrs</td>
                <td>11:00-12:00 Hrs</td><td>12:00-01:00 Hrs</td><td rowspan="6">Lunch Break</td>
                <td>02:00-03:00 Hrs</td><td>03:00-04:00 Hrs</td><td>04:00-05:00 Hrs</td><td>05:00-06:00 Hrs</td>
            </tr>
            <tr>

                <td>Monday</td>
                <?php get_fschedule("Monday",$fid) ?>
            </tr>
            <tr>
                <td>Tuesday</td>
                <?php get_fschedule("Tuesday",$fid) ?>
            </tr>
            <tr>
                <td>Wednesday</td>
                <?php get_fschedule("Wednesday",$fid) ?>
            </tr>
            <tr>
                <td>Thursday</td>
                <?php get_fschedule("Thursday",$fid) ?>
            </tr>
            <tr>
                <td>Friday</td>
                <?php get_fschedule("Friday",$fid) ?>
            </tr>
        </table>

      <br/>
             <div float="left"> <b>Load : <?php getload() ?></b></div>
      <br/><br>
       
      <div class="left">        <?php getCourseName1(); ?>     </div>
      
      <div class ="right">      <?php getCourseName2(); ?>     </div>

      <br/><br/><br/><br/><br/><br/><br/><br/>
      
      <div style="float:left; margin-left: 20px">        <b>O.C.TimeTable,CED</b>     </div>
      
      <div style="float:right; margin-right: 150px">      <b>Head,CED</b>     </div>
      
      <center><input type="button" value="Print" style="margin-top:120px" onClick="window.print()" "/></center>

      </div>
    </body>
</html>

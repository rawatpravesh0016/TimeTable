
<?php 
	//$conn = mysqli_connect("localhost","root","","dbcivil");
	include("connection.php");

	/*..................................getting teachers............................*/


	function get_securityQus($fid)
	{
		global $conn;
		$get_teacher = "select * from faculty where fid = '$fid'";
		$run_teacher = mysqli_query($conn ,$get_teacher);
		while($row_teacher=mysqli_fetch_array($run_teacher))
		{
			$question=$row_teacher['squs'];
			echo "$question";	
		} 
	}

	function get_fid()
	{

		global $conn;
		$get_teacher = "select fid from faculty where 1 order by fid";
		$run_teacher = mysqli_query($conn ,$get_teacher);
		while($row_teacher=mysqli_fetch_array($run_teacher))
		{
			$teacher_name=$row_teacher['fid'];
			echo "<option>$teacher_name</option>";	
		} 
	}

	function get_fidof($fname)
	{

		global $conn;
		$get_teacher = "select fid from faculty where fname = '$fname' order by fid";
		$run_teacher = mysqli_query($conn ,$get_teacher);
		while($row_teacher=mysqli_fetch_array($run_teacher))
		{
			$teacher_name=$row_teacher['fid'];
			echo "<option>$teacher_name</option>";	
		} 
	}

	function get_aidof($aname)
	{

		global $conn;
		$get_teacher = "select aid from admin where aname = '$aname' order by aid";
		$run_teacher = mysqli_query($conn ,$get_teacher);
		while($row_teacher=mysqli_fetch_array($run_teacher))
		{
			$teacher_name=$row_teacher['aid'];
			echo "<option>$teacher_name</option>";	
		} 
	}
	
	function get_facultyname()
	{

		global $conn;
		$get_teacher = "select DISTINCT fname from faculty order by fname";
		$run_teacher = mysqli_query($conn ,$get_teacher);
		while($row_teacher=mysqli_fetch_array($run_teacher))
		{
			$teacher_name=$row_teacher['fname'];
			echo "<option>$teacher_name</option>";	
		} 
	}

	function get_adminname()
	{

		global $conn;
		$get_teacher = "select DISTINCT aname from admin order by aname";
		$run_teacher = mysqli_query($conn ,$get_teacher);
		while($row_teacher=mysqli_fetch_array($run_teacher))
		{
			$teacher_name=$row_teacher['aname'];
			echo "<option>$teacher_name</option>";	
		} 
	}

	/*.................................getting subjects ...........................*/

	function get_course()
	{
		global $conn;
		$get_sub = "select DISTINCT cname from course order by cname";
		$run_sub = mysqli_query($conn ,$get_sub);
		while($row_sub=mysqli_fetch_array($run_sub))
		{
			$sub_name=$row_sub['cname'];
			echo "<option>$sub_name</option>";	
		} 
	}

	/*.................................getting Branch ...........................*/

	function get_branch()
	{
		global $conn;
		$get_sub = "select DISTINCT bname from course order by bname";
		$run_sub = mysqli_query($conn ,$get_sub);
		while($row_sub=mysqli_fetch_array($run_sub))
		{
			$sub_name=$row_sub['bname'];
			echo "<option>$sub_name</option>";	
		} 
	}

	function get_branchof($cname)
	{
		echo "<option>Select an Option</option>";
		global $conn;
		$get_sub = "select DISTINCT bname from course where cname = '$cname' order by bname";
		$run_sub = mysqli_query($conn ,$get_sub);
		while($row_sub=mysqli_fetch_array($run_sub))
		{
			$sub_name=$row_sub['bname'];
			echo "<option>$sub_name</option>";	
		} 
	}

	/*.................................getting semester ...........................*/

	function get_semof($cname,$bname)
	{
		global $conn;
		$query = "select totalsem from course where cname='$cname' AND bname='$bname'";
		$run = mysqli_query($conn,$query);
		$result = mysqli_fetch_array($run);
		$totalsem = $result['totalsem'];

		$query = "select * from year";
		$run = mysqli_query($conn ,$query);
		while($result = mysqli_fetch_array($run))
		{

			$sem=$result['stype'];			
			if( $sem == "Odd" )
			{
				for ($i=1; $i <= $totalsem; $i+=2) 
				{ 
					echo "<option>$i</option>";
				}
			}
			else
			{
				for ($i=2; $i <= $totalsem; $i+=2) 
				{ 
					echo "<option>$i</option>";
				}
			}
		}

	}

	/*.................................getting semester ...........................*/

	function get_subject()
	{
		global $conn;
		$get_sub = "select scode from subject order by scode";
		$run_sub = mysqli_query($conn ,$get_sub);
		while($row_sub=mysqli_fetch_array($run_sub))
		{
			$sub_name=$row_sub['scode'];
			echo "<option>$sub_name</option>";	
		} 
	}

	/*.................................getting venue ...........................*/

	function get_venue()
	{
		global $conn;
		$get = "select vname from venue order by vname";
		$run = mysqli_query($conn ,$get);
		while($row=mysqli_fetch_array($run))
		{
			
			$v_name=$row['vname'];
			echo "<option>$v_name</option>";
			
		} 
	}

	/* -----------------------------------------------------------------------*/

	function get_session_sem($course,$branch)
	{
		global $conn;
		$query = "select * from year where 1";
		$run = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($run);

		$query1 = "select * from course where cname='$course' and bname='$branch'";
		$run1 = mysqli_query($conn,$query1);
		$row1 = mysqli_fetch_array($run1);

		echo $row['stype'];
		echo " ";
		echo "Semester ";
		echo $row['yname'];
		echo "]<br/>w.e.f. ";
		echo $row1['date'];
	}

	function get_session()
	{
		global $conn;
		$query = "select * from year where 1";
		$run = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($run);

		echo $row['stype'];
		echo " ";
		echo "Semester (";
		echo $row['yname'];
		echo ")";
	}

	function fname($fid)
	{
		global $conn;
		$query = "select fname from faculty where fid = '$fid'";
		$run = mysqli_query($conn,$query);
		$result = mysqli_fetch_array($run);

		echo $result['fname'];
	}

	function get_etime($stime)
	{
		if($stime == "Select an Option")
		{
			echo "<option>Invalid Start Time</option>";
		}
		else
		{
			$stime = (int)$stime;
			//$val = gettype($stime);
			
			$start = $stime+1;
			$end = $stime+3;

			if($stime < 13)
			{
				for ($i=$start; $i<=$end AND $i<=13; $i++) 
				{
					$str = "<option>";
					if($i<10)
						$str.="0";

					$str.=$i."</option>";
					echo "$str";
				}
			}
			else
			{
				for ($i=$start; $i<=$end AND $i<=18; $i++) 
				{
					$str = "<option>";
					if($i<10)
						$str.="0";

					$str.=$i."</option>";
					echo "$str";
				}
			}
		}
		
	}
	
	//.....................................for getting the schedule.....................................


	function getName($scode)
	{
		global $conn;
		$sel = mysqli_query($conn,"select sname from subject where scode = '$scode'");
		$res = mysqli_fetch_array($sel);
		return $res['sname'];
	}

	function addsubject($scode,$stype,$s,$e)
	{
		global $conn;
		$inc = $e-$s;
		$query = "select * from showsubject  where scode = '$scode'";
		$res   = mysqli_query($conn,$query);
		$result = mysqli_fetch_array($res);
		$rows = mysqli_num_rows($res);
		if($rows)
		{
			if($stype == 'Lecture')
			{
				$val  = $result['lcount'];
				$val = $val+$inc;
				$insert = "update showsubject set lcount = $val where scode = '$scode'";
				mysqli_query($conn,$insert);
			}
			else if($stype == 'Tutorial')
			{
				$val  = $result['tcount'];
				$val = $val+$inc;
				$insert = "update showsubject set tcount = $val where scode = '$scode'";
				mysqli_query($conn,$insert);
			}
			else if($stype == 'Practical')
			{
				$val  = $result['pcount'];
				$val = $val+$inc;
				$insert = "update showsubject set pcount = $val where scode = '$scode'";
				mysqli_query($conn,$insert);
			}

		}
		else
		{
			$sname = getName($scode);
			if($stype == 'Lecture')
			{
				$insert = "insert into showsubject(scode,sname,lcount) values('$scode','$sname','$inc')";
				mysqli_query($conn,$insert);
				
			}
			if($stype == 'Tutorial')
			{
				$insert = "insert into showsubject(scode,sname,tcount) values('$scode','$sname','$inc')";
				mysqli_query($conn,$insert);
				
			}
			if($stype == 'Practical')
			{
				$insert = "insert into showsubject(scode,sname,pcount) values('$scode','$sname','$inc')";
				mysqli_query($conn,$insert);
			}
			
		}
	}

	function check($day,$stime,$etime,$fid1,$fid2,$fid3,$fid4,$fid5,$vname,$bname)
	{
		global $conn;		
		if( $fid2!='' )
		{
			$query = "select * from mastertable where day='$day' AND ((fid1='$fid1' or fid2='$fid1') or (fid1='$fid2' or fid2='$fid2'))";
		}
		else
		{
			$query = "select * from mastertable where day='$day' AND (fid1='$fid1' or fid2='$fid1')";
		}

		$run = mysqli_query($conn,$query);
		while( $result = mysqli_fetch_array($run) )
		{
			$start = $result['stime'];
			$end = $result['etime'];
			$course = $result['cname'];
			$branch = $result['bname'];
			$sem = $result['sem'];
			$faculty=$result['fid1'];
			$venue=$result['vname'];
			if(($start==$stime) && ($end==$etime) && ($venue==$vname) && ($course==$cname) && ($faculty==$fid1) && ($branch!=$bname)){
				return "done";
			}
			if( $start==$stime || $end==$etime || ($stime<$start && $etime>$start) || ($stime>$start && $stime<$end) )
			{
				$msg = "Function There is a clash of faculty in ";
				$msg.=$course." ";
				$msg.=$branch." ";
				$msg.=$sem." Sem at ";
				$msg.=$start." to ";
				$msg.=$end.".";
				return $msg;
			}
		}

		$query = "select * from mastertable where day='$day' AND vname='$vname'";
		$run = mysqli_query($conn,$query);
		while( $result = mysqli_fetch_array($run) )
		{
			$start = $result['stime'];
			$end = $result['etime'];
			$course = $result['cname'];
			$branch = $result['bname'];
			$sem = $result['sem'];
			if( $start==$stime || $end==$etime || ($stime<$start && $etime>$start) || ($stime>$start && $stime<$end) )
			{
				$msg = "There is a clash of venue in ";
				$msg.=$course." ";
				$msg.=$branch." ";
				$msg.=$sem." Sem at ";
				$msg.=$start." to ";
				$msg.=$end.".";
				return $msg;
			}
		}
		return "done";
	}

	function letter($str)
	{
		if( $str == 'Lecture' )
			return 'L';
		else if( $str == 'Tutorial' )
			return 'T';
		else
			return 'P';
	}

  	function get_schedule($course,$branch,$sem,$day)
	{
		global $conn;
		$stime=0;
		$etime=0;
		$row=0;
		$scode;
		$stype;
		$gname;
		$vname;
		$fid1;
		$fid2;
		$fid3;
		$fid4;
		$fid5;

		for($i=8;$i<13;)
		{
			$stime=$i;
			for($j=$i+1; $j<=$i+3 AND $j<=13; $j++)
			{
				$etime=$j;
				$query = "select * from mastertable where cname='$course' AND bname='$branch' AND sem='$sem' AND stime='$stime' AND etime='$etime' AND day='$day'";
				$run = mysqli_query($conn,$query);
				$row = mysqli_num_rows($run);
				if($row > 0)
				{
					$colspan = ($j - $i); 
					
					echo "<td colspan='$colspan'>";
					if($row > 1)
					{
						echo "<table>";
						for($k=0,$result=mysqli_fetch_array($run);$k<$row;$k++,$result=mysqli_fetch_array($run))
						{
							
							$scode = $result['scode'];
							$stype = $result['stype'];
							$gname = $result['gname'];
							$vname = $result['vname'];
							$fid1 = $result['fid1'];
							$fid2 = $result['fid2'];
							$fid3 = $result['fid3'];
							$fid4 = $result['fid4'];
							$fid5 = $result['fid5'];
							$s = $result['stime'];
							$e = $result['etime'];
						
							addsubject($scode,$stype,$s,$e);

							$stype = letter($stype);

							echo "<tr><td>";
							echo "$scode($stype)$gname<br/>($vname)<br/>[$fid1";
							if($fid2)
								echo "+$fid2";
							if($fid3)
								echo "+$fid3";
							if($fid4)
								echo "+$fid4";
							if($fid5)
								echo "+$fid5";

							echo "]</td></tr>";

						}
						echo "</table>";
					}
					else
					{
						$result = mysqli_fetch_array($run);
						
						$scode = $result['scode'];
						$stype = $result['stype'];
						$gname = $result['gname'];
						$vname = $result['vname'];
						$fid1 = $result['fid1'];
						$fid2 = $result['fid2'];
						$fid3 = $result['fid3'];
						$fid4 = $result['fid4'];
						$fid5 = $result['fid5'];
						$s = $result['stime'];
						$e = $result['etime'];
					
						addsubject($scode,$stype,$s,$e);

						$stype = letter($stype);

						echo "$scode($stype)$gname<br/>($vname)<br/>[$fid1";
							if($fid2)
								echo "+$fid2";
							if($fid3)
								echo "+$fid3";
							if($fid4)
								echo "+$fid4";
							if($fid5)
								echo "+$fid5";

							echo "]";
					}
					echo "</td>";

					$i = $etime;
					break;
				}
			}
			if($row == 0)
			{
				echo "<td></td>";
				$i++;
			}
		}
		for($i=14;$i<18;)
		{
			$stime=$i;

			for($j=$i+1; $j<=$i+3 AND $j<=18; $j++)
			{
				$etime=$j;
				$query = "select * from mastertable where cname='$course' AND bname='$branch' AND sem='$sem' AND stime='$stime' AND etime='$etime' AND day='$day'";
				$run = mysqli_query($conn,$query);
				$row = mysqli_num_rows($run);
				if($row > 0)
				{
					$colspan = ($j - $i); 
					
					echo "<td colspan='$colspan'>";
					if($row > 1)
					{
						echo "<table>";
						for($k=0,$result=mysqli_fetch_array($run);$k<$row;$k++,$result=mysqli_fetch_array($run))
						{
							
							$scode = $result['scode'];
							$stype = $result['stype'];
							$gname = $result['gname'];
							$vname = $result['vname'];
							$fid1 = $result['fid1'];
							$fid2 = $result['fid2'];
							$fid3 = $result['fid3'];
							$fid4 = $result['fid4'];
							$fid5 = $result['fid5'];
							$s = $result['stime'];
							$e = $result['etime'];
						
							addsubject($scode,$stype,$s,$e);

							$stype = letter($stype);
							
							echo "<tr><td>";
							echo "$scode($stype)$gname<br/>($vname)<br/>[$fid1";
							if($fid2)
								echo "+$fid2";
							if($fid3)
								echo "+$fid3";
							if($fid4)
								echo "+$fid4";
							if($fid5)
								echo "+$fid5";

							echo "]</td></tr>";
						}
						echo "</table>";
					}
					else
					{
						$result = mysqli_fetch_array($run);
						
						$scode = $result['scode'];
						$stype = $result['stype'];
						$gname = $result['gname'];
						$vname = $result['vname'];
						$fid1 = $result['fid1'];
						$fid2 = $result['fid2'];
						$fid3 = $result['fid3'];
						$fid4 = $result['fid4'];
						$fid5 = $result['fid5'];
						$s = $result['stime'];
						$e = $result['etime'];
						
						addsubject($scode,$stype,$s,$e);

						$stype = letter($stype);

						echo "$scode($stype)$gname<br/>($vname)<br/>[$fid1";
							if($fid2)
								echo "+$fid2";
							if($fid3)
								echo "+$fid3";
							if($fid4)
								echo "+$fid4";
							if($fid5)
								echo "+$fid5";

							echo "]";
					}
					echo "</td>";

					$i = $etime;
					break;
				}
			}
			if($row == 0)
			{
				echo "<td></td>";
				$i++;
			}
		}
	}

	//---------------------- new ----------------------

	function get_schedule1($course,$branch,$sem,$day)
	{
		global $conn;
		$stime=0;
		$etime=0;
		$row=0;
		$scode;
		$stype;
		$gname;
		$vname;
		$fid1;
		$fid2;
		$maxx=0;

		echo "<table>";
		for($i=8;$i<=13;$i++)
		{
			$query = "select * from mastertable where cname='$course' AND bname='$branch' AND sem='$sem' AND stime='$stime' AND day='$day'";
			$run = mysqli_query($conn,$query);
			$row = mysqli_num_rows($run);

			if( $row )
			{

			}
		}
		echo "</table>";
		
	}

/*
	function get_fschedule($day,$fid)
	{

		
		global $conn;
		$stime;
		$etime;
		$row;

		$cname;
		$sem;
		$scode;
		$stype;
		$gname;
		$vname;

		for($i=8;$i<13;)
		{
			$stime=$i;
			for($j=$i+1; $j<=$i+3 AND $j<=13; $j++)
			{
				$etime=$j;
				$query = "select * from mastertable where stime='$stime' AND etime='$etime' AND day='$day' AND fid1='$fid'";
				$run = mysqli_query($conn,$query);
				$row = mysqli_num_rows($run);
				if($row>=1)
				{
					$colspan = ($j - $i); 
					echo "<td colspan='$colspan'>";
					$result = mysqli_fetch_array($run);

					$cname = $result['cname'];
					$sem = $result['sem'];
					$scode = $result['scode'];
					$stype = $result['stype'];
					$gname = $result['gname'];
					$vname = $result['vname'];
					//addsubject($scode,$stype);
					echo "$scode($stype)<br/>($vname)";
					echo "</td>";
					$i = $etime;
					break;
				}
			}

			if($row==0)
			{
				echo "<td></td>";
				$i++;
			}
		}

		for($i=14;$i<18;)
		{
			$stime=$i;
			for($j=$i+1; $j<=$i+3 AND $j<=18; $j++)
			{
				$etime=$j;
				$query = "select * from mastertable where stime='$stime' AND etime='$etime' AND day='$day' AND fid1='$fid'";
				$run = mysqli_query($conn,$query);
				$row = mysqli_num_rows($run);
				if($row>=1)
				{
					$colspan = ($j - $i); 
					echo "<td colspan='$colspan'>";
					$result = mysqli_fetch_array($run);

					$cname = $result['cname'];
					$sem = $result['sem'];
					$scode = $result['scode'];
					$stype = $result['stype'];
					$gname = $result['gname'];
					$vname = $result['vname'];
					//addsubject($scode,$stype);
					echo "$scode($stype)<br/>($vname)";
					echo "</td>";
					$i = $etime;
					break;
				}
			}

			if($row==0)
			{
				echo "<td></td>";
				$i++;
			}
		}
	}
*/

	function deletetable($tname)
	{
		global $conn;
		$del = "delete from $tname where 1";
		//echo $del;
		mysqli_query($conn,$del);
	}

	function getfacultyName1()
	{
		global $conn;
		$query = "select * from showfaculty order by scode ASC";
		$run = mysqli_query($conn,$query);
		$row = mysqli_num_rows($run);
		$row = intval(($row+1)/2);
		//$result = mysqli_fetch_array($run);
		for($i = 0 ; $i < $row ; $i++ )
		{
			$result = mysqli_fetch_array($run);
			$code = $result['scode'];
			$sname = $result['sname'];
			$lcount = $result['lcount'];
			$pcount = $result['pcount'];
			$tcount = $result['tcount'];
			if($lcount && !$pcount && !$tcount)
				echo  "$code = $sname [$lcount"."L]";
			else if($pcount && !$lcount && !$tcount)
				echo  "$code = $sname [$pcount"."P]";
			else if($tcount && !$pcount && !$lcount)
				echo  "$code = $sname [$tcount"."T]";
			else if($lcount && $tcount)
				echo  "$code = $sname [$lcount"."L "."$tcount"."T]";
			echo "<br/>";
		}
		echo "<br/>";		
	}

	function getfacultyName2()
	{
		global $conn;
		$query = "select * from showfaculty order by scode ASC";
		$run = mysqli_query($conn,$query);
		$row = mysqli_num_rows($run);
		$n = intval(($row+1)/2);
		$m = $row-$n;

		  //echo "<script>";
		  //echo "alert('$n  $m')";
		  //echo "</script>";

		$query = "select * from showfaculty order by scode ASC LIMIT $m OFFSET $n";
		$run = mysqli_query($conn,$query);
		
		while($result=mysqli_fetch_array($run))
		{
			//$result = mysqli_fetch_array($run);
			$code = $result['scode'];
			$sname = $result['sname'];
			$lcount = $result['lcount'];
			$pcount = $result['pcount'];
			$tcount = $result['tcount'];
			if($lcount && !$pcount && !$tcount)
				echo  "$code = $sname [$lcount"."L]";
			else if($pcount && !$lcount && !$tcount)
				echo  "$code = $sname [$pcount"."P]";
			else if($tcount && !$pcount && !$lcount)
				echo  "$code = $sname [$tcount"."T]";
			else if($lcount && $tcount)
				echo  "$code = $sname [$lcount"."L "."$tcount"."T]";
			echo "<br/>";
		}
		echo "<br/>";
	}

	function getCourseName1()
	{
		global $conn;
		$query = "select * from showsubject order by scode ASC";
		$run = mysqli_query($conn,$query);
		$row = mysqli_num_rows($run);
		$row = intval(($row+1)/2);
		//$result = mysqli_fetch_array($run);
		for($i = 0 ; $i < $row ; $i++ )
		{
			$result = mysqli_fetch_array($run);
			$code = $result['scode'];
			$sname = $result['sname'];
			$lcount = $result['lcount'];
			$pcount = $result['pcount'];
			$tcount = $result['tcount'];
			if($lcount && !$pcount && !$tcount)
				echo  "$code = $sname [$lcount"."L]";
			else if($pcount && !$lcount && !$tcount)
				echo  "$code = $sname [$pcount"."P]";
			else if($tcount && !$pcount && !$lcount)
				echo  "$code = $sname [$tcount"."T]";
			else if($lcount && $tcount)
				echo  "$code = $sname [$lcount"."L "."$tcount"."T]";
				else if($lcount && $pcount)
				echo  "$code = $sname [$lcount"."L "."$pcount"."P]";
			echo "<br/>";
		}
		echo "<br/>";		
	}

	function getCourseName2()
	{
		global $conn;
		$query = "select * from showsubject order by scode ASC";
		$run = mysqli_query($conn,$query);
		$row = mysqli_num_rows($run);
		$n = intval(($row+1)/2);
		$m = $row-$n;

		  //echo "<script>";
		  //echo "alert('$n  $m')";
		  //echo "</script>";

		$query = "select * from showsubject order by scode ASC LIMIT $m OFFSET $n";
		$run = mysqli_query($conn,$query);
		
		while($result=mysqli_fetch_array($run))
		{
			//$result = mysqli_fetch_array($run);
			$code = $result['scode'];
			$sname = $result['sname'];
			$lcount = $result['lcount'];
			$pcount = $result['pcount'];
			$tcount = $result['tcount'];
			if($lcount && !$pcount && !$tcount)
				echo  "$code = $sname [$lcount"."L]";
			else if($pcount && !$lcount && !$tcount)
				echo  "$code = $sname [$pcount"."P]";
			else if($tcount && !$pcount && !$lcount)
				echo  "$code = $sname [$tcount"."T]";
			else if($lcount && $tcount)
				echo  "$code = $sname [$lcount"."L "."$tcount"."T]";
			echo "<br/>";
		}
		echo "<br/>";
	}



	function addsubjectforfaculty($scode,$stype,$time)
	{
		global $conn;
		$query = "select * from showsubject where scode = '$scode'";
		$res   = mysqli_query($conn,$query);
		$result = mysqli_fetch_array($res);
		$rows = mysqli_num_rows($res);
		if($rows)
		{
			if($stype == 'Lecture')
			{
				$val  = $result['lcount'];
				$val = $val + $time;
				$insert = "update showsubject set lcount = $val where scode = '$scode'";
				mysqli_query($conn,$insert);
				$val = $result['fload'];
				$val = $val + $time;
				$insert = "update showsubject set fload = $val where scode = '$scode'";
				mysqli_query($conn,$insert);

			}
			else if($stype == 'Tutorial')
			{
				$val  = $result['tcount'];
				$val = $val + $time;
				$insert = "update showsubject set tcount = $val where scode = '$scode'";
				mysqli_query($conn,$insert);
				$val = $result['fload'];
				$val = $val + $time;
				$insert = "update showsubject set fload = $val where scode = '$scode'";
				mysqli_query($conn,$insert);
			}
			else if($stype == 'Practical')
			{
				$val  = $result['pcount'];
				$val = $val + $time;
				$insert = "update showsubject set pcount = $val where scode = '$scode'";
				mysqli_query($conn,$insert);
				$val = $result['fload'];
				$val = $val + $time ;
				$insert = "update showsubject set fload = $val where scode = '$scode'";
				mysqli_query($conn,$insert);
			}
		}
		else
		{
			$sname = getName($scode);
			if($stype == 'Lecture')
			{
				$insert = "insert into showsubject(scode,sname,lcount,fload) values('$scode','$sname',$time,$time)";
				mysqli_query($conn,$insert);
				
			}
			if($stype == 'Tutorial')
			{
				$insert = "insert into showsubject(scode,sname,tcount,fload) values('$scode','$sname',$time,$time)";
				mysqli_query($conn,$insert);
				
			}
			if($stype == 'Practical')
			{
				$insert = "insert into showsubject(scode,sname,pcount,fload) values('$scode','$sname',$time,$time)";
				mysqli_query($conn,$insert);
				
			}
			
		}
	}
	function get_fschedule($day,$fid)
	{
		global $conn;
		$stime;
		$etime;
		$row;
		$cname;
		$sem;
		$scode;
		$stype;
		$gname;
		$vname;

		for($i=8;$i<13;)
		{
			$stime=$i;
			for($j=$i+1; $j<=$i+3 AND $j<=13; $j++)
			{
				$etime=$j;
				$query = "select * from mastertable where stime='$stime' AND etime='$etime' AND day='$day' AND (fid1='$fid' OR fid2='$fid' OR fid3='$fid' OR fid4='$fid' OR fid5='$fid')";
				$run = mysqli_query($conn,$query);
				$row = mysqli_num_rows($run);
				if($row>=1)
				{
					$colspan = ($j - $i); 
					echo "<td colspan='$colspan'>";
					$result = mysqli_fetch_array($run);
					$time =  $result['etime']- $result['stime'];
					$cname = $result['cname'];
					$sem = $result['sem'];
					$scode = $result['scode'];
					$stype = $result['stype'];
					$gname = $result['gname'];
					$vname = $result['vname'];
					addsubjectforfaculty($scode,$stype,$time);

					$stype = letter($stype);

					echo "$scode($stype)<br/>$gname ($vname)";
					echo "</td>";
					$i = $etime;
					break;
				}
			}

			if($row==0)
			{
				echo "<td></td>";
				$i++;
			}
		}

		for($i=14;$i<18;)
		{
			$stime=$i;
			for($j=$i+1; $j<=$i+3 AND $j<=18; $j++)
			{
				$etime=$j;
				$query = "select * from mastertable where stime='$stime' AND etime='$etime' AND day='$day' AND (fid1='$fid' OR fid2='$fid')";
				$run = mysqli_query($conn,$query);
				$row = mysqli_num_rows($run);
				if($row>=1)
				{
					$colspan = ($j - $i); 
					echo "<td colspan='$colspan'>";
					$result = mysqli_fetch_array($run);
					$time = $result['etime'] - $result['stime'];
					$cname = $result['cname'];
					$sem = $result['sem'];
					$scode = $result['scode'];
					$stype = $result['stype'];
					$gname = $result['gname'];
					$vname = $result['vname'];
					addsubjectforfaculty($scode,$stype,$time);

					$stype = letter($stype);

					echo "$scode($stype)<br/>$gname ($vname)";
					echo "</td>";
					$i = $etime;
					break;
				}
			}

			if($row==0)
			{
				echo "<td></td>";
				$i++;
			}
		}


	}
	function showfacultydetail()
	{
		global $conn;
		$query = "select * from showsubject where 1";
		$run = mysqli_query($conn,$query);
		$load = 0;
		while($res = mysqli_fetch_array($run))
		{
			$scode = $res['scode'];
			$sname = $res['sname'];
			$lcount = $res['lcount'];
			$pcount = $res['pcount'];
			$tcount = $res['tcount'];
			$fload = $res['fload'];
			$load = $load + $fload;
			echo $scode."=".$sname."(".$lcount."L,".$tcount."T,".$pcount."P)"."<br/>";
		}
	}

	function getload()
	{
		global $conn;
		$total=0;
		$get_sub = "select * from showsubject where 1";
		$run_sub = mysqli_query($conn ,$get_sub);
		while($row_sub=mysqli_fetch_array($run_sub))
		{
			$tmp=$row_sub['fload'];
			$total = $total + $tmp;	
		}
		echo $total;
	}

	function get_vschedule($day,$vname)
	{
		global $conn;
		$stime;
		$etime;
		$row;
		$cname;
		$sem;
		$scode;
		$stype;
		$gname;
		$vname;

		for($i=8;$i<13;)
		{
			$stime=$i;
			for($j=$i+1; $j<=$i+3 AND $j<=13; $j++)
			{
				$etime=$j;
				$query = "select * from mastertable where stime='$stime' AND etime='$etime' AND day='$day' AND vname='$vname' AND stype='Practical'";
				$run = mysqli_query($conn,$query);
				$row = mysqli_num_rows($run);
				if($row>=1)
				{
					$colspan = ($j - $i); 
					echo "<td colspan='$colspan'>";
					$result = mysqli_fetch_array($run);
					$time =  $result['etime']- $result['stime'];
					$cname = $result['cname'];
					$sem = $result['sem'];
					$scode = $result['scode'];
					$stype = $result['stype'];
					$gname = $result['gname'];
					$vname = $result['vname'];
					addsubjectforfaculty($scode,$stype,$time);

					$stype = letter($stype);

					echo "$scode($stype)<br/>$gname ($vname)";
					echo "</td>";
					$i = $etime;
					break;
				}
			}

			if($row==0)
			{
				echo "<td></td>";
				$i++;
			}
		}

		for($i=14;$i<18;)
		{
			$stime=$i;
			for($j=$i+1; $j<=$i+3 AND $j<=18; $j++)
			{
				$etime=$j;
				$query = "select * from mastertable where stime='$stime' AND etime='$etime' AND day='$day' AND vname='$vname' AND stype='Practical'";
				$run = mysqli_query($conn,$query);
				$run = mysqli_query($conn,$query);
				$row = mysqli_num_rows($run);
				if($row>=1)
				{
					$colspan = ($j - $i); 
					echo "<td colspan='$colspan'>";
					$result = mysqli_fetch_array($run);
					$time = $result['etime'] - $result['stime'];
					$cname = $result['cname'];
					$sem = $result['sem'];
					$scode = $result['scode'];
					$stype = $result['stype'];
					$gname = $result['gname'];
					$vname = $result['vname'];
					addsubjectforfaculty($scode,$stype,$time);

					$stype = letter($stype);

					echo "$scode($stype)<br/>$gname ($vname)";
					echo "</td>";
					$i = $etime;
					break;
				}
			}

			if($row==0)
			{
				echo "<td></td>";
				$i++;
			}
		}
	}

	function get_vvschedule($day,$vname)
	{
		global $conn;
		$stime=0;
		$etime=0;
		$row=0;
		$scode;
		$stype;
		$gname;
		$vname;
		$fid1;
		$fid2;
		for($i=8;$i<13;)
		{
			$stime=$i;
			for($j=$i+1; $j<=$i+3 AND $j<=13; $j++)
			{
				$etime=$j;
				$query = "select * from mastertable where vname='$vname' AND stime='$stime' AND etime='$etime' AND day='$day'";
				$run = mysqli_query($conn,$query);
				$row = mysqli_num_rows($run);
				if($row > 0)
				{
					$colspan = ($j - $i); 
					
					echo "<td colspan='$colspan'>";
					if($row > 1)
					{
						echo "<table>";
						for($k=0,$result=mysqli_fetch_array($run);$k<$row;$k++,$result=mysqli_fetch_array($run))
						{
							
							$scode = $result['scode'];
							$stype = $result['stype'];
							$gname = $result['gname'];
							$vname = $result['vname'];
							$fid1 = $result['fid1'];
							$fid2 = $result['fid2'];
							$s = $result['stime'];
							$e = $result['etime'];
						
							addsubject($scode,$stype,$s,$e);

							$stype = letter($stype);

							echo "<tr><td>";
							echo "$scode($stype)$gname<br/>($vname)[$fid1 $fid2]";
							echo "</td></tr>";

						}
						echo "</table>";
					}
					else
					{
						$result = mysqli_fetch_array($run);
						
						$scode = $result['scode'];
						$stype = $result['stype'];
						$gname = $result['gname'];
						$vname = $result['vname'];
						$fid1 = $result['fid1'];
						$fid2 = $result['fid2'];
						$s = $result['stime'];
						$e = $result['etime'];
					
						addsubject($scode,$stype,$s,$e);

						$stype = letter($stype);

						echo "$scode($stype)$gname<br/>($vname)[$fid1 $fid2]";
					}
					echo "</td>";

					$i = $etime;
					break;
				}
			}
			if($row == 0)
			{
				echo "<td></td>";
				$i++;
			}
		}
		for($i=14;$i<18;)
		{
			$stime=$i;

			for($j=$i+1; $j<=$i+3 AND $j<=18; $j++)
			{
				$etime=$j;
				$query = "select * from mastertable where vname='$vname' AND stype='Practical' AND stime='$stime' AND etime='$etime' AND day='$day'";
				$run = mysqli_query($conn,$query);
				$row = mysqli_num_rows($run);
				if($row > 0)
				{
					$colspan = ($j - $i); 
					
					echo "<td colspan='$colspan'>";
					if($row > 1)
					{
						echo "<table>";
						for($k=0,$result=mysqli_fetch_array($run);$k<$row;$k++,$result=mysqli_fetch_array($run))
						{
							
							$scode = $result['scode'];
							$stype = $result['stype'];
							$gname = $result['gname'];
							$vname = $result['vname'];
							$fid1 = $result['fid1'];
							$fid2 = $result['fid2'];
							$s = $result['stime'];
							$e = $result['etime'];
						
							addsubject($scode,$stype,$s,$e);

							$stype = letter($stype);
							
							echo "<tr><td>";
							echo "$scode($stype)$gname<br/>($vname)[$fid1, $fid2]";
							echo "</td></tr>";
						}
						echo "</table>";
					}
					else
					{
						$result = mysqli_fetch_array($run);
						
						$scode = $result['scode'];
						$stype = $result['stype'];
						$gname = $result['gname'];
						$vname = $result['vname'];
						$fid1 = $result['fid1'];
						$fid2 = $result['fid2'];
						$s = $result['stime'];
						$e = $result['etime'];
						
						addsubject($scode,$stype,$s,$e);

						$stype = letter($stype);

						echo "$scode($stype)$gname<br/>($vname)[$fid1 $fid2]";
					}
					echo "</td>";

					$i = $etime;
					break;
				}
			}
			if($row == 0)
			{
				echo "<td></td>";
				$i++;
			}
		}
	}

	function getfdetail($fid)
	{
		global $conn;
		$sql = "select * from faculty where fid = '$fid'";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($result);

		if( mysqli_num_rows($result) == 1 )
		{
			echo "Your ID : ".$row['fid']."<br><br>";
			echo "Name : ".$row['fname']."<br><br>";
			echo "E-mail ID : ".$row['mailid']."<br><br>";
			echo "Contact No. : ".$row['contact']."<br><br>";
			echo "Security Question : ".$row['squs']."<br><br>";
			echo "Security Answer : ".$row['sans']."<br><br>";
		}
		else
		{

		}
	}

	function getadetail($aid)
	{
		global $conn;
		$sql = "select * from admin where aid = '$aid'";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($result);

		if( mysqli_num_rows($result) == 1 )
		{
			echo "Your ID : ".$row['aid']."<br><br>";
			echo "Name : ".$row['aname']."<br><br>";
			echo "E-mail ID : ".$row['mailid']."<br><br>";
			echo "Contact No. : ".$row['contact']."<br><br>";
			echo "Security Question : ".$row['squs']."<br><br>";
			echo "Security Answer : ".$row['sans']."<br><br>";
		}
		else
		{

		}
	}

	
	
?>


<?php
	session_start();
    	unset($_SESSION['fid']);  
        session_destroy();  
	header("Location: ../home.php");
?>



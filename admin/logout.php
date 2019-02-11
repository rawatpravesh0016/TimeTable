
<?php
	session_start();
    	unset($_SESSION['aid']);  
        session_destroy();  
	header("Location: ..\home.php");
?>



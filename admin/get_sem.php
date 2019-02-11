<?php
  include("../functions/functions.php");

  $opt = $_GET['opt'];
  $course = $_GET['cname'];

  get_semof($course,$opt);

?>
<?php
$objCon =mysqli_connect("localhost","root","");

// Check connection
if ($objCon -> connect_errno) {
  echo "Failed to connect to MySQL: " . $objCon -> connect_error;
  exit();
} else
echo "success";
?>

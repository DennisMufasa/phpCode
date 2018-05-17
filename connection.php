<?php

$conn=mysqli_connect("localhost","root","","info") or die("Connection Failed" .mysqli_error());

if ($conn){echo "Connection Successful!";}

?>
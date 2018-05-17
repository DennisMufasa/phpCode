<html>
<body>
<form action="insert.php" method="post">

    <input type="text" name="name" placeholder="enter your name">
    <input type="text" name="course" placeholder="course">
    <button type="submit" name="submit">Submit</button>

</form>
</body>
</html>


<?php

$conn=mysqli_connect("localhost","root","","info") or die("Connection Failed" .mysqli_error());
if ($conn){echo "Connection Successful";}


if (isset($_POST['submit'])){

    extract($_POST);
    //echo "$name,$course";
    $sql="INSERT INTO `students`(`name`, `course`) VALUES 
                                ('$name','$course')";

    mysqli_query($conn,$sql);


}
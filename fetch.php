<?php
$server = 'localhost';
$user = 'root';
$password = '';
$db = 'php';

$conn = mysqli_connect($server, $user, $password, $db) or die('Connection failed!'.mysqli_error());
if ($conn){
    echo 'Connection Successful!';
}
echo "<br><br>";
?>

<html xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <style>
        form{
            margin-top: 20px;
            margin-left: 20px;
        }
    </style>
</head>
<body>
<form action="fetch.php" method="post">
    <input type="text" placeholder="search student's name" name="search" required>
    <button type="submit" name="submit"><span class="glyphicon glyphicon-search"></span></button>
</form>
</br
</body>

<?php
if (isset($_POST['submit'])){
    extract($_POST);
    //echo $search;
    $sql = "SELECT `name`, `age`, `course`, `date` FROM `students` WHERE `name`='$search'";
    $result = mysqli_query($conn,$sql);

    //if (mysqli_query($conn,$sql)){echo "Record found!";}else {echo "Not present in database!";}


    //Associative array
    $row = mysqli_fetch_assoc($result);   //fetches data from database and places it in an associative array.
    if (mysqli_num_rows($result) == 0){
        echo "Record not found"; //checks whether the array $row contains any content and if not it returns an appropriate message.
    }else{  //assigning data from the database to new variables in the current php form.
        //$name = $row['name'];
        //$age = $row['age'];
        //$course = $row['course'];
        //$date = $row['date'];
        extract($row);  //pulls data from array $row and creates a variable for each array item with the name of the array item
        echo ("Name:" . $name ."\n". "Age:" . $age ."\n". "Course:" . $course ."\n". "Date of Adm:" . $date);

    }

    //releasing the result set
    mysqli_free_result($result);
    //closing connection
    mysqli_close($conn);
}


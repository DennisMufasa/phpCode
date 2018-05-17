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

<html>
<head>
    <style>
        form{margin-top: 20px;
            border: solid black;}

        label{
            margin-top: 10px;
            margin-bottom: 10px;
        }

        input{
            margin-top: 10px;
            margin-bottom: 10px;
            margin-left: 20px;
        }
    </style>
</head>
<body>
<form action="database.php" method="post">
    <label for="name">Name:</label>
    <input type="text" placeholder="enter your name" name="name" id="name" required>
    <br>
    <label for="age">Age:</label>
    <input type="number" placeholder="enter your age" name="age" id="age" required>
    <br>
    <label for="course">Course:</label>
    <input type="text" placeholder="enter your course" name="course" required>
    <br>
    <button type="submit" name="submit" >Submit</button>
</form>
</body>
</html>

<?php

if (isset($_POST['submit'])){
    extract($_POST);

    //echo $name, $age, $course;

    $sql = "INSERT INTO `students`(`id`, `name`, `age`, `course`) VALUES
                                (null, '$name', '$age', '$course')";

    

    //mysqli_query($conn, $sql);

    if (mysqli_query($conn, $sql)){
        echo 'Record entered successfully!';
    }else{
        echo 'Record not entered! SQL query error!';
    }

}


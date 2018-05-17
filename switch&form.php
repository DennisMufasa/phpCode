<html>
<body>
<form action="switch&form.php" method="post">

    <input type="text" name="colour" placeholder="enter colour in lowercase">
    <button type="submit" name="submit">Submit</button>

</form>
</body>
</html>

<?php

if (isset($_POST['submit'])){
    extract($_POST);
    //echo "$colour";

    switch ($colour){
        case "red":echo "Your favourite colour is $colour";
        break;
        case "blue":echo "Your favourite colour is $colour";
        break;
        case "yellow":echo "Your favourite colour is $colour";
        break;
        default: echo "Your favourite colour is not in the switch code!";

    }
}

?>
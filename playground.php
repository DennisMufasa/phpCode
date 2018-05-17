<html>
<body>
<form action="playground.php" method="post">
    <input type="text" placeholder="enter favourite colour" name="colour">
    <button type="submit" name="submit">Submit</button>
</form>
</body>
</html>


<?php
$num=2589;
$name="Mufasa";
$float=10.2563;
$students=array("mufasa","dennis","evi");
$x=10;
$x=null;
$sentence="Hello World. I love programming.";



var_dump($num);
echo"<br>";
var_dump($name);
echo"<br>";
var_dump($float);
echo"<br>";
var_dump($students);
echo"<br>";
var_dump($x);
$len=strlen($name);//counts number of chars in a string.
echo"<br>";
echo $len;
echo"<br>";
echo str_word_count($sentence);//counts words in a sentence
echo"<br>";
echo strrev($name);//reverses a string
echo"<br>";
echo strrev($sentence);//reverses a string
echo"<br>";
echo strpos("Hello World. I love programming.","love");//finds "love" in the string and returns position of first instance.
//Note that the computer starts counting from 0 not 1 and white spaces and fullstops are also considered characters.
echo"<br>";
echo str_replace("World","All","Hello World. I love programming.");//searches for string and replaces it with the entered one.
echo "<br>";
echo chop($sentence,"programming.");//chops part of the string you want to chop.

echo "<br>";

$arr=array('Hello','World!','I','love','programming.');
echo implode("",$arr);//merges array items together into a string
echo "<br>";
echo implode("-",$arr);//using seperators"-"
echo "<br>";
echo implode("+",$arr);//join could also be used instead of implode
echo "<br>";
echo trim($sentence,"Heng.");//removes the characters "Heng." from both ends of string. chars are case sensitive.
echo "<br>";
echo metaphone("water");//returns metaphone key of a string.
echo "<br>";
echo similar_text("Hello World!","Heelo Worlds!");//returns the number of chars similar to each other.

define("greetings","Hello World");
echo "<br>";
echo greetings;


echo "<br>";

//switch
if (isset($_POST['submit'])){
    extract($_POST);
//echo $colour;
    switch ($colour){
        case "red":
            echo "Your favourite colour is ".$colour;
            break;
        case "blue":
            echo "Your favourite colour is ".$colour;
            break;
        case "yellow":
            echo "Your favourite colour is ".$colour;
            break;
        case "green":
            echo "Your favourite colour is ".$colour;
            break;
        default:
            echo "Your colour is not in the colour scheme.";
    }
}

for ($x=1;$x<=100;$x++){
    $counter=0;
    for ($y=1;$y<=$x;$y++){
        if ($x % $y==0){
            $counter++;
        }
    }
    if ($counter==2){
        print $x."<br>";
    }
}


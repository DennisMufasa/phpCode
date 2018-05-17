<?php
//creating object
class car{

    function car(){
        $this->model="Range Rover";
    }
}

//using the object
$alice= new car();

//showing object details
echo $alice->model;

class employees{

    function employees(){
        $this->eId="001";
        $this->department="IT";
        $this->role="Developer";
    }

}

$mufasa=new employees();
echo "<br>".$mufasa->eId."<br>".$mufasa->department."<br>".$mufasa->role;
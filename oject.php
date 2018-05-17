<?php

class mufasa {
    function mufasa(){
        $this -> name = 'Dennis';
        $this -> age = 23;
        $this -> course = 'Python';
	}
}

$mimi = new mufasa();
echo $mimi->name.' is a '.$mimi->age.' year old studying'.$mimi->course;

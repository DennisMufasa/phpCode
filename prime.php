<?php

for ($i=1;$i<=100;$i++){
    $counter=0;
    for ($j=1;$j<=$i;$j++){
        if ($i%$j==0){
            $counter++;
        }
    }
    if ($counter==2){
        print $i." <br>";
    }
}

//function for prime numbers
function primeNo($n){
    for ($x=1;$x<=$n;$x++){
        $numCount=0;
        for ($y=1;$y<=$x;$y++){
            if ($x%$y==0){
                $numCount++;
            }
        }
        if ($numCount==2){
            print $x."<br>";
        }
    }
}

primeNo(50);
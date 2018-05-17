<?php
//accepts two parameters which are the range of numbers to seek prime numbers from.
function prime($x,$y){
    for ($i=$x;$i<=$y;$i++){
        $counter=0;
        for ($j=1;$j<=$i;$j++){
            if ($i%$j==0){
                $counter++;
            }
        }
        if ($counter==2){
            print $i."<br>";
        }
    }
}

//calling the function
prime(10,100);
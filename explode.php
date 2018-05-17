<?php

$string="Here is Mufasa. A junior dev workin on USSD";
print_r( explode(".","$string"));//explode splits an array into single strings at the delimiter. It accepts another perimeter limit.

$day = gregoriantojd(7,21,2050);
echo jddayofweek($day,2);

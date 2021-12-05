<?php

$unit=118;
$bill=0;
if($unit>0 && $unit<=50)
    {
        $bill=$unit*3.50;
        echo $bill;
    }
    elseif($unit>100 && $unit<=150)
    {
        $bill=$unit*4.00;
        echo $bill;
    }
else{
    $bill=$unit*6.50;
        echo $bill;
    }


 

?>
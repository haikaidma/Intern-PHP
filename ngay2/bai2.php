<?php
//Tính tổng : S = 1 + 1*2 + 1*2*3 + 1*2*3*4 + ... + 1*2*3*4*...*n  
$n=3;
$total=0;
for($x=1;$x<=$n;$x++)
{
    $multy=1;
    for($y=1;$y<=$x;$y++)
    {
        $multy=$multy*$y;
    }
    $total=$total+$multy;
}   
echo $total;
?>
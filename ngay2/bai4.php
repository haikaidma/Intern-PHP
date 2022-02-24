<?php
//Tính tổng số nguyên chẵn tử 1 -> n     
$n=10;
$total=0;
for($i=0;$i<=$n;$i++)
{
    if($i%2==0)
        $total=$total+$i;
}
echo $total;
?>
<?php
function rand_float($st_num=0,$end_num=1000,$mul=100)
{
if ($st_num>$end_num) return false;
return mt_rand($st_num*$mul,$end_num*$mul)/$mul;
}
echo rand_float()."\n";
?>
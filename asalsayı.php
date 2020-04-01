<?php
 echo "1 ile 1000 arasındaki asal sayılar:";
 echo "<br>";
for($i=2;$i<=1000;$i++)
{
    $asal=true;
    for($j=2;$j<=$i-1;$j++)
    {
        if ($i%$j==0)
        $asal=false;
      }
      if ($asal) echo $i."<br>";
}
 
?>
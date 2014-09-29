<?php
header('Content-Type: text/xml');
echo '<?xml version="1.0" encoding="utf-8"?>'."\n"
?>
<list>
<?php
$months = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");

for ($i = 6; $i < 8; $i++)
{
  for ($j = 0; $j < count($months); $j++)
  {
    $month = $months[$j] . "-0" . $i;
    $apacRev = rand(10000,60000);
    $europeRev = rand(20000,80000);
    $japanRev = rand(15000,50000);
    $latinAmRev = rand(5000,30000);
    $northAmRev = rand(30000,100000);
    $totalRev = $apacRev + $europeRev + $japanRev + $latinAmRev + $northAmRev;
    $averageRev = round($totalRev / 6);
?>
    <month name="<?=$month?>" revenue="<?=$totalRev?>" average="<?=$averageRev?>">
        <region name="APAC" revenue="<?=$apacRev?>"/>
        <region name="Europe" revenue="<?=$europeRev?>"/>
        <region name="Japan" revenue="<?=$japanRev?>"/>
        <region name="Latin America" revenue="<?=$latinAmRev?>"/>
        <region name="North America" revenue="<?=$northAmRev?>"/>
    </month>
<?
  }
}
?>
</list>

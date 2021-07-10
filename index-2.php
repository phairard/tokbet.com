<?php
$json = file_get_contents('https://api.tb8989.net/LineBot/Report/api/getReportAll/');
$json = json_decode($json);
//echo '<pre>' .print_r($json, 1) .'</pre>';

echo "<h1>หวยรัฐบาลไทย</h1>";
foreach ($json->thailotto as $item)
{
	echo 'รางวัลที่ 1: ' .$item->rewardnumberone .'<br/>';
    echo 'เลขท้ายสองตัว: ' .$item->towdown .'<br/>';
    echo 'สามตัวหน้า: ' .$item->threefront .'<br/>';
    echo 'สามตัวหลัง: ' .$item->threeback .'<br/>';
}

echo "<h1>หวยธกส.</h1>";
foreach ($json->baaclotto as $item)
{
	echo 'สามตัวหน้า: ' .$item->threetop .'<br/>';
    echo 'เลขท้ายสองตัว: ' .$item->towdown .'<br/>';
}

echo "<h1>สลากออมสิน</h1>";
foreach ($json->gsblotto as $item)
{
	echo 'สามตัวบน: ' .$item->threetop .'<br/>';
    echo 'เลขท้ายสองตัว: ' .$item->towdown .'<br/>';
}

echo "<h1>หวยลาว</h1>";
foreach ($json->loasset as $item)
{
	echo 'สีตัว: ' .$item->fourset .'<br/>';
}

echo "<h1>หวยหุ้นไทย</h1>";
foreach ($json->stockthailotto as $item)
{
	echo 'รอบ: ' .$item->type .'<br/>';
	echo 'สามตัวบน: ' .$item->threetop .'<br/>';
	echo 'เลขท้ายสองตัว: ' .$item->towbelow .'<br/>';
}
?>
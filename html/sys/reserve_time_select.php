<?php
require_once('/usr/local/lib/smarty-master/libs/Smarty.class.php');
$smarty = new Smarty();


//** 次の行のコメントをはずすと、デバッギングコンソールを表示します
//$smarty->debugging = true;


$smarty->assign('day',$_GET["day"]);
$smarty->assign('month',$_GET["month"]);
$smarty->assign('year',$_GET["year"]);
$smarty->assign('spot',$_GET["spot"]);
$smarty->assign('timestart',$_GET["timestart"]);


$smarty->display("reserve_time_select.tpl");

?>

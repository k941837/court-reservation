<?php
require_once('/usr/local/lib/smarty-master/libs/Smarty.class.php');
$smarty = new Smarty();


//** 次の行のコメントをはずすと、デバッギングコンソールを表示します
$smarty->debugging = true;


$smarty->assign('day',$_POST["day"]);
$smarty->assign('month',$_POST["month"]);
$smarty->assign('year',$_POST["year"]);
$smarty->assign('spot',$_POST["spot"]);
$smarty->assign('timestart',$_POST["timestart"]);
$smarty->assign('timeend',$_POST["timeend"]);

// session_start();
$smarty->assign('PHPSESSID',$_COOKIE["PHPSESSID"]);

session_start();

$smarty->assign('_SESSION',$_SESSION);




session_destroy();


$smarty->display("reserve_user.tpl");

?>

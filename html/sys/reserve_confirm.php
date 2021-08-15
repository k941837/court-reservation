<?php
require_once('/usr/local/lib/smarty-master/libs/Smarty.class.php');
$smarty = new Smarty();


//** 次の行のコメントをはずすと、デバッギングコンソールを表示します
//$smarty->debugging = true;


$smarty->assign('day',$_POST["day"]);
$smarty->assign('month',$_POST["month"]);
$smarty->assign('year',$_POST["year"]);
$smarty->assign('spot',$_POST["spot"]);
$smarty->assign('timestart',$_POST["timestart"]);

$smarty->assign('tel',$_POST["tel"]);
$smarty->assign('mail',$_POST["mail"]);





$smarty->display("reserve_confirm.tpl");

?>

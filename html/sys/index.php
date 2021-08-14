<?php
require_once('/usr/local/lib/smarty-master/libs/Smarty.class.php');
$smarty = new Smarty();


//** 次の行のコメントをはずすと、デバッギングコンソールを表示します
$smarty->debugging = true;


$smarty->assign('test',2222);


$smarty->display("index.tpl");

?>

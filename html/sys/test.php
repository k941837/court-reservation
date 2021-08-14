<?php
require_once('/usr/local/lib/smarty-master/libs/Smarty.class.php');
$smarty = new Smarty();

echo 111;

$smarty->assign('test',2222);


$smarty->display("test.tpl");

?>

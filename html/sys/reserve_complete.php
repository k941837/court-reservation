<?php

require_once('/usr/local/lib/smarty-master/libs/Smarty.class.php');
$smarty = new Smarty();


//** 次の行のコメントをはずすと、デバッギングコンソールを表示します
$smarty->debugging = true;


$dsn = 'mysql:dbname=kunijima;host=localhost';
$user = 'root';
$password = 'Sato4849!';

try{
    $dbh = new PDO($dsn, $user, $password);
}catch (PDOException $e){
    print('Error:'.$e->getMessage());
    die();
}



// SQL作成
$stmt = $dbh->prepare("INSERT INTO users (
    name, nickname, mail, tel, password
) VALUES (
    :name, :nickname, :mail, :tel, :password
)");

// 登録するデータをセット
$stmt->bindParam(':name', $_POST["name"], PDO::PARAM_STR);
$stmt->bindParam(':nickname', $_POST["nickname"], PDO::PARAM_STR);
$stmt->bindParam(':mail', $_POST["mail"], PDO::PARAM_STR);
$stmt->bindParam(':tel', $_POST["tel"], PDO::PARAM_STR);
$stmt->bindParam(':password', $_POST["password"], PDO::PARAM_STR);

//  SQL実行
$res = $stmt->execute();
$smarty->assign('aaa',$res);



$smarty->display("reserve_complete.tpl");


// データベースの接続解除
$pdo = null;

?>

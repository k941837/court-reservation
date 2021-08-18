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


// user_flgが０ならユーザー登録から行う。
if($_POST["user_flg"] == '0'){

    // TODO: nullチェック。nullだとDB入らない。
    $error = array();
    if(empty($_POST["name"])){
        // $error["mail"] = '名前が空です。';
        $smarty->assign('infomation_text', "[ERROR]名前が空です。");
        $smarty->assign('errorlist', $_POST);
        $smarty->display("reserve_user.tpl");
        exit();
    }
    if(empty($_POST["nickname"])){
        // $error["nickname"] = 'nicknameが空です。';
        $smarty->assign('infomation_text', "[ERROR]nicknameが空です。");
        $smarty->assign('errorlist', $_POST);
        $smarty->display("reserve_user.tpl");
        exit();
    }
    if(!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)){
        // $error["mail"] = '正しいEメールアドレスを指定してください。';
        $smarty->assign('infomation_text', "[ERROR]正しいEメールアドレスを指定してください。");
        $smarty->assign('errorlist', $_POST);
        $smarty->display("reserve_user.tpl");
        exit();
    }
    if(empty($_POST["tel"])){
        // $error["tel"] = 'telが空です。';
        $smarty->assign('infomation_text', "[ERROR]telが空です。");
        $smarty->assign('errorlist', $_POST);
        $smarty->display("reserve_user.tpl");
        exit();
    }
    if(empty($_POST["password"])){
        // $error["password"] = 'passwordが空です。';
        $smarty->assign('infomation_text', "[ERROR]passwordが空です。");
        $smarty->assign('errorlist', $_POST);
        $smarty->display("reserve_user.tpl");
        exit();
    }

}


// コート名取得
$sql = "select name from court where id={$_POST['spot']}";
$stmt = $dbh->query($sql);
$result = $stmt->fetch(PDO::FETCH_ASSOC);
$smarty->assign('court',$result["name"]);



$smarty->assign('day',$_POST["day"]);
$smarty->assign('month',$_POST["month"]);
$smarty->assign('year',$_POST["year"]);
$smarty->assign('timestart',$_POST["timestart"]);
$smarty->assign('user_flg',$_POST["user_flg"]);



$smarty->assign('tel',$_POST["tel"]);
$smarty->assign('mail',$_POST["mail"]);
$smarty->assign('mail-confirm',$_POST["mail-confirm"]);
$smarty->assign('password',$_POST["password"]);
$smarty->assign('password-confirm',$_POST["password-confirm"]);
$smarty->assign('nickname',$_POST["nickname"]);
$smarty->assign('name',$_POST["name"]);


$smarty->display("reserve_confirm.tpl");


?>

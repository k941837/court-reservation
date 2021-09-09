<?php

require_once('/usr/local/lib/smarty-master/libs/Smarty.class.php');
$smarty = new Smarty();


//** 次の行のコメントをはずすと、デバッギングコンソールを表示します
$smarty->debugging = true;

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $dsn = 'mysql:dbname=kunijima;host=localhost';
    $user = 'root';
    $password = 'Sato4849!';
    try{
        $dbh = new PDO($dsn, $user, $password);
    }catch (PDOException $e){
        print('Error:'.$e->getMessage());
        die();
    }
    
    
    session_start();
    $mail = $_POST['mail'];
    
    $sql = "SELECT * FROM users WHERE mail = :mail";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':mail', $mail);
    $stmt->execute();
    $member = $stmt->fetch();
    $smarty->assign('aaaaaaa', $member);


    $smarty->assign('passss', $_POST['pass']);
    $smarty->assign('memmmm', $member['pass']);

    //指定したハッシュがパスワードにマッチしているかチェック
    if (password_verify($_POST['pass'], $member['pass'])) {
        //DBのユーザー情報をセッションに保存
        $_SESSION['id'] = $member['id'];
        $_SESSION['name'] = $member['name'];
        $smarty->display("index.tpl");
    
    } else {
        $smarty->assign('infomation_text', "[ERROR]メールアドレスもしくは、パスワードが正しくありません。");
        $smarty->display("login_form.tpl");
    
    }    

    
}else{
    $smarty->display("login_form.tpl");
}




?>
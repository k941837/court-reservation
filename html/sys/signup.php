<?php

require_once('/usr/local/lib/smarty-master/libs/Smarty.class.php');
$smarty = new Smarty();


//** 次の行のコメントをはずすと、デバッギングコンソールを表示します
//$smarty->debugging = true;


$dsn = 'mysql:dbname=kunijima;host=localhost';
$user = 'root';
$password = 'Sato4849!';

try{
    $dbh = new PDO($dsn, $user, $password);
}catch (PDOException $e){
    print('Error:'.$e->getMessage());
    die();
}


if($_SERVER["REQUEST_METHOD"] === "POST"){
    //フォームからの値をそれぞれ変数に代入
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $password = password_hash($_POST['pass'], PASSWORD_DEFAULT);


    //フォームに入力されたmailがすでに登録されていないかチェック
    $sql = "SELECT * FROM users WHERE mail = {$mail}";
    $stmt = $dbh->prepare($sql);
    // $stmt->bindValue(':mail', $mail);
    $stmt->execute();
    $member = $stmt->fetch();
    if ($member['mail'] === $mail) {
        $msg = '同じメールアドレスが存在します。';
        $link = '<a href="signup.php">戻る</a>';
    } else {
        //登録されていなければinsert 
        $sql = "INSERT INTO users(name, mail, password) VALUES ('{$name}', '{$mail}', '{$password})'";
        $stmt = $dbh->prepare($sql);
        // $stmt->bindValue(':name', $name);
        // $stmt->bindValue(':mail', $mail);
        // $stmt->bindValue(':pass', $pass);
        $stmt->execute();
        header('Location: https://www.sato-kunijima.site/sys/index.php');
    }

}else{
    $smarty->display("signup.tpl");
}







?>
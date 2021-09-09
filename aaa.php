<?php
echo "ccc";

$pass = password_hash("taka4849", PASSWORD_DEFAULT);

var_dump(password_verify("taka4849", '$2y$10$slpje1XpjfQ0qEXkuukzJ.4beM4aq4j8h/Gos2bQ9qNXU8sLAMY9i'));



return;


$email = "@aaa.c";
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo '正しいEメールアドレスを指定してください。';
}

// $aaa = array();

// if(empty($aaa)){
//     echo "から";
// }else{
//     echo "からでない";
// }

return;

$dsn = 'mysql:dbname=kunijima;host=localhost';
$user = 'root';
$password = 'Sato4849!';

try{
    $dbh = new PDO($dsn, $user, $password);
}catch (PDOException $e){
    print('Error:'.$e->getMessage());
    die();
}


// $num = 13;

// // $sql = "select * from court";

// $sql = "select name from court where id={$num}";
// $stmt = $dbh->query($sql);

// $result = $stmt->fetch(PDO::FETCH_ASSOC); 
// echo $result["name"];


$name="ccc";
$nickname="agrgre";
$mail="agrrga";
$tel="54156";
$password="abdbf";

// SQL作成
$stmt = $dbh->prepare("INSERT INTO users (
    name, nickname, mail, tel, password
) VALUES (
    :name, :nickname, :mail, :tel, :password
)");

// 登録するデータをセ
$stmt->bindParam( ':name', $name, PDO::PARAM_STR);
$stmt->bindParam(':nickname', $nickname, PDO::PARAM_STR);
$stmt->bindParam(':mail', $mail, PDO::PARAM_STR);
$stmt->bindParam(':tel', $tel, PDO::PARAM_STR);
$stmt->bindParam(':password', $password, PDO::PARAM_STR);

//  SQL実行
$res = $stmt->execute();






// $num = 13;
// while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
    
//     if($result['id'] == $num){
//         echo $result['name'];
//     }
// }





?>

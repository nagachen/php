<?php
$acc='admin';
$pw='1234';

$_POST['acc'];
$_POST['pw'];

if($_POST['acc'] == $acc && $_POST['pw']==$pw){
    echo"帳密成功";
}else{
    echo"帳密錯誤,登入失敗";

    header("location:login.php?error=帳密錯誤，登入失敗");
}

echo "<a href='login.php' alt=''>回登入頁面</a>";
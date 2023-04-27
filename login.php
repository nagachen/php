 <?php 
// $acc='admin';
// $pw='1234';

// // $_POST['acc'];
// // $_POST['pw'];
// if(!empty($_POST['acc'])&&!empty($_POST['pw'])){
//     if($_POST['acc'] == $acc && $_POST['pw']==$pw){
//         echo"帳密成功";
//     }else{
//         echo"帳密錯誤,登入失敗";
//     }
    
// }
 ?>
<?php
if(isset($_GET['error'])){
    echo"<span style='color:red'>";
    echo $_GET['error'];
    echo "</span>";
}

?>


<!-- ?號代表當前頁面 -->
<h1>登入頁面</h1>
<form action="check.php" method="post">  
    <div>
        <label for="acc">帳號:</labe>
        <input type="text" name="acc" id="acc">
    </div>
    <div>
        <label for="pw">密碼:</labe>
        <input type="password" name="pw" id="pw">
    </div>
    <div>
    <input type="submit" value="登入">

    </div>
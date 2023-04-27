<h2>目標網頁<h2>
<?php  
#所有傳遞的資料皆是字串;
#一個表單只能用一種方式傳送

//   echo $_GET['addr'];            
//   echo $_POST['name']; 
//   echo $_POST['type'];           
//   echo $_post['img'];


#需注意empty()....相關的判定, 參考謝晒的網頁 
#$_GET(),$_POST()為apache 系統預設變數
#需注意數值為0的情況
 if(!empty($_GET)){
     echo "以下資料為GET表單的資料<br>";
     echo"<pre>";
     print_r($_GET);
     echo"<pre>";
 }
 if(!empty($_post)){
     echo "以下資料為post表單的資料<br>";
     echo"<pre>";
     print_r($_post);
     echo"<pre>";
 }

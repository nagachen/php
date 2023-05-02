<!-- 萬年歷 -->
<link rel="stylesheet" href="calendar.css" media="all">
<?php 
#判斷從_GET[]所取得的資料
$month=$_GET['month']??date('n'); #判斷月
$year=$_GET['year']??date('Y'); #判斷年

#取得相關資料

$first_day=strtotime("$year-$month-1");     #當月的第一天秒數
$days=date("t",$first_day);                      #取得最後一天，天數
$final_day=strtotime("$year-$month-$days");     #當月的最後一天秒數
$first_week=date('w',$first_day);           #第一週星期幾 六
$final_week=date('w',$final_day);          #最後一週星期幾 日
$month_days = ($days + $first_week);      #當月總共要算幾天36
$month_week = ceil($month_days/7);           #當月有幾週 6


echo $first_day;
echo"<br>";
echo $days;
    echo "<br>";
echo $first_week;
echo "<br>";
echo $month .'月';
echo "<br>";
#建立月份陣列相關資料
$data = [];
 for($i=0;$i<$month_week;$i++){
    
      for($j=0;$j<7;$j++){
          #判斷要寫入空白還是天數
          if(($j<$first_week && $i == 0) ||($i==($month_week-1) && $final_week<$j)){
              $data[]="&nbsp;";
          }else{
              $data[]=($i*7)+$j-$first_week+1;
    
          }
      }
 }
// echo "<pre>";
// print_r($data);
// echo "</pre>";
#判斷年月有沒有超過
if($month==12){
    $nextmonth=1;
    $nextyear=$year + 1;
}else{
    $nextmonth=$month + 1;
    $nextyear=$year;
}
if($month==1){
    $prevmonth=12;
    $prevyear=$year - 1;
}else{
    $prevmonth=$month - 1;
    $prevyear=$year;
}
?>
<!-- #flexbox -->

<!-- 上一月，這一月，下一月 -->
<a href="calendar.php?year=<?=$prevyear;?>&month=<?=$prevmonth;?>"><?=$prevmonth;?>月</a>
<a href="calendar.php?year=<?=$year;?>&month=<?=$month;?>"><?=$month;?>月</a>
<a href="calendar.php?year=<?=$nextyear;?>&month=<?=$nextmonth;?>"><?=$nextmonth;?>月</a>
<hr>
<div class="contianer">
    <div class="tittle">星期日</div>
    <div class="tittle">星期一</div>
    <div class="tittle">星期二</div>
    <div class="tittle">星期三</div>
    <div class="tittle">星期四</div>
    <div class="tittle">星期五</div>
    <div class="tittle">星期六</div>

    <?php 
    for($i=0;$i<count($data);$i++){
        echo "<div>";

        echo $data[$i];
        echo "</div>";
    }
   ?>
    
</div>
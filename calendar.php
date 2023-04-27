<!-- 萬年歷 -->

<?php 
#取得相關資料
$today=strtotime('now');    #目前時間
$month=date("n",$today);#月歷月份
$year=date("Y"); #目前年份
$first_day=strtotime("$year-$month-1");     #當月的第一天秒數
$days=date("t",$today);                      #取得最後一天，天數
$final_day=strtotime("$year-$month-$days",$today);     #當月的最後一天秒數
$first_week=date('w',$first_day);           #第一週星期幾 六
$final_week=date('w',$final_day);          #最後一週星期幾 日
$month_days = ($days + $first_week);      #當月總共要算幾天36
$month_week = ceil($month_days/7);           #當月有幾週 6
echo $month_week;
echo"<br>";
echo $days;
    echo "<br>";
echo $first_week;
echo "<br>";
echo $final_day;
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

?>
<!-- #flexbox -->
<style>
*{
    box-sizing: border-box;
}
.contianer{
    display:flex;
    flex-wrap: wrap;
    
    margin-top: 1px;
    margin-left: 1px;
}
.contianer>div{
    background-color: white;
    flex-basis: calc(100% / 7);
    border: 1px solid black;
    margin-top: -1px;
    margin-left: -1px;
    height:300px;
}
</style>
<div class="contianer">
    <?php 
    for($i=0;$i<count($data);$i++){
        echo "<div>";
        echo $data[$i];
        echo "</div>";
    }
   ?>
    
</div>
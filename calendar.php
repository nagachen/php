<link rel="stylesheet" href="style.css">
<h2>月曆</h2>

<?php
#目前問題：

#2.休假日的判定，是不是可以和國定假日六，用同一種判定方法，再統一填色？
#3.第一週和最後一週將日期（上個月和下個月的日期填入，並以虛線顯示）
#4.年和月切換的按鈕制作，（未教）
$show_month=(isset($_GET['month']))?$_GET['month']:date("n");                                 #模擬輸入月份
$year=$_GET['year']??date("Y"); #取得今年數宇
$show_day=strtotime("Y-.$show_month"."-l");  #模擬日數預設為1日

// echo"<br>";
// echo$show_day;
// $today=strtotime("now");                        #現在秒數
// $month=date("n",$today);                        #取出目前月份

$days=date("t",$show_day);                         #取出月份天數
$firstDate=date("Y-n-1",$show_day);                #顯示第一天的日期
$finalDate=date("Y-n-t",$show_day);                #顯是最後一天的日期
$firstDateWeek=date("w",strtotime($firstDate)); #第一週星期幾
$finalDateWeek=date("w",strtotime($finalDate)); #最一週星期幾
$weeks=ceil(($days+$firstDateWeek)/7);          #要隔多少週
$firstWeekSpace=$firstDateWeek-1;               #6-1,第一週第一天會是6所以6-1




//先畫出固定的表頭內容

$days=[];

//使用迴圈來畫出當前月的周數
for($i=0;$i<$weeks;$i++){
    //使用迴圈來畫出當周的天數
    for($j=0;$j<7;$j++){
        //判斷當周是否為第一周或最後一周
        if(($i==0 && $j<$firstDateWeek) || (($i==$weeks-1) && $j>$finalDateWeek)){
            $days[]='&nbsp';
        }else{
            $days[]=$j+7*$i-$firstWeekSpace;
        }
    }
}



#使用flexbox
?>

<div class='calendar'>
<div>日</div>
<div>一</div>
<div>二</div>
<div>三</div>
<div>四</div>
<div>五</div>
<div>六</div>
<?php
for($i=0;$i<count($days);$i++){
    echo "<div> {$days[$i]} </div>";  /* 大括號內只能字串，不能做數值相加*/
}

?>

    

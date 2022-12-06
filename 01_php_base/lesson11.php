<?php
// 以下をそれぞれ表示してください。
// 表示するタイミングによって自動で算出すること
// ・現在日時（yyyy年mm月dd日 H時i分s秒）
// ・現在日時から３日後
// ・現在日時から１２時間前
// ・2020年元旦から現在までの経過日数

// 日時がおかしい場合、PHPのタイムゾーン設定を行ってください
echo date("Y年m月d日 H時i分s秒");
echo "<br>";
$date1 = strtotime("+3 day");
echo date("Y年m月d日 H時i分s秒", $date1);
echo "<br>";
$date2 = strtotime("-12 hour");
echo date("Y年m月d日 H時i分s秒", $date2);
echo "<br>";
function day_diff($day11, $day2)
{
    $timestamp1 = strtotime($day11);
    $timestamp2 = strtotime($day2);
 
    $seconddiff = abs($timestamp2 - $timestamp1);
    $daydiff = $seconddiff / (60 * 60 * 24);
 
    return $daydiff;
}
$day = day_diff("2020-01-1", date("Y-m-d"));
echo "2020年元旦から現在まで".$day."日が経過";

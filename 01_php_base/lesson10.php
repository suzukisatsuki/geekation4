<?php
// 今日の日付けを以下の形式で表示してください。
// xxxx年xx月xx日（x曜日）
echo date("Y年m月d日");
$week = ["日","月","火","水","木","金","土"];
date("w");
$date = date("w");
echo "(" . $week[$date] . "曜日)";

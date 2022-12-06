<?php
// 以下配列の中身をfor文を使用して表示してください。
// 表示はHTMLの<table>タグを使用すること

/**
 * 表示イメージ
 *  _________________________
 *  |_____|_c1|_c2|_c3|横合計|
 *  |___r1|_10|__5|_20|___35|
 *  |___r2|__7|__8|_12|___27|
 *  |___r3|_25|__9|130|__164|
 *  |縦合計|_42|_22|162|__226|
 *  ‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾
 */

$arr = [
    'r1' => ['c1' => 10, 'c2' => 5, 'c3' => 20],
    'r2' => ['c1' => 7, 'c2' => 8, 'c3' => 12],
    'r3' => ['c1' => 25, 'c2' => 9, 'c3' => 130]
];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>テーブル表示</title>
<style>
table {
    border:1px solid #000;
    border-collapse: collapse;
}
th, td {
    border:1px solid #000;
}
</style>
</head>
<body>
    <!-- ここにテーブル表示 -->
    <table>
        <tr>
            <th></th>
            <th>c1</th>
            <th>c2</th>
            <th>c3</th>
            <th>横合計</th>
        </tr>
        <?php
        $sum1 = 0;
        $sum2 = 0;
        $sum3 = 0;
        foreach ($arr as $key1 => $value) {
            echo "<tr><td>".$key1."</td>";
            foreach ($value as $key2 => $val) {
                echo "<td>".$val."</td>";
            }
            echo "<td>".array_sum($value)."</td></tr>";
            $sum1 += $value["c1"];
            $sum2 += $value["c2"];
            $sum3 += $value["c3"];
        }
        ?>
        <tr>
            <td>縦合計</td>
            <?php
            echo "<td>".$sum1."</td>";
            echo "<td>".$sum2."</td>";
            echo "<td>".$sum3."</td>";
            $sum4 = $sum1 + $sum2 + $sum3;
            echo "<td>".$sum4."</td>";
            ?>
        </tr>
    </table>
</body>
</html>
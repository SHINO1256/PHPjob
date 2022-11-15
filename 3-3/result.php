<?php
$anyNumber = $_POST['anyNumber'];
//フォームから受け取った任意の数を配列にする
$arr = str_split($anyNumber);
//配列からランダムに１つだけ値を取得したいので
//まず配列からキーをランダムに取得
$key = array_rand($arr);
//該当のキーの値を「選ばれた数字＝$specialNumber」とする
$specialNumber = $arr[$key];
//日付の変数
$date = date("Y/m/d", time());


echo $date."の運勢は". "<br>";
echo "選ばれた数字は".$specialNumber. "<br>";
//$specialNumberの値による条件分岐
if ($specialNumber == 0){
    echo "凶";
}   elseif (($specialNumber <= 3) && !($specialNumber == 0)){
    echo "小吉";
}   elseif (($specialNumber >= 4) && ($specialNumber <= 6)){
    echo "中吉";
}   elseif (($specialNumber == 7) OR ($specialNumber == 8)){
    echo "吉";
}   else {
    echo "大吉";
}
?>
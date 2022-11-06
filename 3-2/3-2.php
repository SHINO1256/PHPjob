<?php
$fruits = ["リンゴ" => "150", "みかん" => "75", "桃" => "1500"];
//functionを使用した場合
function getFruitsPrice ($fruits){
    foreach ($fruits as $key => $value){
        $num = 2;
        $price = $value*$num;
        echo $key."は" .$price. "円です。". "<br>";   
    }
}
getFruitsPrice ($fruits);
echo "<br>";
echo "<br>";
?>



<?php
//foreachだけの場合
$fruits = ["リンゴ" => "150", "みかん" => "75", "桃" => "1500"];

foreach ($fruits as $key => $value){
    $num = 2;
    $price = $value * $num;
    echo  $key."は" .$price. "円です。". "<br>";  
}

?>
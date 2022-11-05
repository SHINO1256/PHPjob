<?php
echo "連想配列". "<br>";
$fruits = ["apple" => "りんご", "orange" => "みかん", "peach" => "もも"];
foreach ($fruits as $key => $value){
    echo $key;
    echo "といったら";
    echo $value. "<br>";
}
?>
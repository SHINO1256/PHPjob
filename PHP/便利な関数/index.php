<?php
    // 切り上げ
    $x = 5.2;
    echo ceil($x);
    // 6 とブラウザ表示
    echo "<br>";
    echo "<br>";


    // 切り捨て
    $x = 5.2;
    echo floor($x);
    // 5 と表示
    echo "<br>";
    echo "<br>";

    // 四捨五入
    $x = 5.2;
    echo round($x);
    echo "<br>";
    echo "<br>";

    // 演習率
    echo pi();
    echo "<br>";
    echo "<br>";

    function circleArea($r){
            $circle_area = $r * $r * pi();
            echo $circle_area;
    }
    // 半径が2の円の面積
    circleArea(3);
    echo "<br>";
    echo "<br>";


    // 乱数（ランダムに抽出）
    echo mt_rand(1, 100);
    echo "<br>";
    echo "<br>";

    // 文字列の長さ
    $str = "rurururu";
    echo strlen($str);
    // 8
    echo "<br>";
    echo "<br>";


    //検索。最初に出てくる文字の順番。最初の文字の順番はゼロ。探せるのは一文字。
    $str = "yokouchi";
    echo strpos($str, "k");
    // 2
    echo "<br>";
    echo "<br>";  
    
    // 文字列のキリトリ
    $str = "yokouchimachima";
    echo substr($str, -2, 2);
    // hi 最後の文字をマイナス1として左へ数えたのが位置。そこから、右へ切り取る。
    echo "<br>";
    echo "<br>";

 
    // 置換
    $str = "yokouchi";
    echo str_replace("ou", "OU", $str);
    // 8
    echo "<br>";
    echo "<br>";


    //フォーマット化された文字列
    $name = "横内さん";
    $name_2= "柴田さん";
    $age = "25";
    printf("%sと%sの年齢は%dです。", $name, $name_2, $age);
    //横内さんと年齢は25です。数字と文字は混ぜられない。＄は順番通りに入れ込む。
    echo "<br>";
    echo "<br>";
    
    
    //桁数を%記法で指定したいとき
    $limit_number =4;
    printf("残り時間はあと%02d時間です", $limit_number);
    //残り時間はあと04時間です
    echo "<br>";
    echo "<br>";
    
    //sprintf 変数に代入できるフォーマット化された文字列。
    $limit_hour = 4;
    $limit_minute = 5;
    $limit_time = sprintf("残り時間は%02d時間%02d分です。", $limit_hour, $limit_minute);
    echo $limit_time;
    //残り時間は04時間05分です。
    echo "<br>";
    echo "<br>";
    



    //便利な関数（配列）
    //count (要素の数を数える)
    $fruits =["apple", "banana", "orange"];
    echo count($fruits);
    // 3
    echo "<br>";
    echo "<br>";

    //sort (要素の並べ替え)
    $fruits =["apple", "orange", "banana"];
    sort($fruits);
    var_dump($fruits);
    echo "<br>";
    echo "<br>";
    //array(3) { [0]=> string(5) "apple" [1]=> string(6) "banana" [2]=> string(6) "orange" }
    echo "<br>";
    echo "<br>";

    //in_array (配列の中に指定の要素があるかどうか)
    $fruits =["apple", "banana", "orange"];
    if (in_array("banana", $fruits)){
        echo "バナナがあるよ！";
    } else {
        echo "バナナな～し！";
    }
    echo "<br>";
    echo "<br>";
    

    //implode（配列を結合して文字列に変換）
    $city = ["toyota", "anjo", "okazaki", "nagoya"];
    $atstr = implode ("@", $city);
    var_dump($atstr);
    //string(26) "toyota@anjo@okazaki@nagoya"
    echo "<br>";
    echo "<br>";

    //count 要素の数を数える
    $grade = ["1年生", "2年生", "3年生", "4年生", "5年生"];
    echo count($grade);
    // 5
    echo "<br>";
    echo "<br>";

    //explode 文字列を指定の区切りで配列にする
    $str = "1,2,3,4,5";
    $array = explode(",",$str);
    var_dump($array);
    //array(5) { [0]=> string(1) "1" [1]=> string(1) "2" [2]=> string(1) "3" [3]=> string(1) "4" [4]=> string(1) "5" }
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";




    //便利な関数 (日付・時間)
    echo "time 現在時刻を取得";
    echo "<br>";
    echo time();
    echo "<br>";
    echo "<br>";

    echo "一秒経過するごとに値のかわるタイムスタンプ";
    echo "<br>";
    var_dump (time());
    echo "<br>";
    echo "<br>";

    echo "タイムスタンプから日付のフォーマットに直す関数";
    echo "<br>";
    echo date("Y-m-d H:i:s", time());
    echo "<br>";
    echo "<br>";
    echo "日本語入れると";
    echo "<br>";
    echo date("Y年m月d日 H時i分s秒", time());
    echo "<br>";
    echo "<br>";
    echo "特定の日付のタイムスタンプを取得";
    echo "<br>";
    echo strtotime("2022/11/20 11:11:11");
    echo "<br>";
    echo "<br>";

    


    







    






    



    







?>
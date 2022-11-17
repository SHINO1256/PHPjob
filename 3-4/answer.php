<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$name=$_POST["name"];
$port=$_POST["port"];
$language=$_POST["language"];
$command=$_POST["command"];
$answerPort="80";
$answerLanguage="HTML";
$answerCommand="select";


?>
<html>
<link rel="stylesheet" href="css/style.css">
<body  style="background-color:grey;" >
<div class="body">
<br>
<br>
<p><?php echo $name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
if($port == $answerPort){
        $result = "正解！";
    } else{
        $result = "残念・・・";
    }
 echo $result;
?>

<p>②の答え</p>  
<!--作成した関数を呼び出して結果を表示-->
<?php
if($language == $answerLanguage){
        $result = "正解！";
    } else{
        $result = "残念・・・";
    }
 echo $result;
?>

<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
if($command == $answerCommand){
        $result = "正解！";
    } else{
        $result = "残念・・・";
    }
 echo $result;
?>

</div>
</body>
</html>
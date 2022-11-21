<?php 
//[question.php]から送られてきた名前の変数、
$name=$_POST["name"];

/*先生にいただいたご指摘：
「回答の変数が[question.php]から送られてきたものになっていません。」
⇒以下（8～14行目）のように修正します*/
//選択した回答
$selectedPort=$_POST["port"]; //修正しました
$selectedLanguage=$_POST["language"]; //修正しました
$selectedCommand=$_POST["command"]; //修正しました
//問題の答えの変数を作成
$a_Port=$_POST["answerPort"]; //修正しました
$a_Language=$_POST["answerLanguage"]; //修正しました
$a_Command=$_POST["answerCommand"]; //修正しました
?>

<html>
<link rel="stylesheet" href="css/style.css">
<body  style="background-color:grey;" >
<div class="body">
<br>
<br>
<p><?php echo $name; ?>さんの結果は・・・？</p>
<!--先生にいただいたご指摘：「以下のような要件があるので、この処理は
if文を3回呼び出さずに、関数で定義してから呼び出すようにします。：
選択した回答と正解が一致していれば「正解！」、
一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する」
⇒以下（27～52行目）のように修正します。-->

<?php
function getTrueOrFalse($selected_, $a_){
    if( $t_or_f = ($selected_ == $a_)){
    print "正解！";} else{
        print "残念・・・";
    }  
}
?>

<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
 getTrueOrFalse($selectedPort, $a_Port);
?>

<p>②の答え</p>  
<!--作成した関数を呼び出して結果を表示-->
<?php
 getTrueOrFalse($selectedLanguage, $a_Language);
?>

<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
 getTrueOrFalse($selectedCommand, $a_Command);
?>

</div>
</body>
</html>
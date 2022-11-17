<?php
//POST送信で送られてきた名前を受け取って変数を作成
$name=$_POST["name"];

//①画像を参考に問題文の選択肢の配列を作成
$port_arr=["80","22","20","21"];
$language_arr=["PHP","Python","JAVA","HTML"];
$command_arr=["join","select","insert","update"];

//② ①で作成した、配列から正解の選択肢の変数を作成
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
    <!--フォームの作成 通信はPOST通信で-->
    <form action="answer.php" method="POST">
    <p>お疲れ様です<?php echo $name; ?>さん</p>
    <input type="hidden" name="name" value="<?php echo $name; ?>" />

    <h2>①ネットワークのポート番号は何番？</h2>
    <?php 
        foreach($port_arr as $value){ ?>
        <input type="radio" name="port" value="<?php echo $value; ?>" />
        <?php echo $value; 
        }   
        ?>
        <input type="hidden" name="answerPort" value="<?php echo $answerPort; ?>" />

    <h2>②Webページを作成するための言語は？</h2>
    <?php 
        foreach($language_arr as $value){ ?>
        <input type="radio" name="language" value="<?php echo $value; ?>" />
        <?php echo $value; 
    }   
    ?>
    <input type="hidden" name="answerLanguage" value="<?php echo $answerLanguage; ?>" />

    <h2>③MySQLで情報を取得するためのコマンドは？</h2>
    <?php
        foreach($command_arr as $value){ ?>
        <input type="radio" name="command" value="<?php echo $value; ?>" />
        <?php echo $value;
    }
    ?>
    <input type="hidden" name="answerCommand" value="<?php echo $answerCommand; ?>" />
    <br>
    <input type="submit" value="回答する" />
    </form>
</div>
</body>
</html>


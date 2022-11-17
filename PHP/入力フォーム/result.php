<?php
//POST通信
$my_name = $_POST['my_name'];
$password = $_POST['password'];
?>
<p>私の名前は、<?php echo $my_name; ?></p>
<p>私のパスワードは、<?php echo $password; ?></p>
<br>
<br>



<?php
//GET通信
$my_name = $_GET['my_name'];
$password = $_GET['password'];
?>
<p>私の名前は、<?php echo $my_name; ?></p>
<p>私のパスワードは、<?php echo $password; ?></p>
<br>
<br>

<?php
//いろいろなフォーム
    $my_name = $_POST["my_name"];
    $password = $_POST["password"];
    $sex = $_POST['sex'];
?>
<p>私の名前は、<?php echo $my_name; ?> です。</p>
<p>パスワードは、<?php echo $password; ?>です。</p>
<p>性別は、<?php echo $sex; ?>です。</p>
<p>性別は、<?php echo $hidden_param; ?>です。</p>
<br>
<br>


<?php
//selectタグ
$age = $_POST["age"];
?>
<p>わたしは、<?p echo $age; ?>歳です。</p>
<br>
<br>

<p>「いろいろなフォーム」のチャレンジ</p>
<?php 
$my_name=$_POST["my_name"];
$prize=$_POST["prize"];
$number=$_POST["number"];
?>
<p>お名前：<?php echo "$my_name"; ?></p>
<p>ご希望商品<?php echo "$prize"; ?></p>
<p>個数：<?php echo "$number"; ?></p>
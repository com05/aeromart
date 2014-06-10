<?php
    //include "fastworks/core.php";
    include "_fastworks/core.php";
    $__['pathPage'] = "page/";
    
    $m = $_REQUEST['m'];
    if ($m == null) {
        $m = "index";
    }
    loadLayout($__['pathPage'].$m.".php");
?>
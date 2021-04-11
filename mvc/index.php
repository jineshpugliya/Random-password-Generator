<?php

$cfiles=glob('config/*.php');
//print_r($cfiles);
foreach($cfiles as $cfile)
{
    require_once $cfile;
}
$hfiles=glob('helper/*.php');
foreach($hfiles as $hfile)
{
    require_once $hfile;
}
include_once "app/libs/Session.php";
spl_Autoload_register(function($classname){
    include_once"app/libs/$classname.php";
});
new Autoload();
?>

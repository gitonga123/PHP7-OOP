<?php
function __autoload($classname)
{
    $lastSlash = strpos($classname, '\\') + 1;
    $classname = substr($classname, $lastSlash);
    $directory = str_replace('\\','/',$classname);
    $filename = __DIR__.'/src/'.$directory. '.php';

    require_once($filename);
}
 ?>
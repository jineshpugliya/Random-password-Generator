<?php
class Autoload
{
    public function __construct()
    {
        Session::init();
        $controller = request()->controller;
        $method = request()->method;

        $path = "app/Controllers/$controller.php";
        
        //dd($method);
        if (file_exists($path)) {
            include_once $path;
            $cobj = new $controller();
            if (method_exists($cobj, $method)) {
                $cobj->$method(request()->args);
                //return;
            } 
            else {
                redirect('404.php');
            }
        } 
        else {
            redirect('404.php');
        }
    }
}

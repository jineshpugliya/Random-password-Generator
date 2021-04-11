<?php
class MainController
{
    public $view;
    public function __construct()
    {
        $this->view = new MainView();
    }
    public function loadModel($mname,$objname ='')
    {
        if (!$objname) {
            $objname = strtolower($mname);
        }
        $mname = ucfirst(strtolower($mname));
        $path = "app/Models/$mname.php";
       
        if (file_exists($path)) {
            include_once $path;
        
            $this->$objname = new $mname(strtolower($mname));
        
        }
    }
}

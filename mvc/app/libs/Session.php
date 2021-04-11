<?php
class Session{
    function init(){
        @session_start();

    }
    function set($key,$value){
        $_SESSION[$key]=$value;
    }
    function get($key)
    {
        if(isset($_SESSION[$key]))
        {
            return $_SESSION[$key];
        }
        return false;
    }
    function del($key){
        unset($_SESSION[$key]);
    }
    function destroy()
    {
      session_destroy();  

}
}
?>
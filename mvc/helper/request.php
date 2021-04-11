<?php
function request($controller='Categories'."Controller",$method='index')
{
    $rq=(object)['controller'=>$controller,'method'=>$method,'args'=>''];
    if(isset($_GET['url']) && $_GET['url']){
        $url=explode('/',rtrim($_GET['url'],'/'));
        $rq->controller=ucfirst(strtolower($url[0]))."Controller";
        $rq->method=(isset($url[1]))?$url[1]:$method ;
        $rq->args=(isset($url[2]))?$url[2]:'' ;
       // unset($_GET['url']);
    }
    if($_GET)
    {
        $rq->get=$_GET;
    }
    if($_POST){
        $rq->post=$_POST;
    }
    return $rq;
    }
    function dd($perm){
        echo"<pre>";
        print_r($perm);
        echo"</pre>";
        exit;
    }
    function redirect($url){
        $url=ROOT.$url;
        $script=<<<URL
            <script>
                location.href="$url";
            </script>
    
URL;

echo $script;
}
?>
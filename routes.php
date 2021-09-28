<?php
$controllers = array('pages'=>['home','error']);
function call($controllers,$action){
    require_once("controllers/".$controller."_controller.php");
    switch($controller)
    {
        case"pages":    $controller = new PagesController();
                        break;
    }
    $controller->{$action}();
   
}
if(array_key_exists($controller,$controllers))
{
    if(in_array($action,$controllers[$controller]))
        call($controller,$action);
     else
        call('pages','error');
    
}
else 
{
    call('pages','error');
}
?>
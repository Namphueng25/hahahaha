<?php
if(isset($_GET['controller'])&&isset($_GET['action']))
{
    $controller = $_GET['controller'];
    $action = $_GET['action'];
}else
{
    $controller = 'pages';
    $action = 'home';
}?>
<html>
    <head></head>
    <body>
        <?php echo "controller= ".$controller.",action=".$action;?>
        <br>[<a href="?controller=pages&action=home">home</a>]
        [<a href="?controller=order&action=index">order</a>]
      [<a href="">Detail_order</a>]
    
         
        <?php require_once("./routes.php");?>
    </body>
</html>
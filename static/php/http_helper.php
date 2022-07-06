<?php
function redirect($url)
{
    header('Location: '.$url);
    exit();
};

function internal_server_error($msg , $url = "../index.php")
{
    setcookie("error_msg", $msg, time() + (86400 * 30), "/");
    redirect($url);
}

// function not_found()
// {
//     header('Location: http://".$_SERVER['HTTP_HOST']."/pages/404.html');
//     exit();
// }

// function unauthorized()
// {
//     header('Location: http://".$_SERVER['HTTP_HOST']."/index.php');
//     exit();
// }
?>
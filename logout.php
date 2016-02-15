<?
session_start();
unset($_SESSION['id']);
unset($_SESSION['pass']);
session_destroy();

header('HTTP/1.1 200 OK');
$redirect_url="/index.php";
header('Location: http://'.$_SERVER['HTTP_HOST'].$redirect_url);
exit();
?>
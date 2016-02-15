<?
session_start();
include("./bd.php");
$id=$_POST['id'];
$result = mysql_query("SELECT* FROM users WHERE id=$id", $dbcnx);
$myuser = mysql_fetch_array($result);

if($myuser['pass']==$_POST['pass'])
{
	$_SESSION['id']=$myuser['id'];
	$_SESSION['pass']=$myuser['pass'];
}

header('HTTP/1.1 200 OK');
$redirect_url="/index.php";
header('Location: http://'.$_SERVER['HTTP_HOST'].$redirect_url);
exit();
?>
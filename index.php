<?
session_start();
include("./bd.php");
if(isset($_SESSION['id']) and isset($_SESSION['pass']))
{
	$_SESSION['flagAuth']=1;
	$id=$_SESSION['id'];
	$result = mysql_query("SELECT* FROM users WHERE id=$id", $dbcnx);
	$myuser = mysql_fetch_array($result);
}
else 
	$_SESSION['flagAuth']=0;

?>
<!DOCTYPE html>
<html class="html" lang="ru-RU">
<head>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
<link rel="stylesheet" href="./css/style.css"/>
<title>DotaInvest</title>
</head>
<body>
<!--DOTAINVEST 2016. COMMUNITY PROJECT DOTA2-->
	<div class="container">
		<div class="stat_main">
        	<div class="logo">
            <span class="imgLg"><img src="img/invest_1302.png"/></span><span class="dota">DOTA</span><span class="invest">INVEST</span>
			</div>
            <div class="image">
            </div>
		</div>
		
		<?
		if($_SESSION['flagAuth']==1)
			include("./blocks/profile.php");
		else
			include("./blocks/loged.php");
		
		?>
		
	</div>
    <!--DOTAINVEST 2016. COMMUNITY PROJECT DOTA2-->
</body>
</html>
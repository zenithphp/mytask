<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php session_start(); ?>
<?php setcookie("user", "Alex Porter", time()+3600);?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>page view</title>
</head>

<body>
<?php 
if (isset($_COOKIE["user"]))
 if(isset($_SESSION['views']))
 {
  $iipp=$_SERVER["REMOTE_ADDR"];
  $_SESSION['views']=$_SESSION['views']+1;
  $counter=$_SESSION['views'];
  $f_open = fopen ("counter.txt",'w');
    fwrite ($f_open,$counter);
	 	$view=file_get_contents("counter.txt","r");
		echo $_COOKIE["user"] .","."You have viewd this page ".$view." times";
		echo '<br />'.'your ip is '.$iipp;

 }
  else
  $_SESSION['views']=1;
?>
</body>
</html>

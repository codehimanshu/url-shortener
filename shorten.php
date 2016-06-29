 <?php
 	session_start();
	$link=mysql_connect('localhost','root','') or die("ERROR Connecting Database");
	$db=mysql_select_db('urlshortener',$link) or die("ERROR Connecting Database");
	if(isset($_POST["short"]))
	{
		$orgurl=$_POST["orgurl"];
		$result=mysql_query("SELECT * FROM url WHERE orgurl='$orgurl'") or die(mysql_error());
		$count=mysql_num_rows($result);
		if($count)
		{
			$result=mysql_fetch_assoc($result);
			$srturl="http://localhost/url-shortener/".$result["srturl"];
			$_SESSION["url"]=$srturl;
			$_SESSION["comment"]=1;
			header("Location: index.php");									
		}
		else
		{
				$srturl=$_POST["srturl"];
				$result=mysql_query("SELECT * FROM url WHERE srturl='$srturl'");
				$count=mysql_num_rows($result);
				if($count)
				{
					$_SESSION["status"]=1;
					header("Location: index.php");
				}
				else
				{
					$result=mysql_query("INSERT into url VALUES ('','$orgurl','$srturl')",$link);
					if($result)
					{
						$srturl="http://localhost/url-shortener/".$srturl;
						$_SESSION["url"]=$srturl;
						header("Location: index.php");						
					}
				}
		}
	}
	else
	{
		header("Location:404.html");
	}
?>

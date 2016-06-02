<html>
	<head>
		<title>
			Short URL
		</title>
	</head>
	<body>
		<form action="" method="get">
			<input type="url" name="orgurl" required>
			<button type="submit" name="short">Shorten</button>
		</form>
		<?php
			$link=mysql_connect('localhost','root','') or die("ERROR Connecting Database");
			$db=mysql_select_db('urlshortener',$link) or die("ERROR Connecting Database");
		?>
		<?php
			if(isset($_GET['id']))
			{
				$id=$_GET['id'];
				$result=mysql_query("SELECT * FROM url WHERE srturl='$id'",$link) or die(mysql_error());
				$count=mysql_num_rows($result);
				if(!$count)
				{
					echo "Could Not Find Link...";
				}
				else
				{
					$result=mysql_fetch_assoc($result);
					$result=$result["orgurl"];
					header("Location: $result");				
				}
			}
		?>
		<?php
			if(isset($_GET["short"]))
			{
				$orgurl=$_GET["orgurl"];
				$result=mysql_query("INSERT INTO url VALUES ('','$orgurl','')",$link);
				if(!$result)
				{
					echo "Could not Shorten... Pls RETRY";
				}
				else
				{
					$id=mysql_insert_id();
					$result1=$id.($id+1);
					$result=mysql_query("UPDATE url SET srturl='$result1' WHERE id=$id;",$link);
					if($result)
					{
						$srturl="http://localhost/urlshortener/?id=".$result1;
						echo "Shortened URL: <a href=$srturl>$srturl</a>";						
					}
				}
			}
		?>
	</body>
</html>
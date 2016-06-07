<html>
	<head>
		<title>
			Short URL
		</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="container">
			<br><br><br>
			<h1 class="title">Shorten a URL</h1>
			<form action="" method="post">
				<input type="url" name="orgurl" placeholder="Enter Your URL here" required>
				<button type="submit" name="short">Shorten</button>
			</form>
		</div>	
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
			if(isset($_POST["short"]))
			{
				$orgurl=$_POST["orgurl"];
				$result=mysql_query("INSERT INTO url VALUES ('','$orgurl','')",$link);
				if(!$result)
				{
					echo "Could not Shorten... Pls RETRY";
				}
				else
				{
					$id=mysql_insert_id();
					$result1=base_convert($id, 10, 36);
					$result=mysql_query("UPDATE url SET srturl='$result1' WHERE id=$id;",$link);
					if($result)
					{
						$srturl="http://localhost/url-shortener/".$result1;
						echo "Shortened URL: <a href=$srturl>$srturl</a>";						
					}
				}
			}
		?>
	</body>
</html>
<html>
	<head>
		<title>
			Short URL
		</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<b>All links created here and their Statistics are Public and can be seen by anyone.</b>
		<div class="container">
			<br><br><br>
			<h1 class="title">Shorten a URL</h1>
			<form action="shorten.php" method="post">
				<input type="url" name="orgurl" placeholder="Enter Your URL here" required />
				<br>
				<label>http://localhost/url-shortener/ </label>
				<input type="text" name="srturl" placeholder="Shortened URL you wish" required/>
				<button type="submit" name="short">Shorten</button>
			</form>
		</div>	
		<div class="container">
			<br><br>
			Enter your Short URL to see Statistics<br>
			<form action="" method="post">
				<label>localhost/url-shortener/</label>
				<input type="text" name="urlstat" />
				<button type="submit" name="stat">Show Statistics</button>
			</form>
		</div>
		<?php
			session_start();
			if(isset($_SESSION["status"])):
			?>
			The Short URL you wish is already in use, Please try again.
			<?php
			endif;
			if(isset($_SESSION["comment"])):
			?>
			Link has already been Shortened by Someone before. Please use that.<br>
			<?php
			endif;
			if(isset($_SESSION["url"])):
			?>

			<?php echo $_SESSION["url"]; ?>
			
			<?php
			endif;
			$link=mysql_connect('localhost','root','') or die("ERROR Connecting Database");
			$db=mysql_select_db('urlshortener',$link) or die("ERROR Connecting Database");
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
					$result1=mysql_query("UPDATE url SET clicks=clicks+1");
					$result=mysql_fetch_assoc($result);
					$result=$result["orgurl"];
					header("Location: $result");				
				}
			}
			if(isset($_POST["stat"])):
			
				$urlstat=$_POST["urlstat"];
				$result=mysql_query("SELECT * FROM url WHERE srturl='$urlstat'");
				$result=mysql_fetch_assoc($result);
				?>
				No. of Clicks on your link are 
				<?php echo $result["clicks"]; ?>
				<?php
			endif;
			session_destroy();
		?>
	</body>
</html>
<!DOCTYPE html>
<html>
	<head>
		<title>Website Visitor Counter</title>
	</head>

	<body>
		<script>
			function SetCookie(c_name,value,expiredays)
					{
							var exdate=new Date()
							exdate.setDate(exdate.getDate()+expiredays)
							document.cookie=c_name+ "=" +escape(value)+
							((expiredays==null) ? "" : ";expires="+exdate.toGMTString())
					location.reload()
					}
	</script>
		<header>
			<ul>
				<form method="post">
				<li><a href="index.php">Main Page</a></li>
				<li><a href="page.php" onClick="SetCookie('pageid','1','-1')">Page 1</a></li>
				<li><a href="page.php"onClick="SetCookie('pageid','2','-1')">Page 2</a></li>
				<li><a href="page.php" onClick="SetCookie('pageid','3','-1')">Page 3</a></li>
				<form>
			</ul>
		</header>

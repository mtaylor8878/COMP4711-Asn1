<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>{pagetitle}</title>
        <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="/assets/css/default.css"/>
        <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css"/>
        <script src="/assets/js/jquery-3.1.1.slim.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
	</head>
	<body>
        <div id="container">
			{content}
			<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. 
				{ci_version}</p>
        </div>
	</body>
</html>
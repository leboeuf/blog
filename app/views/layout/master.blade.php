<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Blog - Maxime Leboeuf</title>
	<?= stylesheet_link_tag() ?>
</head>
<body>
	<div class="container"><article>@yield('content')</article></div>
	<?= javascript_include_tag() ?>
</body>
</html>
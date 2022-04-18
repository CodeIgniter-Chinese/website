<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="robots" content="noindex">

	<title>页面不存在!</title>

	<style type="text/css">
		<?= preg_replace('#[\r\n\t ]+#', ' ', file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'debug.css')) ?>
	</style>
</head>
<body>

	<div class="container text-center">

		<h1 class="headline" style="margin-top: 5%">页面不存在!</h1>

		<p class="lead">请添加下面的微信将错误反馈给管理员...</p>
        <p class="lead"><img src="https://codeigniter.org.cn/forums/data/attachment/forum/201703/31/180052c0rrrp05errptctp.png" alt="微信小助手" style="width: 450px;height: 450px"></p>

	</div>

</body>

</html>

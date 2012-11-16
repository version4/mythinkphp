<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Update</title>
</head>
<body>
	<form method="post" action="__URL__/update">
		标题：<input type="text" name="title" value="<?php echo ($vo["title"]); ?>"><br>
		内容：<textarea name="content" rows="5" cols="45"><?php echo ($vo["content"]); ?></textarea><br>
		<input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>">
		<input type="submit" value="提交">
	</form>
</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Form</title>
</head>
<body>
	<form action="__URL__/insert" method="post">
	标题：<input type="text" name="title"><br/>
	内容：<textarea name="content" rows="5" cols="45"></textarea><br/>
	<input type="submit"  value="提交">
	</form>
</body>
</html>
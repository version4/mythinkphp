<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Read</title>
</head>
<body>
	<table>
		<tr>
			<td>id：</td>
			<td><?php echo ($data["id"]); ?></td>
		</tr>
		<tr>
			<td>标题：</td>
			<td><?php echo ($data["title"]); ?></td>
		</tr>
		<tr>
			<td>内容：</td>
			<td><?php echo ($data["content"]); ?></td>
		</tr>
		<tr>
			<td>创建时间：</td>
			<td><?php echo ($data["create_time"]); ?></td>
		</tr>
	</table>
</body>
</html>
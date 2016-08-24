<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		I'm inder.html!
		<form method="post" id="user_form" action="/index.php/Home/login/index">
			<div>
				<table>
					<tr>
						<td>姓名</td>
						<td><input type="text" name="userName"></td>
					</tr>
					<tr>
						<td>年龄</td>
						<td><input type="tel" name="userAge"></td>
					</tr>
				</table>
			</div>
			<div>
				<input type="submit"/>
			</div>
		</form>
	</body>
</html>
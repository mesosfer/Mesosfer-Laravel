<html>
<head>
	<title>Login Page</title>
</head>
<body>
    <form action="signin" method="POST">
		{!! csrf_field() !!}
		<table>
			<tr>
				<td>Username</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>
					<input type="submit" value="submit">
				</td>
			</tr>
		</table>
    </form>
</body>
</html>
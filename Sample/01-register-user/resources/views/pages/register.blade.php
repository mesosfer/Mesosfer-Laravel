<html>
<head>
	<title></title>
</head>
<body>
	<form action="signup" method="POST">
		{!! csrf_field() !!}
		<table>
			<tr>
				<td>Firstname</td>
				<td><input type="firstname" name="firstname"></td>
			</tr>
			<tr>
				<td>Lastname</td>
				<td><input type="lastname" name="lastname"></td>
			</tr>
			<tr>
				<td>Email</td>
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
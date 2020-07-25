<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>create an user </title>
</head>
<body>
	<form method="post"action="/test-any">
		@csrf
		@method('put')
		<input type="text" name="name">
		<input type="submit" value="submit">
	</form>
</body>
</html>
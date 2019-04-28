<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
	<form action="/facu" method="post">
		@csrf

		FACULTY NAME:<input type="name" name="fname"></input><br><br>
		FACULTY EMAIL:<input type="email" name="femail"></input><br><br>
		CITY:<select name="fcity">
				<option value="RAJKOT">RAJKOT</option>
				<option value="AHEMDABAD">AHEMDABAD</option>
				<option value="GONDAL">GONDAL</option>
				<option value="MOVDI">MOVDI</option>
		</select><br><br>
		<input type="submit" value="INSERT"></input>
	</form>
</body>
</html>

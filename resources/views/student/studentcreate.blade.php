<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
	<form action="/stud" method="post">
		@csrf

		STUDENT NAME:<input type="name" name="sname"></input><br><br>
		STUDENT EMAIL:<input type="email" name="semail"></input><Br><Br>
		CITY:<select name="scity">
				<option value="RAJKOT">RAJKOT</option>
				<option value="AHEMDABAD">AHEMDABAD</option>
				<option value="GONDAL">GONDAL</option>
				<option value="MOVDI">MOVDI</option>
		</select><br><Br>
		<input type="submit" value="INSERT"></input>
	</form>
</body>
</html>

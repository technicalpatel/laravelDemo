<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
	<table border="2">
		<tr>
			<th>STUDENT NAME</th>
			<th>STUDENT EMAIL</th>
			<th>STUDENT CITY</th>
			<th>EDIT</th>
			<th>DELETE</th>
		</tr>
		@foreach ($result as $da)
		<tr>
			<td>{{$da->sname}}</td>
			<td>{{$da->semail}}</td>
			<td>{{$da->scity}}</td>
			<td><a href="{{$da->id}}">EDIT</a></td>
			<td><a href="{{$da->id}}">DELETE</a></td>
		</tr>
		@endforeach
	</table>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
	<table border="2">
		<tr>
			<th>FACULTY NAME</th>
			<th>FACULTY EMAIL</th>
			<th>FACULTY CITY</th>
			<th>EDIT</th>
			<th>DELETE</th>
		</tr>
		@foreach ($data as $da)
		<tr>
			<td>{{$da->fname}}</td>
			<td>{{$da->femail}}</td>
			<td>{{$da->fcity}}</td>
			<td><a href="{{$da->id}}">EDIT</a></td>
			<td><a href="{{$da->id}}">DELETE</a></td>
		</tr>
		@endforeach
	</table>
</body>
</html>
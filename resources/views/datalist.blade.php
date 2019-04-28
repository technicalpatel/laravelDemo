<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
	<table border="2">
		@foreach ($data as $da) 
		<tr>
		<td>{{$da->id}}	</td>
		<td>{{$da->cmt_id}}	</td>
		<td>{{$da->cmt_name}}	</td>
		</tr>
		@endforeach
	</table>
		
</body>
</html>
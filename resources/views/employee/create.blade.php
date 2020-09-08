
<!DOCTYPE html>
<html>
<head>
	<title>Create job</title>
</head>
<body>

	<h1>Create New job</h1>
	<a href="{{route('employee.home')}}">Back</a>

	<form method="post">
		
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<table>

			<tr>
				<td> Company Name</td>
				<td><input type="text" name="companyname" value="{{old('companyname')}}"></td>
			</tr>
			
		    <tr>
				<td>Job Title</td>
				<td><input type="text" name="title" value="{{old('title')}}"></td>
			</tr>

			<tr>
				<td>Job Location</td>
				<td><input type="text" name="location" value="{{old('location')}}"></td>
			</tr>
            <tr>
				<td>Salary</td>
				<td><input type="text" name="salary" value="{{old('salary')}}"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Save"></td>
			</tr>
		</table>
	</form>

	@foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach
</body>
</html>

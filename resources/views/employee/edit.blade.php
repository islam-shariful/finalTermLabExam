
<!DOCTYPE html>
<html>
<head>
	<title>Edit Job</title>
</head>
<body>

	<h1>Edit Job page</h1>

	<a href="{{route('employee.home')}}">Back</a>
	<form method="post">
		
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<table>
			<tr>
				<td> Company Name</td>
				<td><input type="text" name="companyname" value="{{$job->company_name}}"></td>
			</tr>
			
		    <tr>
				<td>Job Title</td>
				<td><input type="text" name="title" value="{{$job->job_title}}"></td>
			</tr>

			<tr>
				<td>Job Location</td>
				<td><input type="text" name="location" value="{{$job->job_location}}"></td>
			</tr>
            <tr>
				<td>Salary</td>
				<td><input type="text" name="salary" value="{{$job->salary}}"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="update"></td>
			</tr>
		</table>
	</form>
	@foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach
</body>
</html>

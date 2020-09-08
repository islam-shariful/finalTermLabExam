<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<body>

    <h1>Welcome home!</h1>
    <a href="/employee/create">Create Job</a><br>
    <a href="/logout">logout</a>


    <h2>Job list</h2>

    <table border="1">
        <tr>
            <td>ID</td>
            <td>Company name</td>
            <td>Job Title</td>
            <td>Location</td>
            <td>Salary</td>
            <td>Action</td>
        </tr>

    @for($i=0; $i != count($user); $i++)
        <tr>
            <td>{{$user[$i]->job_id}}</td>
            <td>{{$user[$i]->company_name}}</td>
            <td>{{$user[$i]->job_title}}</td>
            <td>{{$user[$i]->job_location}}</td>
            <td>{{$user[$i]->salary}}</td>
            <td>
                <a href="employee/edit/{{$user[$i]->job_id}}">Edit</a> |
                <a href="employee.delete', [$user[$i]->job_id]"onclick=" return confirm('are you sure to delete')">Delete</a>
            </td>
        </tr>
    @endfor
    </table>

</body>
</html>

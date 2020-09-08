<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
    <h1>Delete Page</h1>
    <form method="post">
    @csrf
    <!-- <input type="hidden" name="_token" value="UUC3igkQVtN6CYZbePfQZ5FLXKPAok2fPS1sCABZ"> -->
        <table>
                <tr>
                    <td>Name:</td>
                    <td>{{$username}}</td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>{{$password}}</td>
                </tr>
                <tr>
                    <td>Type:</td>
                    <td>{{$type}}</td>
                </tr>
                <tr>
                    <td>Full Name:</td>
                    <td>{{$employeename}}</td>
                </tr>
                <tr>
                    <td>Company:</td>
                    <td>{{$companyname}}</td>
                </tr>
                <tr>
                    <td>Contact:</td>
                    <td>{{$contactnumber}}</td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Confirm Delete"></td>
                </tr>
        </table>
    </form>

</body>
</html>
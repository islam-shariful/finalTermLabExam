<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <h1>Edit Page</h1>
    <form method="post">
    @csrf
        <table>
                <tr>
                    <td>User Name</td>
                    <td><input type="text" name="username" value="{{$username}}"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="text" name="password" value="{{$password}}"></td>
                </tr>
                <tr>
                    <td>Type</td>
                    <td><input type="text" name="type" value="{{$type}}"></td>
                </tr>
                <tr>
                    <td>Full Name</td>
                    <td><input type="text" name="name" value="{{$employeename}}"></td>
                </tr>
                <tr>
                    <td>Company Name</td>
                    <td><input type="text" name="companyname" value="{{$companyname}}"></td>
                </tr>
                <tr>
                    <td>Contact Number</td>
                    <td><input type="text" name="contactnumber" value="{{$contactnumber}}"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Update"></td>
                </tr>
        </table>
    </form>

</body>
</html>
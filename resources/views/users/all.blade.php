<!DOCTYPE html>
<html>

<head>
    <title>users</title>
</head>

<body>
    @foreach ($userss as $user)
        <table border="1">
            <tr>
                <td>User</td>
                <td></td>
                <td>Profile</td>
                <td></td>
            </tr>
            <tr>
                <td>ID</td>
                <td>{{ $user->id }}</td>
                <td>Name</td>
                <td>{{ $profiles->name }}</td>
            </tr>
            <tr>
                <td>Login</td>
                <td>{{ $user->login }}</td>
                <td>Surname</td>
                <td>{{ $profiles->surname }}</td>
            </tr>
            <tr>
                <td>Password</td>
                <td>{{ $user->password }}</td>
                <td>Email</td>
                <td>{{ $profiles->email }}</td>
            </tr>
    @endforeach
        <br>
    </table>
</body>

</html>
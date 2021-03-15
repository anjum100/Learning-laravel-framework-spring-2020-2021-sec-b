@extends('layout/m<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

</head>
<body>

<h1>Client Management System</h1>


    <h1>Create New Account</h1>

    <h3>Alrady registered? Click Login </h3>
    <h3><a href="/login"  >Login</a></h3>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>EMAIL</td>
            <td>PASSWORD</td>
            
        </tr>

        <?php for($i=0; $i < count($profileView); $i++) {?>
        <tr>
            <td><?= $profileView[$i]['id'] ?></td>
            <td><?= $profileView[$i]['name'] ?></td>
            <td><?= $profileView[$i]['email'] ?></td>
            <td><?= $profileView[$i]['password'] ?></td>
            
            
        </tr>
      <?php}?>
    </table>
</body>
</html>
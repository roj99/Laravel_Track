<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>The Students</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th>Math</th>
        <th>Php</th>
        <th>English</th>
    </tr>
    @foreach($students as $student)
        <tr>
            <td>{{ $student['student_id'] }}</td>
            <td>{{ $student['first_name'] }}</td>
            <td>{{ $student['last_name'] }}</td>
            <td>{{ $student['age'] }}</td>
            <td>{{ $student['subjects']['Math'] }}</td>
            <td>{{ $student['subjects']['Php'] }}</td>
            <td>{{ $student['subjects']['English'] }}</td>
        </tr>
    @endforeach
</table>
</body>
</html>


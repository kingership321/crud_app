<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Basic Table</h2>
    <a class="btn btn-primary btn-sm " href="/student" role="button">Add new </a>
   
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th colspan="2">action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($student as $stud)
      <tr>
        <td>{{ $stud->id }}</td>
        <td>{{$stud->first_name}}</td>
        <td>{{$stud->second_name}}</td>
        <td>
            <a class="btn btn-primary btn-sm " href="#" role="button"> edit</a>
            <a class="btn btn-danger btn-sm " href="#" role="button"> delete</a>

        </td>
      </tr>
    @endforeach

      
    </tbody>
  </table>


</div>

</body>
</html>

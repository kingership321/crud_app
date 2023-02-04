<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page After Register</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid !direction !spacing">
        <h1>Registered User Table</h1>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <a class="btn btn-primary btn-sm " href="/newregister" role="button">Add New User</a>
        <a class="btn btn-primary btn-sm " href="/deletedfilespage" role="button">Show deleted files</a>
    </div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">S.N.</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            
            <th colspan="2" scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($regus as $regtab)
        <tr>
            <td>{{ $loop -> index + 1}}</td>
            <td>{{ $regtab -> email }}</td>
            <td>{{ $regtab -> phone }}</td>
            <td>{{ $regtab -> address }}</td>
            <td>
            <a class="btn btn-primary btn-sm " href="/newregedit/{{$regtab->id}}" role="button"> edit</a>
            <a class="btn btn-danger btn-sm " href="/newregdelete/{{$regtab->id}}" role="button">Recycle Bin</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


</body>
</html>
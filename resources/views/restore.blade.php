<h1>Here we keep the deleted data.</h1>

<a class="btn btn-primary btn-sm " href="/regrestoreAll" role="button">Restore All</a>




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
    @foreach($model as $mod)
        <tr>
            <td>{{ $loop -> index + 1}}</td>
            <td>{{ $mod -> email }}</td>
            <td>{{ $mod -> phone }}</td>
            <td>{{ $mod -> address }}</td>
            <td>
            <a class="btn btn-primary btn-sm " href="/regrestore/{{$mod->id}}" role="button"> Restore</a>
            <a class="btn btn-danger btn-sm " href="/deletedata/{{$mod->id}}" role="button"> Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

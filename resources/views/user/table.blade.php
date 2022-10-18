@section('content')

<div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Phone</th>
                <th>First Name</th>
                <th>Last Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($v_user as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->firstname}}</td>
                <td>{{$user->lastname}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@stop
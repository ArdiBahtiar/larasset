@extends('layouts.app');


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading h3">User List</div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Title</th>
                                <th>email</th>
                                <th>Phone</th>
                                {{-- <th>Department</th> --}}
                                <th>Assets</th>
                            </tr>
        
                            @if(! count($users))
                                <tr>
                                    <td colspan="3">Belom ada User</td>
                                </tr>
                            @endif
        
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td><a class="link-underline link-underline-opacity-0" href="{{ url('users/' . $user->id . '/profile' ) }}">{{ $user->name }}</a></td>
                                    <td>{{ $user->title }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                    {{-- <td>{{ $assets[$user->name]->count() }}</td> --}}
                                    <td>{{ count($assets[$user->name]) }}</td>
                                    {{-- @foreach($assets[$user->name] as $asset)
                                    <td>{{ $asset->count() }}</td>
                                    @endforeach --}}
                                    {{-- <td>{{ $user->department }}</td>
                                    <td>{{ $user->assets }}</td> --}}
                                </tr>
                            @endforeach
                        </table>
                    </div>             
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">

                <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-2">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Asset List</li>
                    </ol>
                </nav>

                <div class="panel-heading mb-2 h3">ASSET LIST</div>
                <div class="panel-body">
                    <div class="table-responsive">

                        @can('isAdmin')
                        <a class="btn btn-info mb-2 mt-2" href="{{ url('assets/create') }}">{{ __('Input Asset') }}</a>
                        @endcan


                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Serial Number</th>
                                <th>Status</th>
                                <th>Pengguna</th>
                                @can('isAdmin')
                                <th>Actions</th>
                                @endcan
                            </tr>

                                @if(! count($assets))
                                <tr>
                                    <td colspan="3">Belum ada Asset</td>
                                </tr>
                                @endif

                            @foreach($assets as $asset)
                                <tr>
                                    <td>{{ $asset->id }}</td>
                                    <td>{{ $asset->Name }}</td>
                                    <td>{{ $asset->Serial_Number }}</td>
                                    <td>{{ $asset->Status }}</td>
                                    <td>{{ $asset->Checked_Out_to }}</td>

                                    @can('isAdmin')
                                    <td>
                                        <a class="btn btn-success" href="{{ url('assets/'.$asset->id.'/edit') }}">Edit</a>
                                        <a class="btn btn-danger" href="{{ url('assets/'.$asset->id.'/delete') }}">Delete</a>
                                    </td>
                                    @endcan
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
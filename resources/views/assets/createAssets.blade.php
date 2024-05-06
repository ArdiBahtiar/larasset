@extends('layouts.app');

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading h3 mb-3">Input new Asset</div>
                <div class="panel-body">

                    <form action="{{ url('/assets') }}" role="form" method="POST">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="control-label">Asset Name</label>
                            <input type="text" name="Name" class="form-control" required>
                        </div>

                        <div class="form-group my-2">
                            <label for="control-label">Serial Number</label>
                            <input type="text" name="Serial_Number" class="form-control" required>
                        </div>

                        <input type="hidden" name="Status" value="Ready">

                        {{-- <div class="form-group mb-3">
                            <label for="control-label">Checked out to</label>
                            <input type="text" name="Checked_Out_to" class="form-control">
                        </div> --}}

                        <div class="form-group mb-3">
                            <label for="control-label" class="mt-2">Checked Out to</label>
                            <select name="Checked_Out_to" id="Checked_Out_to" required focus>
                                @foreach($users as $user)
                                <option value="{{ $user->name }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Add Assets</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">EDIT ASSET</div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="{{ url('assets/' . $asset->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('put') }}

                            <div class="form-group my-2">
                                <label for="control-label">Name</label>
                                <input type="text" name="Name" class="form-control" value="{{ $asset->name }}">
                            </div>
                            
                            {{-- <div class="form-group">
                                <label for="control-label">Checked out to</label>
                                <input type="text" name="Checked_Out_to" value="{{ $asset->name }}" class="form-control">
                            </div> --}}
                            
                            <div class="form-group">
                                <label for="control-label" class="mt-2">Checked Out to</label>
                                <br>
                                    <select name="Checked_Out_to" id="Checked_Out_to" required focus>
                                        @foreach ($users as $user)
                                        <option value="{{ $user->name }}" selected>{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                            </div>

                            <div class="form-group mb-3 mt-3">
                                <label for="control-label">Status</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="Status" value="Ready">Ready
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="Status" value="Pending">Pending
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="Status" value="Deployed">Deployed
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Update Asset</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
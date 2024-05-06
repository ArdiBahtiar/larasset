@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">EDIT USER</div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="{{ url('users/' . $user->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('put') }}

                            <div class="form-group my-2">
                                <label for="control-label">Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
                            </div>

                            <div class="form-group my-2">
                                <label for="control-label">email</label>
                                <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
                            </div>
                            
                            {{-- <div class="form-group">
                                <label for="control-label" class="mt-2">Department</label>
                                <br>
                                    <select name="department" id="department" required focus>
                                        @foreach ($enum_values as $value)
                                        <option value="{{ $value }}" selected>{{ $value }}</option>
                                        @endforeach
                                    </select>
                            </div> --}}

                            <div class="form-group mb-3 mt-3">
                                <label for="control-label">Department</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="department" value="Sales">  Sales
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="department" value="IT">  IT
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="department" value="Design">  Design
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Update User Data</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
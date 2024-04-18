@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">Add User</div>
                    <div class="panel-body">
                        <form role="form" action="{{ url('/users') }}" method="POST">
                            {{csrf_field}}
                        
                            <div class="form-group">
                                <label for="control-label">Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="control-label">title</label>
                                <input type="text" name="title" class="form-control" required>
                            </div>

                            <div class="form-control">
                                <label for="control-label">email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>

                            <div class="form-control">
                                <label for="control-label">Phone Number</label>
                                <input type="tel" name="phone" class="form-control" required>
                            </div>

                            <div class="form-control">
                                <label for="control-label">Department</label>
                                <input type="text" name="department" class="form-control" required>
                            </div>

                            <div class="form-control">
                                <label for="control-label">Input Password</label>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
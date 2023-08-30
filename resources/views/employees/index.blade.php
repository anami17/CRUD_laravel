@extends ('layout')

@section ('content')
<div class ="container mt-5">
    <div>
        @if(session()->has('message'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">  
        {{session()->get('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

        </div>
        @endif
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>User Details
                            <a href="/employee/create" class="btn btn-primary float-end">Add User</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Department</th>
                                    <th>Position</th>
                                    <th>Address</th>
                                    <th>Edit</th>
                                    <th>Delete</th>  
                                    
                                </tr>
                            </thead>
                            <tbody>
                               @foreach($employees as $employee)
                                    <tr>
                                        <td>{{$employee->name}}</td>
                                        <td>{{$employee->department}}</td>
                                        <td>{{$employee->position}}</td>
                                        <td>{{$employee->address}}</td>
                                        <td>
                                        <a href="{{route('employee.edit', ['employee' => $employee])}}" class="btn btn-success">Edit</a>
                                        </td>
                                        <td>
                                            <form method="POST" action="{{route('employee.destroy', ['employee' => $employee])}}">
                                                @csrf
                                                @method('delete')
                                            <button class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
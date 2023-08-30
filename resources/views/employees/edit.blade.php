@extends ('layout')

@section ('content')
<div class="container mt-5">
    <div class="row"
        <div class="col-md-12">
            <div class="card">
                <div class="card header">
                    <h4>User App
                        <a href="/employee" class="btn btn-danger float-end">BACK</a>
                    </h4>  
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('employee.update', [$employee->id])}}">
                        @csrf
                        @method('put')
                    
                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="{{$employee->name}}">
                        @error('name')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Department</label>
                        <input type="text" name="department" class="form-control" value="{{$employee->department}}">
                        @error('department')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Position</label>
                        <input type="text" name="position" class="form-control" value="{{$employee->position}}">
                        @error('position')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control" value="{{$employee->address}}">
                        @error('address')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button type="submit" class ="btn btn-primary">Update</button>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
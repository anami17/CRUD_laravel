<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>ICON</title>
</head>
<body>
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
                    <form method="POST" action="{{route('employee.store')}}">
                        @csrf
                        @method('post')
                    
                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="{{old('name')}}">
                        @error('name')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Department</label>
                        <input type="text" name="department" class="form-control" value="{{old('department')}}">
                        @error('department')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Position</label>
                        <input type="text" name="position" class="form-control" value="{{old('position')}}">
                        @error('position')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control" value="{{old('address')}}">
                        @error('address')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="saveUser" class ="btn btn-primary">Save User</button>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
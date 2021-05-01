<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
    <!-- ALL CSS FILES  -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/responsive.css') }}">
</head>
<body>


                <div class="wrap ">
                    @include('validation')
                    <a class="btn btn-primary btn-sm" href="{{ route('student.index') }}">Back</a>
                    <div class="card shadow ">
                        <div class="card-body">
                            <h2>Edit data {{ $edit_data -> name }}</h2>
                            <form action="{{ route('student.update',$edit_data -> id ) }}" method="POST" >
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input name="name" class="form-control" value="{{ $edit_data -> name }}" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input name="email" class="form-control" value="{{ $edit_data -> email }}" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="">Cell</label>
                                    <input name="cell" class="form-control" value="{{ $edit_data -> cell }}" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input name="uname" class="form-control" value="{{ $edit_data -> uname }}" type="text">
                                </div>

                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" value="Update">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>



    <!-- JS FILES  -->
    <script src="{{ asset('public/assets/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset ('public/assets/js/popper.min.js"')}}"></script>
    <script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/custom.js')}}"></script>
</body>
</html>

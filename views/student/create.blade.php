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



	<div class="wrap">
        <a class="btn btn-primary btn-sm"   href="{{ route('staff.index') }}">Back</a>
		<div class="card shadow">
			<div class="card-body">
				<h2>Add New Staff</h2>


                @include('validation')

				<form action="{{ route ('student.store') }}" method="POST" >
                    @csrf
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" value="{{ old('name') }}" type="text">
                        @if( $errors -> has('name') )
                            <p>{{ $errors -> first('name') }}</p>
                            @endif
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" value="{{ old('email') }}" type="text">
                        @if( $errors -> has('email') )
                            <p>{{ $errors -> first('email') }}</p>
                        @endif
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input name="uname" class="form-control" type="text">
					</div>

                    <div class="form-group">
                           <input name="btn btn-primary" type="submit" value="Add">
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

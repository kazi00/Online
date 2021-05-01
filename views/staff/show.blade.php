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
        <a class="btn btn-primary btn-sm"   href="{{ route('staff.index') }}">Back</a>
		<div class="card shadow ">
			<div class="card-body">
                <img src="/{{ URL::to('') }}/public/media/staff/{{ $staff -> photo }}" alt="">
                <table class="table table-striped">
                    <tr>
                        <td>Name</td>
                        <td>{{ $staff ->name }}</td>
                    </tr>

                    <tr>
                        <td>Email</td>
                        <td>{{ $staff -> email }}</td>
                    </tr>

                    <tr>
                        <td>Cell</td>
                        <td>{{ $staff -> cell }}</td>
                    </tr>

                    <tr>
                        <td>Username</td>
                        <td>{{ $staff -> uname }}</td>
                    </tr>

                    <tr>
                        <td>Age</td>
                        <td>{{ $staff -> age }}</td>
                    </tr>
                </table>

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

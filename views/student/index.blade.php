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

	<div class="wrap-table ">
        @include('validation')
        <a class="btn btn-primary btn-sm"   href="{{ route('student.create') }}">Add New Student</a>
		<div class="card shadow ">
			<div class="card-body">
				<h2>All Staff</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
                            <th>Age</th>
                            <th>Username</th>
                            <th>Time</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

                    @foreach( $all_student as $stu )

						<tr>
							<td>{{$loop ->index+1 }}</td>
							<td>{{ $stu -> name }}</td>
							<td>{{ $stu -> email }}</td>
							<td>{{ $stu -> cell }}</td>
                            <td>{{ $stu -> age }} </td>
                            <td>{{ $stu -> uname }}</td>
                            <td>{{ date('F d,Y',strtotime($stu -> created_at))}}</td>
							<td><img src="public/media/staff/{{ $stu -> photo }}" alt=""></td>
							<td>
								<a class="btn btn-sm btn-info" href="{{ route('student.show', $stu -> id )}}">View</a>
								<a class="btn btn-sm btn-warning" href="{{ route('student.edit', $stu -> id ) }}">Edit</a>

                                <form style="display: inline" action="{{ route('student.destroy', $stu -> id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                 <button class="btn btn-sm btn-danger" > Delete </button>
                                </form>

							</td>
						</tr>
						@endforeach()

					</tbody>
				</table>
			</div>
		</div>
	</div>








	<!-- JS FILES  -->
	<script src="{{ asset('public/assets/js/jquery-3.4.1.min.js') }}"></script>
	<script src="{{ asset ('public/assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('public/assets/js/custom.js') }}"></script>
</body>
</html>

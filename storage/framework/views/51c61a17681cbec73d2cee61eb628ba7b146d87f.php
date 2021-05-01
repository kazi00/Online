<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="<?php echo e(asset('public/assets/css/bootstrap.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('public/assets/css/style.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('public/assets/css/responsive.css')); ?>">
</head>
<body>

	<div class="wrap-table ">
        <?php echo $__env->make('validation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <a class="btn btn-primary btn-sm"   href="<?php echo e(route('staff.create')); ?>">Add New Staff</a>
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

                    <?php $__currentLoopData = $all_staff; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $staff): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

						<tr>
							<td><?php echo e($loop ->index+1); ?></td>
							<td><?php echo e($staff -> name); ?></td>
							<td><?php echo e($staff -> email); ?></td>
							<td><?php echo e($staff -> cell); ?></td>
                            <td><?php echo e($staff -> age); ?> </td>
                            <td><?php echo e($staff -> uname); ?></td>
                            <td><?php echo e(date('F d,Y',strtotime($staff -> created_at))); ?></td>
                            <td><?php echo e($staff -> photo); ?></td>
                            <td><?php echo e($staff -> action); ?></td>

							<td><img src="public/media/staff/<?php echo e($staff -> photo); ?>" alt=""></td>
							<td>
								<a class="btn btn-sm btn-info" href="<?php echo e(route('staff.show', $staff -> id )); ?>">View</a>
								<a class="btn btn-sm btn-warning" href="<?php echo e(route('staff.edit', $staff -> id )); ?>">Edit</a>

                                <form style="display: inline" action="<?php echo e(route('staff.delete', $staff -> id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                 <button class="btn btn-sm btn-danger" > Delete </button>
                                </form>

							</td>
						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					</tbody>
				</table>
			</div>
		</div>
	</div>








	<!-- JS FILES  -->
	<script src="<?php echo e(asset('public/assets/js/jquery-3.4.1.min.js')); ?>"></script>
	<script src="<?php echo e(asset ('public/assets/js/popper.min.js')); ?>"></script>
	<script src="<?php echo e(asset('public/assets/js/bootstrap.min.js')); ?>"></script>
	<script src="<?php echo e(asset('public/assets/js/custom.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\online\resources\views/staff/index.blade.php ENDPATH**/ ?>
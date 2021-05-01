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



	<div class="wrap">
        <a class="btn btn-primary btn-sm"   href="<?php echo e(route('staff.index')); ?>">Back</a>
		<div class="card shadow">
			<div class="card-body">
				<h2>Add New Staff</h2>

                <?php echo $__env->make('validation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

				<form action="<?php echo e(route ('staff.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" value="<?php echo e(old('name')); ?>" type="text">
                        <?php if( $errors -> has('name') ): ?>
                            <p><?php echo e($errors -> first('name')); ?></p>
                            <?php endif; ?>
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" value="<?php echo e(old('email')); ?>" type="text">
                        <?php if( $errors -> has('email') ): ?>
                            <p><?php echo e($errors -> first('email')); ?></p>
                        <?php endif; ?>
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
                       	<label for="">Password</label>
                        <input name="password" class="form-control" type="password">
                       	</div>
                    <div class="form-group">
                        <label for="">Photo</label>
                       	<input name="photo" class="form-control" type="file">
                       	</div>
                    <div class="form-group">
                        <label for="">Age</label>
                         <input name="age" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                           <input name="btn btn-primary" type="submit" value="Add">
                           	</div>
				</form>
			</div>
		</div>
	</div>








    <!-- JS FILES  -->
    <script src="<?php echo e(asset('public/assets/js/jquery-3.4.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset ('public/assets/js/popper.min.js"')); ?>"></script>
    <script src="<?php echo e(asset('public/assets/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/assets/js/custom.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\online\resources\views/staff/create.blade.php ENDPATH**/ ?>
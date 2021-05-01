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



	<div class="wrap ">
        <a class="btn btn-primary btn-sm"   href="<?php echo e(route('staff.index')); ?>">Back</a>
		<div class="card shadow ">
			<div class="card-body">
                <img src="/<?php echo e(URL::to('')); ?>/public/media/staff/<?php echo e($staff -> photo); ?>" alt="">
                <table class="table table-striped">
                    <tr>
                        <td>Name</td>
                        <td><?php echo e($staff ->name); ?></td>
                    </tr>

                    <tr>
                        <td>Email</td>
                        <td><?php echo e($staff -> email); ?></td>
                    </tr>

                    <tr>
                        <td>Cell</td>
                        <td><?php echo e($staff -> cell); ?></td>
                    </tr>

                    <tr>
                        <td>Username</td>
                        <td><?php echo e($staff -> uname); ?></td>
                    </tr>

                    <tr>
                        <td>Age</td>
                        <td><?php echo e($staff -> age); ?></td>
                    </tr>
                </table>

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
<?php /**PATH C:\xampp\htdocs\online\resources\views/staff/show.blade.php ENDPATH**/ ?>
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
                    <?php echo $__env->make('validation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <a class="btn btn-primary btn-sm" href="<?php echo e(route('staff.index')); ?>">Back</a>
                    <div class="card shadow ">
                        <div class="card-body">
                            <h2>Edit data <?php echo e($edit_data -> name); ?></h2>
                            <form action="<?php echo e(route('staff.update',$edit_data -> id )); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input name="name" class="form-control" value="<?php echo e($edit_data -> name); ?>" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input name="email" class="form-control" value="<?php echo e($edit_data -> email); ?>" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="">Cell</label>
                                    <input name="cell" class="form-control" value="<?php echo e($edit_data -> cell); ?>" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input name="uname" class="form-control" value="<?php echo e($edit_data -> uname); ?>" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="">Age</label>
                                    <input name="age" class="form-control" value="<?php echo e($edit_data -> age); ?>" type="text">
                                </div>


                                <div class="form-group">
                                    <img style="width: 300px;" src="<?php echo e(url('')); ?>/public/media/staff/<?php echo e($edit_data -> photo); ?>" alt="">
                                    <label for="">Upload a photo</label>
                                    <input name="old_photo" class="form-control" value="<?php echo e($edit_data -> photo); ?>" type="hidden">
                                    <input name="new_photo" class="form-control" type="file">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" value="Update">
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
<?php /**PATH C:\xampp\htdocs\online\resources\views/staff/edit.blade.php ENDPATH**/ ?>
<?php if( $errors -> any()): ?>
    <p class="alert alert-danger"><?php echo e($errors -> first()); ?><button class="close" data-dismiss="alert">&times;></button></p>
<?php endif; ?>

<?php if( Session::has('success')): ?>
    <p class="alert alert-success"><?php echo e(Session::get('success')); ?><button class="close" data-dismiss="alert">&times;></button></p>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\online\resources\views/validation.blade.php ENDPATH**/ ?>
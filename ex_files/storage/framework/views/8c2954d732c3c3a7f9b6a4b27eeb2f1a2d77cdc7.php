<!-- <form action="<?php echo e(route('users.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <label for="password_confirmation">Confirm Password:</label>
    <input type="password" id="password_confirmation" name="password_confirmation" required>
    <button type="submit">Create user</button>
</form> -->


<form action="<?php echo e(route('users.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?php echo e(old('name')); ?>" required>
    <?php if($errors->has('name')): ?>
        <span class="error"><?php echo e($errors->first('name')); ?></span>
    <?php endif; ?>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?php echo e(old('email')); ?>" required>
    <?php if($errors->has('email')): ?>
        <span class="error"><?php echo e($errors->first('email')); ?></span>
    <?php endif; ?>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <?php if($errors->has('password')): ?>
        <span class="error"><?php echo e($errors->first('password')); ?></span>
    <?php endif; ?>
    <label for="password_confirmation">Confirm Password:</label>
    <input type="password" id="password_confirmation" name="password_confirmation" required>
    <?php if($errors->has('password_confirmation')): ?>
        <span class="error"><?php echo e($errors->first('password_confirmation')); ?></span>
    <?php endif; ?>
    <button type="submit">Create user</button>
</form>
<?php /**PATH C:\laragon\www\laravel_8_basic\resources\views/users/create.blade.php ENDPATH**/ ?>
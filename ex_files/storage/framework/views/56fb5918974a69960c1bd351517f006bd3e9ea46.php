<!-- <form action="<?php echo e(route('users.update', $user->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?php echo e($user->name); ?>" required>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?php echo e($user->email); ?>" required>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    <label for="password_confirmation">Confirm Password:</label>
<input type="password" id="password_confirmation" name="password_confirmation">
<button type="submit">Update user</button>

</form> -->


<form action="<?php echo e(route('users.update', $user->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?php echo e(old('name') ?? $user->name); ?>" required>
    <?php if($errors->has('name')): ?>
        <span class="error"><?php echo e($errors->first('name')); ?></span>
    <?php endif; ?>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?php echo e(old('email') ?? $user->email); ?>" required>
    <?php if($errors->has('email')): ?>
        <span class="error"><?php echo e($errors->first('email')); ?></span>
    <?php endif; ?>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    <?php if($errors->has('password')): ?>
        <span class="error"><?php echo e($errors->first('password')); ?></span>

        <?php endif; ?>
    <label for="password_confirmation">Confirm Password:</label>
    <input type="password" id="password_confirmation" name="password_confirmation">
    <?php if($errors->has('password_confirmation')): ?>
        <span class="error"><?php echo e($errors->first('password_confirmation')); ?></span>
    <?php endif; ?>
    <button type="submit">Update user</button>
</form>



<form action="<?php echo e(route('users.destroy', $user->id)); ?>" method="POST" style="display: inline-block;">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <button type="submit">Delete</button>
</form>
<a href="<?php echo e(route('users.index')); ?>">Back</a>
<?php /**PATH C:\laragon\www\laravel_8_basic\resources\views/users/edit.blade.php ENDPATH**/ ?>
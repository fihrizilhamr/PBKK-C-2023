<!DOCTYPE html>
<html>
<head>
    <title>Formulir</title>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/form.css')); ?>">
</head>
<body>
    <?php if(session('success')): ?>
        <div class="alert">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
    <div class="result">
        <h1>Hasil</h1>
        <hr>
        <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a>
            <?php if($key == 'Float'): ?>
                <?php echo e($key); ?> = <?php echo e(number_format(floatval($result), 2)); ?> <br>
            <?php else: ?>
                <?php echo e($key); ?> = <?php echo e($result); ?> <br>
                <?php if($key == 'Image'): ?>
                    <img src="<?php echo e(asset('storage/images/' . $result)); ?>">
                <?php endif; ?>
            <?php endif; ?>            
            </a>
            
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</body>
</html>
<?php /**PATH C:\laragon\www\formPBKK\resources\views/result.blade.php ENDPATH**/ ?>
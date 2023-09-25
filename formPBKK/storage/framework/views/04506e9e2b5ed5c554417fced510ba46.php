<!DOCTYPE html>
<html>
<head>
    <title>Formulir</title>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/form.css')); ?>">
</head>
<body>
    <form action="<?php echo e(route('form')); ?>" method="POST" enctype="multipart/form-data">
        <h1>Formulir</h1>
        <?php echo csrf_field(); ?>
        <label for="Nama">Nama Lengkap:</label>
        <input type="text" name="Nama" required>
        <br>

        <label for="TL">Tanggal Lahir:</label>
        <input type="date" name="TL" required>
        <br>

        <label for="Alamat">Alamat:</label>
        <textarea name="Alamat" required></textarea>
        <br>

        <label for="Email">Email:</label>
        <input type="email" name="Email" required>
        <br>

        <label for="Password">Password:</label>
        <input type="password" name="Password" required>
        <br>

        <label for="Image">Gambar (maksimal 2 MB):</label>
        <input type="file" name="Image" accept=".png, .jpg, .jpeg" required>
        <br>

        <label for="Float">Field Double (2,50 s.d. 99,99):</label>
        <input type="number" name="Float" step="0.01" required>
        <br>

        <button type="submit">Submit</button>
        <?php if($errors->any()): ?>
        <!-- <h2>Input Error: </h2> -->
        <div class="alert">
            <ul>
                <h3>Input Error</h3>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <?php endif; ?>
    </form>

</body>
</html>
<?php /**PATH C:\laragon\www\formPBKK\resources\views/form.blade.php ENDPATH**/ ?>
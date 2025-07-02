

<?php $__env->startSection('content'); ?>
    <h1>Tambah Mahasiswa</h1>

    <form action="<?php echo e(route('mahasiswa.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <p>
            <label>Nama:</label><br>
            <input type="text" name="nama" required>
        </p>
        <p>
            <label>NIM:</label><br>
            <input type="text" name="nim" required>
        </p>
        <p>
            <label>Jurusan:</label><br>
            <input type="text" name="jurusan" required>
        </p>
        <p>
            <label>Email:</label><br>
            <input type="email" name="email" required>
        </p>
        <p>
            <button type="submit">Simpan</button>
        </p>
    </form>

    <p>
        <a href="<?php echo e(route('mahasiswa.index')); ?>">Kembali</a>
    </p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\SahraPutri\Sahra_12D2\crud-mahasiswa\resources\views/mahasiswa/create.blade.php ENDPATH**/ ?>
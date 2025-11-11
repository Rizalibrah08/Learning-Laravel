

<?php $__env->startSection('title', 'Input Jabatan'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Tambah Jabatan</h2>
    <form action="<?php echo e(route('jbt_store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label>Nama Jabatan</label>
            <input type="text" name="nama_jabatan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Gaji Pokok</label>
            <input type="number" name="gaji_pokok" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="<?php echo e(route('jbt')); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.dashboard.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\rijal\Smester5\PWL\belajar_laravel\resources\views/backend/jabatan/create.blade.php ENDPATH**/ ?>
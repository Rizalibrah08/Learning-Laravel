

<?php $__env->startSection('title', 'Edit Jabatan'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h4 class="fw-bold mb-3">Edit Data Jabatan</h4>

    <form action="<?php echo e(route('jbt_update', $jabatan->jabatan_id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="mb-3">
            <label for="nama_jabatan" class="form-label">Nama Jabatan</label>
            <input type="text" name="nama_jabatan" id="nama_jabatan" value="<?php echo e(old('nama_jabatan', $jabatan->nama_jabatan)); ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="gaji_pokok" class="form-label">Gaji Pokok</label>
            <input type="number" name="gaji_pokok" id="gaji_pokok" value="<?php echo e(old('gaji_pokok', $jabatan->gaji_pokok)); ?>" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="<?php echo e(route('jbt')); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.dashboard.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\rijal\Smester5\PWL\belajar_laravel\resources\views/backend/jabatan/edit.blade.php ENDPATH**/ ?>
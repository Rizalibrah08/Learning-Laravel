

<?php $__env->startSection('title', 'Edit Pegawai'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h4 class="fw-bold mb-3">Edit Data Pegawai</h4>

    <form action="<?php echo e(route('emp_update', $employee->id_emp)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" id="nama" value="<?php echo e(old('nama', $employee->nama)); ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" value="<?php echo e(old('email', $employee->email)); ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control"><?php echo e(old('alamat', $employee->alamat)); ?></textarea>
        </div>

        <div class="mb-3">
            <label for="jabatan_id" class="form-label">Jabatan ID</label>
            <input type="text" name="jabatan_id" id="jabatan_id" value="<?php echo e(old('jabatan_id', $employee->jabatan_id)); ?>" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="<?php echo e(route('emp')); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.dashboard.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\rijal\Smester5\PWL\belajar_laravel\resources\views/backend/employees/edit.blade.php ENDPATH**/ ?>
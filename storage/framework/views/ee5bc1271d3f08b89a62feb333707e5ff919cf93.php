

<?php $__env->startSection('title', 'Edit Pegawai'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h4 class="fw-bold mb-3">Edit Data Pegawai</h4>

    <form action="<?php echo e(route('emp_update', $employee->id_emp)); ?>" method="POST" enctype="multipart/form-data">
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

        
        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" name="foto" id="foto" class="form-control" accept="image/*">
            <small class="text-muted">Kosongkan jika tidak ingin mengubah foto.</small>

            <?php if($employee->img): ?>
                <div class="mt-2">
                    <img src="<?php echo e(asset('images/' . $employee->img)); ?>" alt="Foto Pegawai" width="120" class="rounded shadow">
                </div>
            <?php endif; ?>

            <?php $__errorArgs = ['foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger small mt-1"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="<?php echo e(route('emp')); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.dashboard.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Rijal ibrahim\HUAAA\LARAVEL ACUH\resources\views/backend/employees/edit.blade.php ENDPATH**/ ?>
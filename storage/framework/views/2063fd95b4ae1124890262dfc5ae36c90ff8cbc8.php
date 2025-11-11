

<?php $__env->startSection('title', 'Input Pegawai'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Tambah Pegawai</h2>
    <form action="<?php echo e(route('emp_store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label>Jabatan ID</label>
            <input type="text" name="jabatan_id" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="<?php echo e(route('emp')); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.dashboard.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Rijal\belajar_laravel\resources\views/backend/employees/create.blade.php ENDPATH**/ ?>
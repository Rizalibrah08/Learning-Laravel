

<?php $__env->startSection('title', 'Data Jabatan'); ?>

<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="fw-bold">Data Jabatan</h4>
        <a href="<?php echo e(route('jbt_create')); ?>" class="btn btn-primary btn-sm">+ Tambah Jabatan</a>
    </div>

    
    <form action="<?php echo e(route('jbt')); ?>" method="GET" class="mb-3 d-flex" role="search">
    <input type="text" name="search" class="form-control me-2" placeholder="Cari jabatan..." value="<?php echo e(request('search')); ?>">
    <button type="submit" class="btn btn-outline-primary">Cari</button>
    </form>

    
    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <div class="card border-0 shadow-sm rounded-3">
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Nama Jabatan</th>
                        <th>Gaji Pokok</th>
                        <th width="180">Aksi</th>
                    </tr>
                </thead>
                <tbody>
    <?php $__empty_1 = true; $__currentLoopData = $jbt; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr>
            <td><?php echo e($row->jabatan_id); ?></td>
            <td><?php echo e($row->nama_jabatan); ?></td>
            <td><?php echo e($row->gaji_pokok); ?></td>
            <td>
                <a href="<?php echo e(route('jbt_edit', $row->jabatan_id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                <form action="<?php echo e(route('jbt_delete',$row->jabatan_id)); ?>" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">Hapus</button>
                </form>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr>
            <td colspan="6" class="text-center">Belum ada data jabatan</td>
        </tr>
    <?php endif; ?>
</tbody>

            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.dashboard.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Rijal ibrahim\HUAAA\LARAVEL ACUH\resources\views/backend/jabatan/index.blade.php ENDPATH**/ ?>
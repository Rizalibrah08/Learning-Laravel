

<?php $__env->startSection('title', 'Data Pegawai'); ?>

<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="fw-bold">Data Pegawai</h4>
        <a href="<?php echo e(route('emp_create')); ?>" class="btn btn-primary btn-sm">+ Tambah Pegawai</a>
    </div>

    
    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <div class="card border-0 shadow-sm rounded-3">
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Jabatan</th>
                        <th width="180">Aksi</th>
                    </tr>
                </thead>
                <tbody>
    <?php $__empty_1 = true; $__currentLoopData = $emp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr>
            <td><?php echo e($row->id_emp); ?></td>
            <td><?php echo e($row->nama); ?></td>
            <td><?php echo e($row->email); ?></td>
            <td><?php echo e($row->alamat); ?></td>
            <td><?php echo e($row->jabatan_id); ?></td>
            <td>
                <a href="<?php echo e(route('emp_edit', $row->id_emp)); ?>" class="btn btn-warning btn-sm">Edit</a>
                <form action="<?php echo e(route('emp_delete',$row->id_emp)); ?>" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">Hapus</button>
                </form>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr>
            <td colspan="6" class="text-center">Belum ada data pegawai</td>
        </tr>
    <?php endif; ?>
</tbody>

            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.dashboard.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\rijal\Smester5\PWL\belajar_laravel\resources\views/backend/employees/index.blade.php ENDPATH**/ ?>
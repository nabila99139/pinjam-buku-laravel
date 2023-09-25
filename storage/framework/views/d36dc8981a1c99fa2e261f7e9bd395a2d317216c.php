

<?php $__env->startSection('content'); ?>
<div id='peminjam'>
    <h2>Data Peminjam</h2>
    <?php if(!empty($peminjam)): ?>
        <ul>
            <?php $__currentLoopData = $peminjam; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($data); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php else: ?>
    <p>Data peminjam kosong.</p>
    <?php endif; ?>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sewa_buku_laravel\resources\views/peminjams/lihat_data_peminjam.blade.php ENDPATH**/ ?>
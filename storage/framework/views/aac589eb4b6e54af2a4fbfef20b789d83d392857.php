
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h4>Edit Data Peminjam</h4>
        <form method="POST" action="<?php echo e(route('data_peminjam.update', $peminjam->id)); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label>Kode Peminjam</label>
                <input type="text" name="kode_peminjam" readonly class="form-control" value="<?php echo e($peminjam->kode_peminjam); ?>">
            </div>
            <div class="form-group">
                <label>Nama Peminjam</label>
                <input type="text" name="nama_peminjam" class="form-control" value="<?php echo e($peminjam->nama_peminjam); ?>">
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label><br>
                <select name="id_jenis_kelamin">
                    <option value="">Pilih Jenis Kelamin</option>
                    <?php $__currentLoopData = $list_jenis_kelamin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($key); ?>" <?php echo e($peminjam->id_jenis_kelamin == $key ? 'selected' : ''); ?>><?php echo e($value); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>

            </div>
            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control" value="<?php echo e($peminjam->tanggal_lahir); ?>">
            </div>
            <div class="form-group">
                <label>Alamat</label><br>
                <textarea name="alamat" id="" cols="148" rows="3"><?php echo e($peminjam->alamat); ?></textarea>
            </div>
            <div class="form-group">
                <label>Pekerjaan</label>
                <input type="text" name="pekerjaan" class="form-control" value="<?php echo e($peminjam->pekerjaan); ?>">
            </div>
            <div class="form-group">
                <label>Nomor Telepon</label>
                <input type="text" name="nomor_telepon" class="form-control" value="<?php echo e($peminjam->nomor_telepon); ?>">
            </div>
            <br>
            <div>
                <button type="submit">Simpan</button>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sewa_buku_laravel\sewa_buku_laravel\resources\views/data_peminjam/edit.blade.php ENDPATH**/ ?>
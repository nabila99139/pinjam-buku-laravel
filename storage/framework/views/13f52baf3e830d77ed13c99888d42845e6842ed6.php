
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h4>Data Peminjam</h4>
        <p align="right"><a href="<?php echo e(route('data_peminjam.create')); ?>" class="btn btn-primary">Tambah Data Peminjam</a></p>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Peminjam</th>
                    <th>Nama Peminjam</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Pekerjaan</th>
                    <th>Nomor Telepon</th>
                    <th>Edit</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $data_peminjam; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $peminjam): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                </tr>
                    <td><?php echo e($peminjam->id); ?></td>
                    <td><?php echo e($peminjam->kode_peminjam); ?></td>
                    <td><?php echo e($peminjam->nama_peminjam); ?></td>
                    <td><?php echo e($peminjam->jenis_kelamin['nama_jenis_kelamin']); ?></td>
                    <td><?php echo e($peminjam->tanggal_lahir); ?></td>
                    <td><?php echo e($peminjam->alamat); ?></td>
                    <td><?php echo e($peminjam->pekerjaan); ?></td>
                    <td><?php echo e(!empty($peminjam->telepon['nomor_telepon'])?
                            $peminjam->telepon['nomor_telepon'] : '-'); ?>

                    </td>
                    <td><a href="<?php echo e(route('data_peminjam.edit', $peminjam->id)); ?>" class="btn btn-warning btn-sm">Edit</a></td>
                    <td>
                        <form action="<?php echo e(route('data_peminjam.destroy', $peminjam->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <button class="btn btn-warning btn-sm" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <div class="pull-left">
            <strong>
                Jumlah Peminjam : <?php echo e($jumlah_peminjam); ?>

            </strong>
        </div>

    </div>
<?php $__env->stopSection(); ?>






<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sewa_buku_laravel\resources\views/data_peminjam/index.blade.php ENDPATH**/ ?>


<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Koperasi</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('koperasis.create')); ?>"> Create New koperasi</a>
            </div>
        </div>
    </div>
    
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>
     
    <table class="table table-bordered">
        <tr>
            <th>No Registrasi</th>
            <th>Nama Koperasi</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th>Email</th>
            <th>Jenis Produk</th>
            <th>Jumlah Anggota</th>
            <th width="280px">Action</th>
        </tr>
        <?php $__currentLoopData = $koperasis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $koperasi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td><img src="/images/<?php echo e($koperasi->image); ?>" width="100px"></td>
            <td><?php echo e($koperasi->no_registrasi); ?></td>
            <td><?php echo e($koperasi->nama_koperasi); ?></td>
            <td><?php echo e($koperasi->alamat_koperasi); ?></td>
            <td><?php echo e($koperasi->notelepon_koperasi); ?></td>
            <td><?php echo e($koperasi->email_koperasi); ?></td>
            <td><?php echo e($koperasi->jenis_produk); ?></td>
            <td><?php echo e($koperasi->jumlah_anggota); ?></td>
            <td>
                <form action="<?php echo e(route('koperasis.destroy',$koperasi->id)); ?>" method="POST">
     
                    <a class="btn btn-info" href="<?php echo e(route('koperasis.show',$koperasi->id)); ?>">Show</a>
      
                    <a class="btn btn-primary" href="<?php echo e(route('koperasis.edit',$koperasi->id)); ?>">Edit</a>
     
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    
    <?php echo $koperasis->links(); ?>

        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('koperasi\layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\LARAVEL\Administrasi_Koperasi\resources\views/koperasi\index.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data user</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Tutorial Laravel 10 untuk Pemula</h3>
                    <h5 class="text-center"></h5>         
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="<?php echo e(route('user.create')); ?>" class="btn btn-md btn-success mb-3">TAMBAH users</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">id_berkas</th>
                                <th scope="col">role</th>
                                <th scope="col">nama_lengkap</th>
                                <th scope="col">no_telp</th>
                                <th scope="col">jabatan</th>
                                <th scope="col">email</th>
                                <th scope="col">password</th>
                                <th scope="col">alamat</th>
                                <th scope="col">jenis_kelamin</th>
                                <th scope="col">tanggal_lahir</th>
                                <th scope="col">AKSI</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php $__empty_1 = true; $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    
                                    <td><?php echo e($users->id_berkas); ?></td>
                                    <td><?php echo e($users->role); ?></td>
                                    <td><?php echo e($users->nama_lengkap); ?></td>
                                    <td><?php echo e($users->no_telp); ?></td>
                                    <td><?php echo e($users->jabatan); ?></td>
                                    <td><?php echo e($users->email); ?></td>
                                    <td><?php echo e($users->password); ?></td>
                                    <td><?php echo e($users->alamat); ?></td>
                                    <td><?php echo e($users->jenis_kelamin); ?></td>
                                    <td><?php echo e($users->tanggal_lahir); ?></td>
                                    
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="<?php echo e(route('user.destroy', $users->id)); ?>" method="post">
                                            <a href="<?php echo e(route('user.show', $users->id)); ?>" class="btn btn-sm btn-dark">SHOW</a>
                                            <a href="<?php echo e(route('user.edit', $users->id)); ?>" class="btn btn-sm btn-primary">EDIT</a>
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                  <div class="alert alert-danger">
                                      Data users belum Tersedia.
                                  </div>
                              <?php endif; ?>
                            </tbody>
                          </table>  
                          <?php echo e($user->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        <?php if(session()->has('success')): ?>
        
            toastr.success('<?php echo e(session('success')); ?>', 'BERHASIL!'); 

        <?php elseif(session()->has('error')): ?>

            toastr.error('<?php echo e(session('error')); ?>', 'GAGAL!'); 
            
        <?php endif; ?>
    </script>

</body>
</html><?php /**PATH C:\laragon\www\kamisra\resources\views/user/index.blade.php ENDPATH**/ ?>
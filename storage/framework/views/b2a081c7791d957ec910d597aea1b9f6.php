<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data berkas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">TEST LARAVEL</h3>
                    <h5 class="text-center"><a>Index Berkas</a></h5>         
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="<?php echo e(route('berkas.create')); ?>" class="btn btn-md btn-success mb-3">TAMBAH list_berkas</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">KTP</th>
                                <th scope="col">KTM</th>
                                <th scope="col">Surat Pernyataan</th>
                                <th scope="col">AKSI</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php $__empty_1 = true; $__currentLoopData = $berkas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list_berkas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td class="text-center">
                                        <img src="<?php echo e(asset('/storage/uploadan/'.$list_berkas->ktp)); ?>" class="rounded" style="width: 150px">
                                    </td>
                                    <td class="text-center">
                                        <img src="<?php echo e(asset('/storage/uploadan/'.$list_berkas->ktm)); ?>" class="rounded" style="width: 150px">
                                    </td>
                                    <td class="text-center">
                                        <img src="<?php echo e(asset('/storage/uploadan/'.$list_berkas->s_pernyataan)); ?>" class="rounded" style="width: 150px">
                                    </td>
                                    
                                    
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="<?php echo e(route('berkas.destroy', $list_berkas->id)); ?>" method="post">
                                            <a href="<?php echo e(route('berkas.show', $list_berkas->id)); ?>" class="btn btn-sm btn-dark">SHOW</a>
                                            <a href="<?php echo e(route('berkas.edit', $list_berkas->id)); ?>" class="btn btn-sm btn-primary">EDIT</a>
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                  <div class="alert alert-danger">
                                      Data list_berkas belum Tersedia.
                                  </div>
                              <?php endif; ?>
                            </tbody>
                          </table>  
                          <?php echo e($berkas->links()); ?>

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
</html><?php /**PATH C:\laragon\www\kamisra\resources\views/berkas/index.blade.php ENDPATH**/ ?>
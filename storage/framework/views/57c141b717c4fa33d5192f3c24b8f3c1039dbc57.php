<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                	<a class="btn btn-default btn-sm" style="margin-bottom:15px;" href="<?php echo e(url('/home')); ?>"><span class="glyphicon glyphicon-home"></span> Home</a>
                	<form class="inline" action="<?php echo e(route('q')); ?>" method="GET">
						<div class="form-group">
    						<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
   						 <div class="input-group">
      						<div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>
      						<input type="text" class="form-control" placeholder="Masukan Keyword" name="search">
    					</div>
 						 </div>
  						<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Cari Data</button>                		
  						<a class="btn btn-info" href="<?php echo e(route('index.buku')); ?>"><span class="glyphicon glyphicon-list-alt"></span> Daftar Buku</a> <a class="btn btn-success" href="<?php echo e(route('add.buku')); ?>"><span class="glyphicon glyphicon-plus"></span> Tambah Buku</a>
                	</form>
                </div>
					<div class="panel">
						<table class="table table-hover table-bordered table-striped text-justify">
							<tr>
								<td>No</td>
								<td>Judul</td>
								<td>Noisbn</td>
								<td>Stok</td>
								<td>Action</td>
							</tr>
							<?php if($buku->count() > 0): ?>
							<?php $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo e((($buku->currentPage() -1) * $buku->perPage() ) + $loop->iteration); ?></td>
								<td><?php echo e($data->judul); ?></td>
								<td><?php echo e($data->noisbn); ?></td>
								<?php if($data->stok == 0 || $data->stok < 0): ?>
								<td style="text-align: center;">Stok habis</td>
								<?php else: ?>
								<td><?php echo e($data->stok); ?></td>
								<?php endif; ?>
								<td class=""><a class="btn btn-warning btn-sm" href="<?php echo e(route('detail.buku', $data->id)); ?>"><span class="glyphicon glyphicon-folder-open"></span> Detail</a> <a class="btn btn-danger btn-sm" href="<?php echo e(route('delete.buku', $data->id)); ?>"><span class="glyphicon glyphicon-remove"></span> Hapus</a></td>	
							</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php else: ?>
							<tr>
								<td style="text-align: center;" colspan="5">Tidak di temukan hasil tersebut</td>
							</tr>
							<?php endif; ?>

						</table>
						<div class="text-center"><?php echo e($buku->render()); ?></div>
					</div>	                	
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
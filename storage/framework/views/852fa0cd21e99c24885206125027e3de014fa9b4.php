<?php $__env->startSection('content'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
				<a class="btn btn-default btn-sm" style="margin-bottom:15px;" href="<?php echo e(url('/home')); ?>"><span class="glyphicon glyphicon-home"></span> Home</a>
                	<form class="inline" action="<?php echo e(route('searchkasir')); ?>" method="GET">
						<div class="form-group">
    						<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
   						 <div class="input-group">
      						<div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>
      						<input type="text" class="form-control" placeholder="Masukan Keyword" name="searchkasir">
    					</div>
 						 </div>
  						<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Cari Data</button>
  					</form>
				</div>
				<div class="panel">
				<a class="btn btn-success btn-sm" href="<?php echo e(route('addKasir.kasir')); ?>"><span class="glyphicon glyphicon-plus"></span> Tambah pegawai Kasir</a>
				</div>
				<div class="panel">
						<table class="table table-hover table-bordered table-striped text-justify">
							<b><tr>
								<td>No</td>
								<td>Nama pegawai</td>
								<td>Alamat</td>
								<td>Telepon</td>
								<td>Status</td>
								<td>Username</td>
								<td>Password</td>
								<td>Akses</td>
								<td>Action</td>
							</tr>
							</b>
							<?php if($kasir->count() > 0): ?>
							<?php $__currentLoopData = $kasir; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo e((($kasir->currentPage() -1) * $kasir->perPage() ) + $loop->iteration); ?></td>
								<td><?php echo e($data->nama); ?></td>
								<td><?php echo e($data->alamat); ?></td>
								<td><?php echo e($data->telepon); ?></td>
								<td><?php echo e($data->status); ?></td>
								<td><?php echo e($data->username); ?></td>
								<td><?php echo e($data->password); ?></td>
								<td><?php echo e($data->akses); ?></td>
								<td><a class="btn btn-warning btn-sm" href="<?php echo e(route('editKasir.kasir', $data->id)); ?>"><span class="glyphicon glyphicon-folder-open"></span> Edit account kasir</a> <a class="btn btn-danger btn-sm" href="<?php echo e(route('deleteKasir.kasir', $data->id)); ?>"><span class="glyphicon glyphicon-remove"></span> Hapus Akun</a></td>	
							</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php else: ?>
							<tr>
								<td style="text-align: center;" colspan="10">Tidak ditemukan</td>
							</tr>
							<?php endif; ?>
						</table>
						<div class="text-center"><?php echo e($kasir->render()); ?></div>
					</div>
			</div>
		</div>
	</div>
</div>
	

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
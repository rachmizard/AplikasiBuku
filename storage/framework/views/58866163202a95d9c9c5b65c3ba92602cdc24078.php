<?php $__env->startSection('content'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
				<a class="btn btn-default btn-sm" style="margin-bottom:15px;" href="<?php echo e(url('/home')); ?>"><span class="glyphicon glyphicon-home"></span> Home</a>
                	<form class="inline" action="<?php echo e(route('querysearchofdistributor')); ?>" method="GET">
						<div class="form-group">
    						<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
   						 <div class="input-group">
      						<div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>
      						<input type="text" class="form-control" placeholder="Masukan Keyword" name="querysearchofdistributor">
    					</div>
 						 </div>
  						<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Cari Data</button>
  					</form>
				</div>
				<div class="panel">
				<a class="btn btn-success btn-sm" href="<?php echo e(route('addDistributor.distributor')); ?>"><span class="glyphicon glyphicon-plus"></span> Tambah Distributor</a>
				</div>
				<div class="panel">
						<table class="table table-hover table-bordered table-striped text-justify">
							<tr>
								<td>No</td>
								<td>Nama Distributor</td>
								<td>Alamat</td>
								<td>Telepon</td>
								<td>Action</td>
							</tr>
							<?php if($distributor->count() > 0): ?>
							<?php $__currentLoopData = $distributor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo e((($distributor->currentPage() -1) * $distributor->perPage() ) + $loop->iteration); ?></td>
								<td><?php echo e($data->nama_distributor); ?></td>
								<td><?php echo e($data->alamat); ?></td>
								<td><?php echo e($data->telepon); ?></td>
								<td><a class="btn btn-warning btn-sm" href="<?php echo e(route('detailDistributor.distributor', $data->id)); ?>"><span class="glyphicon glyphicon-folder-open"></span> Detail</a> <a class="btn btn-danger btn-sm" href="<?php echo e(route('deleteDistributor.distributor', $data->id)); ?>"><span class="glyphicon glyphicon-remove"></span> Hapus</a></td>	
							</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php else: ?>
							<tr>
								<td style="text-align: center;" colspan="6">Tidak ditemukan</td>
							</tr>
							<?php endif; ?>
						</table>
						<div class="text-center"><?php echo e($distributor->render()); ?></div>
					</div>
			</div>
		</div>
	</div>
</div>
	

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
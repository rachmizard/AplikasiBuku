<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
					<div class="panel">
						<div class="panel-heading">Detail Pasok</div>
							<table class="table table-hover table-bordered table-striped">
								<tr>
									<td>NAMA DISTRIBUTOR</td>
									<td>ALAMAT</td>
									<td>TELEPON</td>
								</tr>
								<tr>
									<td><?php echo e($distributor->nama_distributor); ?></td>
									<td><?php echo e($distributor->alamat); ?></td>
									<td><?php echo e($distributor->telepon); ?></td>				
								</tr>
							</table>
					</div>	                	
					<div class="panel">
						<a href="<?php echo e(route('index.distributor')); ?>" class="btn btn-primary btn-sm">
                             	<span class="glyphicon glyphicon-chevron-left"></span>
	                    </a>
						<a href="<?php echo e(route('editDistributor.distributor', $distributor->id)); ?>" class="btn btn-warning btn-sm">
	                         	<span class="glyphicon glyphicon-pencil"></span>
	                    </a>
	                    <a href="<?php echo e(route('deleteDistributor.distributor', $distributor->id)); ?>" class="btn btn-danger btn-sm">
	                         	<span class="glyphicon glyphicon-remove"></span>
	                    </a>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
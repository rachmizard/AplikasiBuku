<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
					<div class="panel">
						<a href="<?php echo e(route('index.pasok')); ?>" class="btn btn-primary btn-sm">
                             	<span class="glyphicon glyphicon-chevron-left"></span>
                             	Kembali
	                    </a>
						<div class="panel-heading">Detail Pasok</div>
							<table class="table table-hover table-bordered table-striped text-center">
								<tr>
									<td><b>DISTRIBUTOR</b></td>
									<td><b>BUKU</b></td>
									<td><b>JUMLAH</b></td>
									<td><b>TANGGAL</b></td>
									<td><b>Aksi</b></td>
								</tr>
								<tr>
									<td><?php echo e($showdetail->distributor->nama_distributor); ?></td>
									<td><?php echo e($showdetail->buku->judul); ?></td>
									<td><?php echo e($showdetail->jumlah); ?></td>
									<td><?php echo e($showdetail->tanggal); ?></td>
									<td>
									<a href="<?php echo e(route('editPasok.pasok', $showdetail->id)); ?>" class="btn btn-warning btn-sm">
				                         	<span class="glyphicon glyphicon-pencil"></span>
				                         	Edit
				                    </a>
				                    <a href="<?php echo e(route('deletePasok.pasok', $showdetail->id)); ?>" class="btn btn-danger btn-sm">
				                         	<span class="glyphicon glyphicon-remove"></span>
				                         	Hapus
				                    </a>
	                    			</td>
								</tr>
							</table>
					</div>	                	
					<div class="panel">
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
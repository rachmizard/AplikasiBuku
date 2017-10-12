<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
					<div class="panel">
						<a href="<?php echo e(route('index.buku')); ?>" class="btn btn-primary btn-sm">
					 	<span class="glyphicon glyphicon-chevron-left"></span> Kembali
						</a>
						<div class="panel-heading">Detail Buku <b><?php echo e($showdetail->judul); ?></b></div>
							<table class="table table-hover table-bordered table-striped">
								<tr>
									<td>JUDUL</td>
									<td>NOISBN</td>
									<td>PENULIS</td>
									<td>PENERBIT</td>
									<td>TAHUN</td>
									<td>STOK</td>
									<td>HARGA POKOK</td>
									<td>HARGA JUAL</td>
									<td>PPN</td>
									<td>DISKON</td>
									<td>Aksi</td>
								</tr>
								<tr>
									<td><?php echo e($showdetail->judul); ?></td>
									<td><?php echo e($showdetail->noisbn); ?></td>
									<td><?php echo e($showdetail->penulis); ?></td>
									<td><?php echo e($showdetail->penerbit); ?></td>
									<td><?php echo e($showdetail->tahun); ?></td>
									<td><?php echo e($showdetail->stok); ?></td>
									<td><?php echo e($showdetail->harga_pokok); ?></td>
									<td><?php echo e($showdetail->harga_jual); ?></td>
									<td><?php echo e($showdetail->ppn); ?></td>
									<td><?php echo e($showdetail->diskon); ?>%</td>
									<td>
										<a href="<?php echo e(route('edit.buku', $showdetail->id)); ?>" class="btn btn-warning btn-sm">
					                         	<span class="glyphicon glyphicon-pencil"></span>
					                         	Edit
					                    </a>
					                    <a href="<?php echo e(route('delete.buku', $showdetail->id)); ?>" class="btn btn-danger btn-sm">
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
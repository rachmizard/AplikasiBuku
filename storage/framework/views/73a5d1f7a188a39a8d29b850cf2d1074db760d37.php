<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Data Penjualan</div>

                <div class="panel-body">
					<table class="table table-striped">
					<a class="btn btn-primary" href="<?php echo e(route('addPenjualan.penjualan')); ?>">Create Data</a>
					<thead>
						<tr>
							<th>Buku</th>
							<th>Kasir</th>
							<th>Jumlah</th>
							<th>Total</th>
							<th>Tanggal</th>
							<th>Action</th>
						</tr>
					</thead>
					<?php $__currentLoopData = $penjualans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $penjualan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($penjualan->buku->judul); ?></td>
						<td><?php echo e($penjualan->kasir->nama); ?></td>
						<td><?php echo e($penjualan->jumlah); ?></td>
						<td><?php echo e($penjualan->total); ?></td>
						<td><?php echo e($penjualan->tanggal); ?></td>
						<td>
							<a class="btn btn-primary" href="<?php echo e(route('edit.show', $penjualan->id )); ?>">Edit</a>
							<a class="btn btn-success" href="">Detail</a>
							<a class="btn btn-danger" href="">Hapus</a>
						</td>

					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</table>
					<center>
					</center>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
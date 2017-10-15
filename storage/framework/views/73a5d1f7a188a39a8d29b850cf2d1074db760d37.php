<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Data Penjualan</div>
                <?php if(session()->has('message')): ?>
				    <div class="alert alert-success">
				        <?php echo e(session()->get('message')); ?>

				    </div>
				<?php endif; ?>
                <?php if(session()->has('messagedelete')): ?>
				    <div class="alert alert-danger">
				        <?php echo e(session()->get('messagedelete')); ?>

				    </div>
				<?php endif; ?>
                <div class="panel-body">
					<table class="table table-striped">
					<div class="col-md-6 col-md-offset 1 ">
					<a class="btn btn-primary" href="<?php echo e(route('addPenjualan.penjualan')); ?>">Create Data</a>
					</div>
					<div class="col-md-6 col-md-offset 1 ">
					<a class="btn btn-danger" href="<?php echo e(route('deleteTbPenjualan.penjualan')); ?>">Hapus semua 
					report</a>
					</div>
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
						<td>Rp. <?php echo e($penjualan->total); ?></td>
						<td><?php echo e($penjualan->tanggal); ?></td>
						<td>
							<a class="btn btn-primary" href="<?php echo e(route('edit.show', $penjualan->id )); ?>">Edit</a>
							<a class="btn btn-success" href="">Detail</a>
							<a class="btn btn-danger" href="<?php echo e(route('deletePenjualan.penjualan', $penjualan->id)); ?>">Hapus</a>
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
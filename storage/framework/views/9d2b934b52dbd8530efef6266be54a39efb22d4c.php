<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Data</div>

                <div class="panel-body">
					<form class="form-horizontal" action="<?php echo e(route('updatePenjualan.penjualan', $penjualan->id)); ?>" method="POST">
					<div class="form-group">
					<label for="id_penjualan" class="col-md-2 control-label">Nama Buku</label>
					  <div class="col-md-9">
					  	<select name="id_buku" id="">
					  		<?php $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					  		<option value="<?php echo e($in->id); ?>" <?php if(($penjualan->id_buku)==($in->id)): ?> selected <?php endif; ?>><?php echo e($in->judul); ?></option>
					  		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					  	</select>
					  </div>
					</div>
					<div class="form-group">
					<label for="id_penjualan" class="col-md-2 control-label">Nama Kasir</label>
					  <div class="col-md-9">
						<select name="id_kasir" id="">
					  		<?php $__currentLoopData = $kasir; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					  		<option value="<?php echo e($in->id); ?>" <?php if(($penjualan->id_kasir)==($in->id)): ?> selected <?php endif; ?>><?php echo e($in->nama); ?></option>
					  		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					  	</select>
					  </div>
					</div>
					<div class="form-group">
					<label for="id_penjualan" class="col-md-2 control-label">Jumlah</label>
					  <div class="col-md-9">
					  	<input class="form-control" value="<?php echo e($penjualan->jumlah); ?>" type="text" name="jumlah" placeholder="Jumlah">
					  </div>
					</div>
					<div class="form-group">
					<label for="id_penjualan" class="col-md-2 control-label">Total</label>
					  <div class="col-md-9">
						<input class="form-control" value="<?php echo e($penjualan->total); ?>" type="text" name="total" placeholder="Total">
					  </div>
					</div>
					<div class="form-group">
					<label for="id_penjualan" class="col-md-2 control-label">Tanggal</label>
					  <div class="col-md-9">
					  	<input class="form-control" value="<?php echo e($penjualan->tanggal); ?>" type="date" name="tanggal" placeholder="Tanggal">
					  </div>
					</div>
					<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
					<input class="btn btn-primary col-md-offset-2" type="submit" name="name" value="Edit">

					</form>
				</div>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
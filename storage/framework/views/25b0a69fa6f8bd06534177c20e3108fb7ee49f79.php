<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Penjualan</div>

                <div class="panel-body">
                	<h4><?php echo e(Session::get('message')); ?></h4>
					<form class="form-horizontal" action="<?php echo e(route('storePenjualan.penjualan')); ?>" method="post">
					<div class="form-group">
					<label for="id_penjualan" class="col-md-2 control-label">Buku</label>
					  <div class="col-md-9">
					  	<select name="id_buku" id="">
					  		<?php $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					  		<option value="<?php echo e($in->id); ?>"><?php echo e($in->judul); ?></option>
					  		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					  		<?php $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<input type="hidden" name="harga" value="<?php echo e($in->harga_jual); ?>">
					  		<input type="hidden" name="ppn" value="<?php echo e($in->ppn); ?>">
					  		<input type="hidden" name="diskon" value="<?php echo e($in->diskon); ?>">
					  		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					  	</select>
					  </div>
					</div>
					<div class="form-group">
					<label for="id_penjualan" class="col-md-2 control-label">Kasir</label>
					  <div class="col-md-9">
						<select name="id_kasir" id="">
							<?php $__currentLoopData = $kasir; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<option value="<?php echo e($in->id); ?>"><?php echo e($in->nama); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
					  </div>
					</div>
					<div class="form-group">
					<label for="id_penjualan" class="col-md-2 control-label">Jumlah</label>
					  <div class="col-md-9">
					  	<input class="form-control" type="text" name="jumlah" placeholder="Jumlah">
					  </div>
					</div>
					  	<input class="form-control" type="hidden" value="<?php echo e(date('D-m-y H:i:s')); ?>" name="tanggal" placeholder="Tanggal">
					<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
					<input class="btn btn-primary col-md-offset-2" type="submit" name="name" value="Submit">

					</form>
				</div>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
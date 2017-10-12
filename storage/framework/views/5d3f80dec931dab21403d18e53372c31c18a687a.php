<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
     			
				<div class="panel-body">
                    <form class="form-horizontal" method="POST" action="<?php echo e(route('storePasok.pasok')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('id_distributor') ? ' has-error' : ''); ?>">
                            <label for="distributor_id" class="col-md-4 control-label">Distributor</label>

                            <div class="col-md-6">
                                <select name="id_distributor">
                                <?php $__currentLoopData = $distributor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($in->id); ?>"><?php echo e($in->nama_distributor); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </select>

                                <?php if($errors->has('id_distributor')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('id_distributor')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('id_buku') ? ' has-error' : ''); ?>">
                            <label for="id_buku" class="col-md-4 control-label">Pilih Buku</label>

                            <div class="col-md-6">
                                <select name="id_buku" id="">
                                <?php $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($in->id); ?>"><?php echo e($in->judul); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </select>

                                <?php if($errors->has('id_buku')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('id_buku')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('jumlah') ? ' has-error' : ''); ?>">
                            <label for="jumlah" class="col-md-4 control-label">Jumlah</label>

                            <div class="col-md-6">
                                <input id="jumlah" type="text" class="form-control" name="jumlah" value="<?php echo e(old('jumlah')); ?>" required autofocus>

                                <?php if($errors->has('jumlah')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('jumlah')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('tanggal') ? ' has-error' : ''); ?>">
                            <label for="tanggal" class="col-md-4 control-label">Tanggal</label>

                            <div class="col-md-6">
                                <input id="tanggal" type="date" class="form-control" name="tanggal" value="<?php echo e(old('tanggal')); ?>" required autofocus>

                                <?php if($errors->has('penerbit')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('penerbit')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    <span class="glyphicon glyphicon-ok"></span> Tambah Pasok
                                </button>
                                <a href="<?php echo e(route('index.pasok')); ?>" class="btn btn-danger">
                                    <span class="glyphicon glyphicon-remove"></span> Batal
                                </a>
                            </div>
                       	</div>
                    </form>    
				</div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
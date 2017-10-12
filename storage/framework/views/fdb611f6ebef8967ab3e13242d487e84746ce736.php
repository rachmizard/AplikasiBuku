<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
     			<div class="panel-heading">Edit Buku</div>
    				<div class="panel-body">
                        <form class="form-horizontal" method="POST" action="<?php echo e(route('updatePasok.pasok', $edit->id )); ?>">
                            <?php echo e(csrf_field()); ?>


                            <div class="form-group<?php echo e($errors->has('buku') ? ' has-error' : ''); ?>">
                                <label for="buku" class="col-md-4 control-label">Buku</label>

                                <div class="col-md-6">
                                    <select name="buku" id="">
                                      <?php $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $baca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <option value="<?php echo e($baca->id); ?>"<?php if(($edit->id_buku)==($baca->id)): ?> selected <?php endif; ?>><?php echo e($baca->judul); ?></option>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                      </select>

                                    <?php if($errors->has('buku')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('buku')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group<?php echo e($errors->has('distributor') ? ' has-error' : ''); ?>">
                                <label for="distributor" class="col-md-4 control-label">Distributor</label>

                                <div class="col-md-6">
                                        <select name="distributor" id="">
                                      <?php $__currentLoopData = $distributor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $baca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <option value="<?php echo e($baca->id); ?>"<?php if(($edit->id_distributor)==($baca->id)): ?> selected <?php endif; ?>><?php echo e($baca->nama_distributor); ?></option>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                      </select>

                                    <?php if($errors->has('distributor')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('distributor')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group<?php echo e($errors->has('jumlah') ? ' has-error' : ''); ?>">
                                <label for="jumlah" class="col-md-4 control-label">Jumlah</label>

                                <div class="col-md-6">
                                    <input id="jumlah" type="text" class="form-control" name="jumlah" value="<?php echo e($edit->jumlah); ?>" required autofocus>

                                    <?php if($errors->has('jumlah')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('jumlah')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group<?php echo e($errors->has('tanggal') ? ' has-error' : ''); ?>">
                                <label for="penerbit" class="col-md-4 control-label">Tanggal</label>

                                <div class="col-md-6">
                                    <input id="tanggal" type="text" class="form-control" name="tanggal" value="<?php echo e($edit->tanggal); ?>" required autofocus>

                                    <?php if($errors->has('tanggal')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('tanggal')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <span class="glyphicon glyphicon-ok"></span> Edit Buku
                                    </button>
                                    <a href="<?php echo e(route('addPasok.pasok')); ?>" class="btn btn-danger">
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
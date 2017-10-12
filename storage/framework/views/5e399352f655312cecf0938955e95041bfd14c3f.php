<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
     			<div class="panel-heading">Edit Buku</div>
    				<div class="panel-body">
                        <form class="form-horizontal" method="POST" action="<?php echo e(route('update.buku', $edit->id )); ?>">
                            <?php echo e(csrf_field()); ?>


                            <div class="form-group<?php echo e($errors->has('judul') ? ' has-error' : ''); ?>">
                                <label for="judul" class="col-md-4 control-label">Judul</label>

                                <div class="col-md-6">
                                    <input id="judul" type="text" class="form-control" name="judul" value="<?php echo e($edit->judul); ?>" required autofocus>

                                    <?php if($errors->has('judul')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('judul')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group<?php echo e($errors->has('noisbn') ? ' has-error' : ''); ?>">
                                <label for="noisbn" class="col-md-4 control-label">NOISBN</label>

                                <div class="col-md-6">
                                    <input id="noisbn" type="text" class="form-control" name="noisbn" value="<?php echo e($edit->noisbn); ?>" required autofocus>

                                    <?php if($errors->has('noisbn')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('noisbn')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group<?php echo e($errors->has('penulis') ? ' has-error' : ''); ?>">
                                <label for="penulis" class="col-md-4 control-label">PENULIS</label>

                                <div class="col-md-6">
                                    <input id="penulis" type="text" class="form-control" name="penulis" value="<?php echo e($edit->penulis); ?>" required autofocus>

                                    <?php if($errors->has('penulis')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('penulis')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group<?php echo e($errors->has('penerbit') ? ' has-error' : ''); ?>">
                                <label for="penerbit" class="col-md-4 control-label">PENERBIT</label>

                                <div class="col-md-6">
                                    <input id="penerbit" type="text" class="form-control" name="penerbit" value="<?php echo e($edit->penerbit); ?>" required autofocus>

                                    <?php if($errors->has('penerbit')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('penerbit')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group<?php echo e($errors->has('tahun') ? ' has-error' : ''); ?>">
                                <label for="tahun" class="col-md-4 control-label">TAHUN</label>

                                <div class="col-md-6">
                                    <input id="tahun" type="date" class="form-control" name="tahun" value="<?php echo e($edit->tahun); ?>" required autofocus>

                                    <?php if($errors->has('tahun')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('tahun')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group<?php echo e($errors->has('stok') ? ' has-error' : ''); ?>">
                                <label for="stok" class="col-md-4 control-label">STOK</label>

                                <div class="col-md-6">
                                    <input id="stok" type="text" class="form-control" name="stok" value="<?php echo e($edit->stok); ?>" required autofocus>

                                    <?php if($errors->has('stok')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('stok')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group<?php echo e($errors->has('harga_pokok') ? ' has-error' : ''); ?>">
                                <label for="harga_pokok" class="col-md-4 control-label">HARGA POKOK</label>

                                <div class="col-md-6">
                                    <input id="harga_pokok" type="text" class="form-control" name="harga_pokok" value="<?php echo e($edit->harga_pokok); ?>" required autofocus>

                                    <?php if($errors->has('harga_pokok')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('harga_pokok')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group<?php echo e($errors->has('harga_jual') ? ' has-error' : ''); ?>">
                                <label for="harga_jual" class="col-md-4 control-label">HARGA JUAL</label>

                                <div class="col-md-6">
                                    <input id="harga_jual" type="text" class="form-control" name="harga_jual" value="<?php echo e($edit->harga_jual); ?>" required autofocus>

                                    <?php if($errors->has('harga_jual')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('harga_jual')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group<?php echo e($errors->has('ppn') ? ' has-error' : ''); ?>">
                                <label for="ppn" class="col-md-4 control-label">PPN</label>

                                <div class="col-md-6">
                                    <input id="ppn" type="text" class="form-control" name="ppn" value="<?php echo e($edit->ppn); ?>" required autofocus>

                                    <?php if($errors->has('ppn')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('ppn')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group<?php echo e($errors->has('diskon') ? ' has-error' : ''); ?>">
                                <label for="diskon" class="col-md-4 control-label">DISKON</label>

                                <div class="col-md-6">
                                    <input id="diskon" type="text" class="form-control" name="diskon" value="<?php echo e($edit->diskon); ?>" required autofocus>

                                    <?php if($errors->has('diskon')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('diskon')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <span class="glyphicon glyphicon-ok"></span> Edit Buku
                                    </button>
                                    <a href="<?php echo e(route('index.buku')); ?>" class="btn btn-danger">
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
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Daftar Buku</div>

                    <div class="panel-body">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>
                        <div class="card text-center">
                          <div class="card-body">
                            <h4 class="card-title">Daftar Buku</h4>
                            <p class="card-text"></p>
                                <a class="btn btn-default btn-sm" href="<?php echo e(url('home/buku')); ?>"><span class="glyphicon glyphicon-book"></span> Lihat Daftar Buku</a>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Pemasokan</div>
                    <div class="panel-body">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>
                        <div class="card text-center">
                          <div class="card-body">
                            <h4 class="card-title">Pasok</h4>
                            <p class="card-text"></p>
                                <a class="btn btn-default btn-sm" href="<?php echo e(url('home/pasok')); ?>"><span class="glyphicon glyphicon-book"></span> Lihat Daftar Pasok</a>
                          </div>
                        </div>
                    </div>
                    <!-- BAGIAN RIDWAN -->

                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Distributor</div>
                    <div class="panel-body">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>
                        <div class="card text-center">
                          <div class="card-body">
                            <h4 class="card-title">Distributor buku</h4>
                            <p class="card-text"></p>
                                <a class="btn btn-default btn-sm" href="<?php echo e(url('home/distributor')); ?>"><span class="glyphicon glyphicon-book"></span> Lihat daftar Distributor </a>
                          </div>
                        </div>
                    </div>
                    <!-- BAGIAN RIDWAN -->

                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">Penjualan</div>
                    <div class="panel-body">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>
                        <div class="card text-center">
                          <div class="card-body">
                            <h4 class="card-title">Daftar Penjualan buku </h4>
                            <p class="card-text"></p>
                                <a class="btn btn-default btn-sm" href="<?php echo e(route('index.penjualan')); ?>"><span class="glyphicon glyphicon-book"></span> Lihat Penjualan buku</a>
                          </div>
                        </div>
                    </div>
                    <!-- BAGIAN RIDWAN -->

                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">Kasir</div>
                    <div class="panel-body">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>
                        <div class="card text-center">
                          <div class="card-body">
                            <h4 class="card-title">Kasir </h4>
                            <p class="card-text"></p>
                                <a class="btn btn-default btn-sm" href="<?php echo e(route('index.kasir')); ?>"><span class="glyphicon glyphicon-book"></span> Lihat kasir</a>
                          </div>
                        </div>
                    </div>
                    <!-- BAGIAN RIDWAN -->

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
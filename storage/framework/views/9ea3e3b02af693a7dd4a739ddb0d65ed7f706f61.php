<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="mt-3">
                <div class="content container-fluid">
                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="d-flex align-items-center">
                                    <h5 class="page-title">Dashboard</h5>
                                    <ul class="breadcrumb ml-2">
                                        <li class="breadcrumb-item"><a href="<?php echo e(route('arrondissement')); ?>">Des détails</a>
                                        </li>
                                        <li class="breadcrumb-item active"><?php echo e($arrondissement->description); ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title float-left">
                                        <?php echo e($department_description); ?></h4>
                                    <div class="text-right">
                                        <a href="<?php echo e(route('arrondissement.index')); ?>" class="btn btn-dark px-3">
                                            Retour arrondissement</a>
                                    </div>
                                </div>
                                <div class="card-body pb-5">
                                    <div class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-5">
                                                La description
                                            </div>
                                            <div class="col-md-7">
                                                <?php echo e($arrondissement->description); ?>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item">
                                        <div class="row no-gutters">
                                            <div class="col-md-5">
                                                Department
                                            </div>
                                            <div class="col-md-7">
                                                <?php echo e($department_description); ?>

                                            </div>
                                        </div>department
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hephhay/Documents/web/Birth/resources/views/arrondissement/show.blade.php ENDPATH**/ ?>
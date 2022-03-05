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
                                        <li class="breadcrumb-item"><a
                                                href="<?php echo e(route('arrondissement')); ?>">Arrondissement</a>
                                        </li>
                                        <li class="breadcrumb-item active">Créer un nouveau Arrondissement</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title float-left">Arrondissement</h4>
                                    <div class="text-right">
                                        <a href="<?php echo e(route('arrondissement')); ?>" class="btn btn-dark px-3">
                                            Retour arrondissement</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="<?php echo e(route('arrondissement.create.post')); ?>">
                                        <?php echo csrf_field(); ?>


                                        <div class="row mb-3">
                                            <label for="description"
                                                class="col-md-2 col-form-label text-md-end">Description</label>

                                            <div class="col-md-10">
                                                <input value="<?php echo e(old('description')); ?>" type="text" class="form-control" id="description" name="description"
                                                       required>
                                                <?php if($errors->has('description')): ?>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong><?php echo e($errors->first('description')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="description" class="col-md-2 col-form-label text-md-end">
                                                Department</label>
                                            <div class="col-md-10">
                                                <?php if(isset($department)): ?>
                                                    <select data-live-search="true" name="department_id" class="selectpicker w-100"
                                                        id="region">
                                                        <option value="" selected>--</option>
                                                        <?php $__currentLoopData = $department; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->description); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                    <?php if($errors->has('department_id')): ?>
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong><?php echo e($errors->first('department_id')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="float-right">
                                            <button type="submit" class="btn btn-primary px-4"
                                                onclick="return confirm('Are you sure you want to submit this form?')">
                                                Créer la Commune
                                            </button>
                                        </div>
                                    </form>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hephhay/Documents/web/Birth/resources/views/arrondissement/create.blade.php ENDPATH**/ ?>
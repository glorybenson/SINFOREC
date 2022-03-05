<?php $__env->startSection('content'); ?>
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="d-flex align-items-center">
                        <h5 class="page-title">Dashboard</h5>
                        <ul class="breadcrumb ml-2">
                            <li class="breadcrumb-item active">Centre</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title float-left">Centre</h4>
                        <div class="text-right">
                            <a href="<?php echo e(route('centre.create')); ?>" class="btn btn-dark px-3">Ajout d’un
                                centre</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0 table-striped border-0 data-table" id="datatable">
                                <thead class="thead-light">
                                    <th>La description</th>
                                    <th>Communes</th>
                                    <th>Région</th>
                                    <th>Département</th>
                                    <th>Arrondissement</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $centre; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>
                                                <?php echo e(((object)$item)->description); ?>

                                            </td>
                                            <td>
                                                <?php echo e(((object)$item)->communes); ?>

                                            </td>
                                            <td><?php echo e(((object)$item)->regions); ?></td>
                                            <td><?php echo e(((object)$item)->departments); ?></td>
                                            <td><?php echo e(((object)$item)->arrondissements); ?></td>
                                            <td>
                                                <a class="text-dark"
                                                    href="<?php echo e(route('centre.show', ['id' => ((object)$item)->id, 'rt' => time()])); ?>"><i
                                                        class="feather-eye"></i></a>
                                                <a href="<?php echo e(route('centre.edit', ['id' => ((object)$item)->id])); ?>"
                                                    class="mx-2 text-dark"><i class="feather-edit"></i></a>
                                                <a class="text-dark"
                                                    onclick="return confirm('Êtes-vous sûr de bien vouloir supprimer cet élément?');"
                                                    href="<?php echo e(route('centre.delete', ['id' => ((object)$item)->id])); ?>"><i
                                                        class="feather-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hephhay/Documents/web/Birth/resources/views/centre/index.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="d-flex align-items-center">
                        <h5 class="page-title">Dashboard</h5>
                        <ul class="breadcrumb ml-2">
                            <li class="breadcrumb-item active">Arrondissement</li>
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
                            <a href="<?php echo e(route('arrondissement.create')); ?>" class="btn btn-dark px-3">Ajout d’un
                                arrondissement</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0 table-striped border-0 data-table" id="datatable">
                                <thead class="thead-light">
                                    <th>La description</th>
                                    <th>Department</th>
                                    <th>Créé par</th>
                                    <th>Créé sur</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $arrondissement; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>
                                                <?php echo e($item->description); ?>

                                            </td>
                                            <td><?php echo e(\App\Models\Department::find( $item->department_id)->description); ?></td>
                                            <td>
                                                <?php echo e(\App\Models\User::find( $item->created_by)->first_name); ?>

                                            </td>
                                            <td><?php echo e($item->created_at); ?></td>
                                            <td>
                                                <a class="text-dark"
                                                    href="<?php echo e(route('arrondissement.show', ['id' => $item->id, 'rt' => time()])); ?>"><i
                                                        class="feather-eye"></i></a>
                                                <a href="<?php echo e(route('arrondissement.edit', ['id' => $item->id])); ?>"
                                                    class="mx-2 text-dark"><i class="feather-edit"></i></a>
<!--                                                <a class="text-dark"
                                                    onclick="return confirm('Êtes-vous sûr de bien vouloir supprimer cet élément?');"
                                                    href="<?php echo e(route('arrondissement.delete', ['id' => $item->id])); ?>"><i
                                                        class="feather-trash"></i></a>-->
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hephhay/Documents/web/Birth/resources/views/arrondissement/index.blade.php ENDPATH**/ ?>
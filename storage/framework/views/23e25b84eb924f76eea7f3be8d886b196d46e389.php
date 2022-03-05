<?php $__env->startSection('content'); ?>
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="d-flex align-items-center">
                        <h5 class="page-title">Dashboard</h5>
                        <ul class="breadcrumb ml-2">
                            <li class="breadcrumb-item active">Users</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title float-left">Users</h4>
                        <div class="text-right">
                            <a href="<?php echo e(route('create.user')); ?>" class="btn btn-dark px-3">Créer un Utilisateur</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0 table-striped border-0 data-table" id="datatable">
                                <thead class="thead-light">
                                    <th>#</th>
                                    <th>Prénom</th>
                                    <th>Nom de famille</th>
                                    <th>e-mail</th>
                                    <th>Créé par</th>
                                    <th>Créé sur</th>
                                    <th>Dernière connexion</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <?php if(isset($users)): ?>
                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($sn++); ?></td>
                                                <td><?php echo e($user->first_name); ?></td>
                                                <td><?php echo e($user->last_name); ?></td>
                                                <td><?php echo e($user->email); ?></td>
                                                <td><?php echo e($user->created_user->first_name ?? ''); ?>

                                                    <?php echo e($user->created_user->last_name ?? ''); ?></td>
                                                <td><?php echo e($user->created_at); ?></td>
                                                <td>
                                                    <?php echo e($user->last_login); ?>

                                                </td>
                                                <td>
                                                        <div class="d-flex">
                                                            <a href="<?php echo e(route('edit.user', $user->id)); ?>"
                                                               class="btn btn-sm p-2" title="Edit"><i
                                                                    class="fa fa-edit"></i></a>
                                                        <?php if( !$user->is_root): ?>
                                                            <a href="<?php echo e(route('delete.user', $user->id)); ?>"
                                                               onclick="return confirm('Are you sure you want to delete this user?')"
                                                               title="Delete" class="btn btn-sm p-2" title="Edit"><i
                                                                    class="fa fa-trash"></i></a>
                                                        </div>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hephhay/Documents/web/Birth/resources/views/users/index.blade.php ENDPATH**/ ?>
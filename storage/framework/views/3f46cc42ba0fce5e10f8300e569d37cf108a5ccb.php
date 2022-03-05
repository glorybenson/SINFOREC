<?php $__env->startSection('content'); ?>
    <div class="row" data-conn="<?php echo e($link); ?>">
        <div class="col-md-10 mx-auto">
            <div class="mt-3">
                <div class="content container-fluid">
                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="d-flex align-items-center">
                                    <h5 class="page-title">Dashboard</h5>
                                    <ul class="breadcrumb ml-2">
                                        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Utilisateur</a>
                                        </li>
                                        <li class="breadcrumb-item active">Créer un Utilisateur</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title float-left">Créer un Utilisateur</h4>
                                    <div class="text-right">
                                        <a href="<?php echo e(route('home')); ?>" class="btn btn-dark px-3">
                                            Retour aux utilisateurs</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="<?php echo e(route('create.user.post')); ?>">
                                        <?php echo csrf_field(); ?>
                                        <div class="row mb-3">
                                            <label for="first_name"
                                                class="col-md-2 col-form-label text-md-end">Prénom</label>
                                            <div class="col-md-10">
                                                <input value="<?php echo e(old('first_name')); ?>" id="first_name" type="text"
                                                    class="form-control " name="first_name" autocomplete="name" required>
                                                <?php if($errors->has('first_name')): ?>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong><?php echo e($errors->first('first_name')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="last_name" class="col-md-2 col-form-label text-md-end">
                                                Nom de famille</label>
                                            <div class="col-md-10">
                                                <input id="last_name" type="text" class="form-control " name="last_name"
                                                    value="<?php echo e(old('last_name')); ?>" required autocomplete="name" autofocus>
                                                <?php if($errors->has('last_name')): ?>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong><?php echo e($errors->first('last_name')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                                <div class="row mb-3">
                                                    <label for="pays" class="col-md-2 col-form-label text-md-end">Pays</label>
                                                    <div class="col-md-10">
                                                        <select multiple id="geographical_zone-pay" data-parsley-errors-container="#invalid-feedback" class="select modifiable" data-name="pays" name="pays[]" required
                                                                aria-label=".form-select-lg">
                                                            <?php if(isset($pays)): ?>
                                                                <?php $__currentLoopData = $pays; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pay): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e(((object)$pay)->id); ?>"><?php echo e(((object)$pay)->description); ?></option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <?php endif; ?>
                                                        </select>
                                                        <span class="feedback-new" id="invalid-feedback" role="alert"></span>
                                                        <?php $__errorArgs = ['pays'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="invalid-feedback" id="invalid-feedback" role="alert">
                                                            <strong><?php echo e($message); ?></strong>
                                                        </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="description" class="col-md-2 col-form-label text-md-end">Régions</label>
                                                    <div class="col-md-10">
                                                        <select multiple id="geographical_zone-region" data-parsley-errors-container="#invalid-feedback" class="select modifiable" data-name="regions"  name="regions[]" required
                                                                aria-label=".form-select-lg">
                                                            <?php if(isset($regions)): ?>
                                                                <?php $__currentLoopData = $regions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $region): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e(((object)$region)->id); ?>"><?php echo e(((object)$region)->description); ?></option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <?php endif; ?>
                                                        </select>
                                                    <span class="feedback-new" id="invalid-feedback2" role="alert"></span>
                                                    <?php $__errorArgs = ['region'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="description" class="col-md-2 col-form-label text-md-end">Départements</label>
                                                    <div class="col-md-10">
                                                        <select multiple id="geographical_zone-department" data-parsley-errors-container="#invalid-feedback" class="select modifiable"  data-name="departments" name="departments[]" required
                                                                aria-label=".form-select-lg">
                                                            <?php if(isset($departments)): ?>
                                                                <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e(((object)$department)->id); ?>"><?php echo e(((object)$department)->description); ?></option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <?php endif; ?>
                                                        </select>
                                                    <span class="feedback-new" id="invalid-feedback3" role="alert"></span>
                                                    <?php $__errorArgs = ['department'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="description" class="col-md-2 col-form-label text-md-end">Arrondissements</label>
                                                    <div class="col-md-10">
                                                        <select multiple id="geographical_zone-arrondissement" data-parsley-errors-container="#invalid-feedback" class="select modifiable"  data-name="arrondissements" name="arrondissements[]" required
                                                                aria-label=".form-select-lg">
                                                            <?php if(isset($arrondissements)): ?>
                                                                <?php $__currentLoopData = $arrondissements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arrondissement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e(((object)$arrondissement)->id); ?>"><?php echo e(((object)$arrondissement)->description); ?></option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <?php endif; ?>
                                                        </select>
                                                    <span class="feedback-new" id="invalid-feedback4" role="alert"></span>
                                                    <?php $__errorArgs = ['arrondissement'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="commune" class="col-md-2 col-form-label text-md-end">Communes</label>
                                                    <div class="col-md-10">
                                                        <select multiple id="geographical_zone-commune" data-parsley-errors-container="#invalid-feedback" class="select modifiable"  data-name="communes" name="communes[]" required
                                                                aria-label=".form-select-lg">
                                                            <?php if(isset($communes)): ?>
                                                                <?php $__currentLoopData = $communes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $commune): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e(((object)$commune)->id); ?>" <?php echo e(old('communes') == ((object)$commune)->description ? 'selected' : ''); ?>><?php echo e(((object)$commune)->description); ?></option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <?php endif; ?>
                                                        </select>
                                                    <span class="feedback-new" id="invalid-feedback5" role="alert"></span>
                                                    <?php $__errorArgs = ['commune'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="description" class="col-md-2 col-form-label text-md-end">Centres</label>
                                                    <div class="col-md-10">
                                                        <select multiple id="geographical_zone-centre" data-parsley-errors-container="#invalid-feedback" class="select modifiable"  data-name="centre" name="centre[]" required
                                                                aria-label=".form-select-lg">
                                                            <?php if(isset($centre)): ?>
                                                                <?php $__currentLoopData = $centre; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e(((object)$item)->id); ?>"><?php echo e(((object)$item)->description); ?></option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <?php endif; ?>
                                                        </select>
                                                    <span class="feedback-new" id="invalid-feedback6" role="alert"></span>
                                                    <?php $__errorArgs = ['centre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong><?php echo e($message); ?></strong>
                                                        </span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="email" class="col-md-2 col-form-label text-md-end">E-mail</label>
                                            <div class="col-md-10">
                                                <input id="email" type="email" class="form-control " name="email"
                                                    value="<?php echo e(old('email')); ?>" required autocomplete="email">
                                                <?php if($errors->has('email')): ?>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="role" class="col-md-2 col-form-label text-md-end">User Role</label>
                                            <div class="col-md-10">
                                                <select multiple class="select modifiable"  name="role[]" required
                                                    aria-label=".form-select-lg">
                                                    <option value="2">Administration</option>
                                                    <option value="3">Naissance</option>
                                                    <option value="4">Mariage</option>
                                                    <option value="5">Décès</option>
                                                    <option value="6">Certificat De</option>
                                                    <option value="7">Rapports</option>
                                                    <option value="8">Tableau de Bord</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="password" class="col-md-2 col-form-label text-md-end">Mot de
                                                passe</label>

                                            <div class="col-md-10">
                                                <input id="password" type="password" class="form-control " name="password"
                                                    required autocomplete="new-password">
                                                <?php if($errors->has('password')): ?>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="password-confirm"
                                                class="col-md-2 col-form-label text-md-end">Confirmer
                                                Mot de passe</label>

                                            <div class="col-md-10">
                                                <input id="password-confirm" type="password" class="form-control"
                                                    name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-primary px-4"
                                                onclick="return confirm('Are you sure you want to submit this form?')">
                                                Créer un compte pour l'utilisateur
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hephhay/Documents/web/Birth/resources/views/users/create.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="d-flex align-items-center">
                        <h5 class="page-title">Dashboard</h5>
                        <ul class="breadcrumb ml-2">
                            <li class="breadcrumb-item active"><a href="<?php echo e(route('naissance.registre.create')); ?>" class="text-primary">Registre des Naissances</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" data-user="<?php echo e(Auth()->user()[ 'email']); ?>" data-conn="<?php echo e($link); ?>">
            <div class="col-4">
                <div class="card p-3 wizard-form">
                    <ul>
                        <li>
                            <div id="formControl">
                                <a>Naissance Registre
                                    <i id="open-menu" class="fa fa-chevron-right"></i>
                                </a>
                            </div>
                            <ul style="display: block;" id="wizard-ul">
                                <li>
                                    <p><a class="flow-control" id="wizard-navs-0" href="#">1 Zone Gérographique</a></p>
                                </li>
                                <li>
                                    <p><a id="wizard-navs-1" href="#">2 Renseignement sur l’enfant</a></p>
                                </li>
                                <li>
                                    <p><a id="wizard-navs-2" href="#">3 Renseignement sur le Père</a></p>
                                </li>
                                <li>
                                    <p><a id="wizard-navs-3" href="#">4 Renseignement de la Mère</a></p>
                                </li>
                                <li>
                                    <p><a id="wizard-navs-4" href="#">5 Renseignement sur le Déclarant</a></p>
                                </li>
                                <li>
                                    <p><a id="wizard-navs-5" href="#">6 Jugement</a></p>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-8">
                <div class="card pb-4">
                    <form method="POST" class="demo-form" action="<?php echo e(route('naissance.registre.post')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-section">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">1 Zone Gérographique</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="mb-4">
                                                <label for="geographical_zone-pay">Pays</label>
                                                <select id="geographical_zone-pay" data-parsley-errors-container="#invalid-feedback" data-live-search="true" data-name="pays" name="geographical_zone-pay" class="selectpicker w-100 serializable modifiable pb-1" required>
                                                    <option value="" selected>--</option>
                                                    <?php if(isset($pays)): ?>
                                                        <?php $__currentLoopData = $pays; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pay): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e(((object)$pay)->id); ?>"><?php echo e(((object)$pay)->description); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                </select>
                                                <span class="feedback-new" id="invalid-feedback" role="alert"></span>
                                                <?php $__errorArgs = ['pay'];
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
                                            <div class="mb-4">
                                                <label for="geographical_zone-region">Régions</label>
                                                <select id="geographical_zone-region" data-parsley-errors-container="#invalid-feedback2" data-live-search="true" data-name="regions" name="geographical_zone-region" class="selectpicker w-100 serializable modifiable" tabindex="2" required >
                                                    <option value="" selected>--</option>
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
                                            <div class="mb-4">
                                                <label for="geographical_zone-department">Départements</label>
                                                <select id="geographical_zone-department" data-parsley-errors-container="#invalid-feedback3" data-live-search="true" data-name="departments" name="geographical_zone-department" class="selectpicker w-100 serializable modifiable" tabindex="2" required >
                                                    <option value="" selected>--</option>
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
                                            <div class="mb-4">
                                                <label for="geographical_zone-arrondissement">Arrondissements</label>
                                                <select id="geographical_zone-arrondissement" data-parsley-errors-container="#invalid-feedback4" data-live-search="true" data-name="arrondissements" name="geographical_zone-arrondissement" class="selectpicker w-100 serializable modifiable" tabindex="2" required >
                                                    <option value="" selected>--</option>
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
                                            <div class="mb-4">
                                                <label for="geographical_zone-commune">Communes</label>
                                                <select id="geographical_zone-commune" data-parsley-errors-container="#invalid-feedback5" data-live-search="true" data-name="communes" name="geographical_zone-commune" class="selectpicker w-100 serializable modifiable" tabindex="2" required >
                                                    <option value="" selected>--</option>
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
                                            <div class="mb-4">
                                                <label for="geographical_zone-centre">Centres</label>
                                                <select id="geographical_zone-centre" data-parsley-errors-container="#invalid-feedback6" data-live-search="true" data-name="centre" name="geographical_zone-centre" class="selectpicker w-100 serializable" tabindex="2" required>
                                                    <option value="" selected>--</option>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-section">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">2 Renseignement sur l’enfant </h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="mb-4">
                                                <label for="child_info-date_of_decl">Date de Déclaration</label>
                                                <input id="child_info-date_of_decl" placeholder="Select date" type="date" name="child_info-date_of_decl" class="form-control serializable" data-parsley-errors-container="#invalid-feedback7" required >
                                                <span class="feedback-new" id="invalid-feedback7" role="alert"></span>
                                            </div>
                                            <div class="mb-4">
                                                <label for="child_info-decl_number">Numéro de déclaration</label>
                                                <input id="child_info-decl_number" type="text" class="form-control serializable" name="child_info-decl_number" tabindex="1" data-parsley-errors-container="#invalid-feedback8" required >
                                                <span class="feedback-new" id="invalid-feedback8" role="alert"></span>
                                                <?php if($errors->has('description')): ?>
                                                    <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('description')); ?></strong>
                                            </span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="mb-4">
                                                <label for="child_info-first_name">Prénom de l'enfant</label>
                                                <input id="child_info-first_name" type="text" class="form-control serializable" name="child_info-first_name" tabindex="2" data-parsley-errors-container="#invalid-feedback9" required >
                                                <span class="feedback-new" id="invalid-feedback9" role="alert"></span>
                                                <?php if($errors->has('description')): ?>
                                                    <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('description')); ?></strong>
                                            </span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="mb-4">
                                                <label for="child_info-last_name">Nom de famille de l'enfant</label>
                                                <input id="child_info-last_name" type="text" class="form-control serializable" name="child_info-last_name" tabindex="3" data-parsley-errors-container="#invalid-feedback10" required >
                                                <span class="feedback-new" id="invalid-feedback10" role="alert"></span>
                                                <?php if($errors->has('description')): ?>
                                                    <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('description')); ?></strong>
                                            </span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="mb-4">
                                                <label for="child_info-dob">Date de Naissance de l'enfant</label>
                                                <input id="child_info-dob" placeholder="Select date" type="date" name="child_info-dob" class="form-control serializable" tabindex="4" data-parsley-errors-container="#invalid-feedback11" required >
                                                <span class="feedback-new" id="invalid-feedback11" role="alert"></span>
                                            </div>
                                            <div class="mb-4">
                                                <label for="child_info-birth_time">Heure de Naissance</label>
                                                <input id="child_info-birth_time" placeholder="Select date" type="time" name="child_info-birth_time" class="form-control serializable" tabindex="5" data-parsley-errors-container="#invalid-feedback12" required >
                                                <span class="feedback-new" id="invalid-feedback12" role="alert"></span>
                                            </div>
                                            <div class="mb-4">
                                                <label for="child_info-place_of_birth">Lieu de Naissance</label>
                                                <input id="child_info-place_of_birth" type="text" class="form-control serializable" name="child_info-place_of_birth" tabindex="3" data-parsley-errors-container="#invalid-feedback10" required >
                                                <span class="feedback-new" id="invalid-feedback10" role="alert"></span>
                                                <?php if($errors->has('description')): ?>
                                                    <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('description')); ?></strong>
                                            </span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="mb-4">
                                                <label for="child_info-gender">Sexe</label>
                                                <select id="child_info-gender" data-live-search="true" name="child_info-gender" class="selectpicker w-100 serializable" tabindex="6" data-parsley-errors-container="#invalid-feedback13" required >
                                                    <option value>--</option>
                                                    <option value="Masculin">Masculin</option>
                                                    <option value="Féminin">Féminin</option>
                                                </select>
                                                <span class="feedback-new" id="invalid-feedback13" role="alert"></span>
                                            </div>
                                            <div class="mb-4">
                                                <label for="child_info-health_training">Formation sanitaire</label>
                                                <input id="child_info-health_training" type="text" class="form-control serializable" name="child_info-health_training" tabindex="7" data-parsley-errors-container="#invalid-feedback15">
                                                <span class="feedback-new" id="invalid-feedback15" role="alert"></span>
                                                <?php if($errors->has('description')): ?>
                                                    <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('description')); ?></strong>
                                            </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-section">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">3 Renseignement sur le Père</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="row mb-4">
                                                <label for="father_info-country">Prénom du Père</label>
                                                <input id="father_info-country" type="text" class="form-control serializable" name="father_info-country" tabindex="1" data-parsley-errors-container="#invalid-feedback16" required >
                                                <span class="feedback-new" id="invalid-feedback16" role="alert"></span>
                                                <?php if($errors->has('description')): ?>
                                                    <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('description')); ?></strong>
                                            </span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="father_info-region">Nom de famille du Père</label>
                                                <input id="father_info-region" type="text" class="form-control serializable" name="father_info-region" tabindex="2" data-parsley-errors-container="#invalid-feedback17" required >
                                                <span class="feedback-new" id="invalid-feedback17" role="alert"></span>
                                                <?php if($errors->has('description')): ?>
                                                    <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('description')); ?></strong>
                                            </span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="father_info-department">
                                                    Date de Naissance du Père</label>
                                                <input id="father_info-department" placeholder="Select date" type="date" name="father_info-department" class="form-control serializable" tabindex="3" data-parsley-errors-container="#invalid-feedback18" required >
                                                <span class="feedback-new" id="invalid-feedback18" role="alert"></span>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="father_info-borough">Lieu de Naissance du Père</label>
                                                <input id="father_info-borough" type="text" class="form-control serializable" name="father_info-borough" tabindex="4" data-parsley-errors-container="#invalid-feedback19" required >
                                                <span class="feedback-new" id="invalid-feedback19" role="alert"></span>
                                                <?php if($errors->has('description')): ?>
                                                    <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('description')); ?></strong>
                                            </span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="father_info-communes">Profession du Père</label>
                                                <input id="father_info-communes" type="text" class="form-control serializable" name="father_info-communes" tabindex="5" data-parsley-errors-container="#invalid-feedback20" required >
                                                <span class="feedback-new" id="invalid-feedback20" role="alert"></span>
                                                <?php if($errors->has('description')): ?>
                                                    <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('description')); ?></strong>
                                            </span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="father_info-center">Addresse du Père</label>
                                                <input id="father_info-center" type="text" class="form-control serializable" name="father_info-center" tabindex="6" data-parsley-errors-container="#invalid-feedback21" required >
                                                <span class="feedback-new" id="invalid-feedback21" role="alert"></span>
                                                <?php if($errors->has('description')): ?>
                                                    <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('description')); ?></strong>
                                            </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-section">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">4 Renseignement de la Mère</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="row mb-4">
                                                <label for="mother_info-first_name">Prénom de la Mère</label>
                                                <input id="mother_info-first_name" type="text" class="form-control serializable" name="mother_info-first_name" tabindex="1" data-parsley-errors-container="#invalid-feedback22" required >
                                                <span class="feedback-new" id="invalid-feedback22" role="alert"></span>
                                                <?php if($errors->has('description')): ?>
                                                    <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('description')); ?></strong>
                                            </span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="mother_info-family_name">Nom de famille de la Mère</label>
                                                <input id="mother_info-family_name" type="text" class="form-control serializable" name="mother_info-family_name" tabindex="2" data-parsley-errors-container="#invalid-feedback23" required >
                                                <span class="feedback-new" id="invalid-feedback23" role="alert"></span>
                                                <?php if($errors->has('description')): ?>
                                                    <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('description')); ?></strong>
                                            </span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="mother_info-dob">Date de Naissance de la Mère</label>
                                                <input id="mother_info-dob" placeholder="Select date" type="date" name="mother_info-dob" class="form-control serializable" tabindex="3" data-parsley-errors-container="#invalid-feedback24" required >
                                                <span class="feedback-new" id="invalid-feedback24" role="alert"></span>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="mother_info-birth_place">Lieu de Naissance de la Mère</label>
                                                <input id="mother_info-birth_place" type="text" class="form-control serializable" name="mother_info-birth_place" tabindex="4" data-parsley-errors-container="#invalid-feedback25" required >
                                                <span class="feedback-new" id="invalid-feedback25" role="alert"></span>
                                                <?php if($errors->has('description')): ?>
                                                    <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('description')); ?></strong>
                                            </span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="mother_info-occupation">Profession de la Mère</label>
                                                <input id="mother_info-occupation" type="text" class="form-control serializable" name="mother_info-occupation" tabindex="5" data-parsley-errors-container="#invalid-feedback26" required >
                                                <span class="feedback-new" id="invalid-feedback26" role="alert"></span>
                                                <?php if($errors->has('description')): ?>
                                                    <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('description')); ?></strong>
                                            </span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="mother_info-address">Addresse de la Mère</label>
                                                <input id="mother_info-address" type="text" class="form-control serializable" name="mother_info-address" tabindex="6" data-parsley-errors-container="#invalid-feedback27" required >
                                                <span class="feedback-new" id="invalid-feedback27" role="alert"></span>
                                                <?php if($errors->has('description')): ?>
                                                    <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('description')); ?></strong>
                                            </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-section">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">5 Renseignement sur le Déclarant</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="row mb-3">
                                                <label for="declarant_info-first_name">Prénom du déclarant</label>
                                                <input id="declarant_info-first_name" type="text" class="form-control serializable" name="declarant_info-first_name" tabindex="1" data-parsley-errors-container="#invalid-feedback29" required >
                                                <span class="feedback-new" id="invalid-feedback29" role="alert"></span>
                                                <?php if($errors->has('description')): ?>
                                                    <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('description')); ?></strong>
                                            </span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="declarant_info-last_name">Nom du déclarant</label>
                                                <input id="declarant_info-last_name" type="text" class="form-control serializable" name="declarant_info-last_name" tabindex="2" data-parsley-errors-container="#invalid-feedback30" required >
                                                <span class="feedback-new" id="invalid-feedback30" role="alert"></span>
                                                <?php if($errors->has('description')): ?>
                                                    <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('description')); ?></strong>
                                            </span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="declarant_info-address">Adresse du déclarant </label>
                                                <input id="declarant_info-address" type="text" class="form-control serializable" name="declarant_info-address" tabindex="3" data-parsley-errors-container="#invalid-feedback31" required >
                                                <span class="feedback-new" id="invalid-feedback31" role="alert"></span>
                                                <?php if($errors->has('description')): ?>
                                                    <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('description')); ?></strong>
                                            </span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="declarant_info-profession" class="required">Profession du déclarant </label>
                                                <input id="declarant_info-profession" type="text" class="form-control" name="declarant_info-profession" tabindex="5" data-parsley-errors-container="#invalid-feedback32" required >
                                                <span class="feedback-new" id="invalid-feedback32" role="alert"></span>
                                                <?php if($errors->has('description')): ?>
                                                    <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('description')); ?></strong>
                                            </span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="declarant_info-cin" class="required">C.I.N</label>
                                                <input id="declarant_info-cin" type="number" class="form-control" name="declarant_info-cin" tabindex="5" data-parsley-errors-container="#invalid-feedback32" required >
                                                <span class="feedback-new" id="invalid-feedback32" role="alert"></span>
                                                <?php if($errors->has('description')): ?>
                                                    <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('description')); ?></strong>
                                            </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-section current">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">6 Jugement</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="row mb-3">
                                                <label for="judgement-judgement">Jugement</label>
                                                <select id="judgement-judgement" data-live-search="true" name="judgement-judgement" class="selectpicker w-100 serializable"   tabindex="1" data-parsley-errors-container="#invalid-feedback40"  required >
                                                    <option value="" selected>---</option>
                                                    <option value="Oui">Oui</option>
                                                    <option value="Non">Non</option>
                                                </select>
                                                <span class="feedback-new" id="invalid-feedback40" role="alert"></span>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="judgement-date">Date du jugement</label>
                                                <input id="judgement-date" placeholder="Select date" name="judgement-date" type="date" class="form-control serializable removable"   tabindex="2" data-parsley-errors-container="#invalid-feedback36"  required >
                                                <span class="feedback-new" id="invalid-feedback36" role="alert"></span>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="judgement-number">Numéro du jugement</label>
                                                <input id="judgement-number" type="text" class="form-control serializable removable" name="judgement-number"   tabindex="3" data-parsley-errors-container="#invalid-feedback38"  required >
                                                <span class="feedback-new" id="invalid-feedback38" role="alert"></span>
                                                <?php if($errors->has('description')): ?>
                                                    <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('description')); ?></strong>
                                            </span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="judgment-region">Régions</label>
                                                <?php if(isset($regions)): ?>
                                                    <select id="judgment-region" data-live-search="true" name="judgment-region" class="selectpicker w-100 serializable removable" tabindex="4" data-parsley-errors-container="#invalid-feedback46" required >
                                                        <?php if(count($regions) == 1): ?>
                                                            <option value="<?php echo e(((object)$regions[0])->description); ?>"><?php echo e(((object)$regions[0])->description); ?></option>
                                                        <?php else: ?>
                                                            <option value="" selected>--</option>
                                                            <?php $__currentLoopData = $regions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e(((object)$item)->description); ?>">
                                                                    <?php echo e(((object)$item)->description); ?>

                                                                </option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <?php endif; ?>
                                                    </select>
                                                    <span class="feedback-new" id="invalid-feedback46" role="alert"></span>
                                                    <?php if($errors->has('regions')): ?>
                                                        <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('regions')); ?></strong>
                                            </span>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="judgement-annotations">Mentions Marginales</label>
                                                <input id="judgement-annotations" type="text" class="form-control serializable removable" name="judgement-annotations" required  tabindex="5" data-parsley-errors-container="#invalid-feedback39">
                                                <span class="feedback-new" id="invalid-feedback39" role="alert"></span>
                                                <?php if($errors->has('description')): ?>
                                                    <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('description')); ?></strong>
                                            </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-navigation float-right mr-4" id="new">
                            <button type="button" class="previous btn btn-primary p-2 pr-3 pl-3 mr-3"> Précédente</button>
                            <button type="button" class="next btn btn-primary p-2 pr-3 pl-3">Sauvegarder </button>
                            <button type="button" class="next btn btn-primary ml-2 p-2 pr-3 pl-3">Sauver et Continuer </button>
                            <input type="submit" class="btn btn-primary ml-2 p-2 pr-3 pl-3 pull-right" value="Sauver et Sortir">
                            <span class="clearfix"></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hephhay/Documents/web/Birth/resources/views/naissance/registre/create.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><-- TABLEAU DE BORD</a></li>
                <li class="breadcrumb-item active" aria-current="page">Modification</li>
              </ol>
        </nav>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center;">MODIFICATION DE <?php echo e($certifupdate->nom); ?> </div>

                <div class="panel-body">
                  <form id="form_validation" method="POST" action="<?php echo e(route('certif.update',$certifupdate->id)); ?>">
                                 <?php echo e(csrf_field()); ?>

                                  <?php echo e(method_field('PUT')); ?>


                                <div class="form-group form-float" class="form-group<?php echo e($errors->has('nom') ? ' has-error' : ''); ?>">
                                    <div class="form-line">
                                       <label class="form-label">Nom </label>
                                        <input type="text" class="form-control" name="nom" value="<?php echo e($certifupdate->nom); ?>" required>
                                       
                                          <?php if($errors->has('nom')): ?>
                                    <span class="help-block" style="color: red;">
                                        <strong><?php echo e($errors->first('nom')); ?></strong>
                                    </span>
                                <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group form-float" class="form-group<?php echo e($errors->has('prenom') ? ' has-error' : ''); ?>">
                                    <div class="form-line">
                                      <label class="form-label">Prénom</label>
                                        <input type="text" class="form-control" name="prenom" value="<?php echo e($certifupdate->prenom); ?>" required>
                                        
                                          <?php if($errors->has('prenom')): ?>
                                          <span class="help-block"style="color: red;">
                                             <strong><?php echo e($errors->first('prenom')); ?></strong>
                                          </span>
                                          <?php endif; ?>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                <div class="col-sm-6">
                                     <label class="form-label">Sexe </label>
                                    <select class="form-control show-tick" name="sexe" required>
                                        <option value="<?php echo e($certifupdate->sexe); ?>"><?php echo e($certifupdate->sexe); ?></option>
                                        <option value="Masculin">Masculin</option>
                                        <option value="Féminin">Féminin</option>
                                       
                                    </select>
                                </div>
                                </div>
                                <div class="form-group form-float" class="form-group<?php echo e($errors->has('categorie') ? ' has-error' : ''); ?>">
                                    <div class="form-line">
                                        <label class="form-label">Catégorie</label>
                                        <input type="text" class="form-control" name="categorie"  value="<?php echo e($certifupdate->categorie); ?>" required>
                                        
                                         <?php if($errors->has('categorie')): ?>
                                            <span class="help-block"style="color: red;">
                                                <strong><?php echo e($errors->first('categorie')); ?></strong>
                                            </span>
                                         <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group form-float" class="form-group<?php echo e($errors->has('club') ? ' has-error' : ''); ?>">
                                    <div class="form-line">
                                      <label class="form-label">Nom du club</label>
                                        <input type="text" class="form-control" name="club"  value="<?php echo e($certifupdate->club); ?>" required>
                                        
                                         <?php if($errors->has('club')): ?>
                                            <span class="help-block" style="color: red;">
                                                <strong><?php echo e($errors->first('club')); ?></strong>
                                            </span>
                                         <?php endif; ?>
                                    </div>
                                </div>
                                 <div class="form-group form-float" class="form-group<?php echo e($errors->has('assurance') ? ' has-error' : ''); ?>">
                                    <div class="form-line">
                                       <label class="form-label">Nom de l'Assurance</label>
                                        <input type="text" class="form-control" name="assurance"  value="<?php echo e($certifupdate->assurance); ?>" required>
                                       
                                         <?php if($errors->has('assurance')): ?>
                                            <span class="help-block"style="color: red;">
                                                <strong><?php echo e($errors->first('assurance')); ?></strong>
                                            </span>
                                         <?php endif; ?>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                <div class="col-sm-6">
                                     <label class="form-label">Group sanguin</label>
                                    <select class="form-control show-tick" name="sang" >
                                        <option value="<?php echo e($certifupdate->sang); ?>"><?php echo e($certifupdate->sang); ?></option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                         <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="O+">O+</option>
                                         <option value="O-">O-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                       
                                    </select>
                                </div>
                                </div>
                                <div class="row clearfix">
                                <div class="col-sm-6">
                                   <label class="form-label">La visite médicale est elle à jour?</label>
                                 <select class="form-control show-tick" name="medical"
                                  required>
                                        <option value="<?php echo e($certifupdate->medical); ?>"><?php echo e($certifupdate->medical); ?></option>
                                        <option value="OUI">OUI</option>
                                        <option value="NON">NON</option>
                                       
                                    </select>
                                </div>
                                </div>
                                 <div class="form-group form-float" class="form-group<?php echo e($errors->has('tel') ? ' has-error' : ''); ?>">
                                    <div class="form-line">
                                      <label class="form-label">Téléphone</label>
                                        <input type="tel" class="form-control" name="tel"  value="<?php echo e($certifupdate->tel); ?>" required>
                                        
                                         <?php if($errors->has('tel')): ?>
                                            <span class="help-block"style="color: red;">
                                                <strong><?php echo e($errors->first('tel')); ?></strong>
                                            </span>
                                         <?php endif; ?>
                                    </div>
                                </div>
                                   <div class="form-group form-float" class="form-group<?php echo e($errors->has('licence') ? ' has-error' : ''); ?>">
                                    <div class="form-line">
                                        <label class="form-label">Numéro de Licence</label>
                                        <input type="text" class="form-control" name="licence"  value="<?php echo e($certifupdate->licence); ?>" required>
                                        
                                         <?php if($errors->has('licence')): ?>
                                            <span class="help-block"style="color: red;">
                                                <strong><?php echo e($errors->first('licence')); ?></strong>
                                            </span>
                                         <?php endif; ?>
                                    </div>
                                    </div>
                                    
                                     <div style="display:inline;text-align: center;">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-3" >
                                      
                                        <div class="input-group"style="display:inline-block;text-align: center;">
                                            
                                         Date de validité
                                         
                                                <input type="text" class="form-control date" name="date_valide" value="<?php echo e($certifupdate->date_valide); ?>">
                                            </div>
                                             
                                        </div>
                                    </div>
                            </div>
                           
                        </div>
                                
                                
                                
                            <div style="text-align: center;">
                               
                                <button class="btn btn-primary waves-effect" type="submit">METTRE A JOUR</button>
                            </div>
                            </form>
                            
                
          
       </div>
      </div>
      </div>
   </div>
    </div>
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
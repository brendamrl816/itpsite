<?php $__env->startSection('title', 'Admin'); ?>

<?php $__env->startSection('content'); ?>



    <?php if(Auth::guard('admin')->check()): ?>
        
        <div class="adminBody">
            <div class="adminBody-background"></div>
        </div>
        
        <div class="adminBody-content">
            <div><a class="logOutButton" href="admin/logout"><span>Logout</span></a></div>
             <br>
            <div class="adminList" ng-include="admin.template"></div>
        </div>
             
        
        
            
         
        <!--<ng-view></ng-view>-->
        
    <?php else: ?>
        
        
        
        <div class="adminBody">
            <div class="adminBody-background"></div>
        </div>
        
        <div class="container">
    
                 <?php if(session('status')): ?>
                    <div>
                        <?php echo e(session('status')); ?>

                    </div>
                <?php endif; ?>
                    
                    <div class="container-wrapper">
                        
                        <div class="adminHeader">ADMIN LOGIN</div>
                        
                        <form class="form" role="form" method="POST" action="<?php echo e(route('admin.login.submit')); ?>">
                            <?php echo e(csrf_field()); ?>

    
                            <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                <!--<label for="email" class="col-md-4 control-label">E-Mail Address</label>-->
                                    
                                    <?php if($errors->has('email')): ?>
                                        <div class="error-block">
                                            <strong><?php echo e($errors->first('email')); ?></strong>
                                        </div>
                                    <?php endif; ?>
                                    <input id="email" type="email" class="form-control" name="email" placeholder="EMAIL" value="<?php echo e(old('email')); ?>" required autofocus>
    
                                    
                                
                            </div>
    
                            <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                <!--<label for="password" class="col-md-4 control-label">Password</label>-->
    
                                    <?php if($errors->has('password')): ?>
                                        <div class="error-block">
                                            <strong><?php echo e($errors->first('password')); ?></strong>
                                        </div>
                                    <?php endif; ?>
                                    <input id="password" type="password" class="form-control" placeholder="PASSWORD" name="password" required>
    
                                    
                                
                            </div>
    
                            
                               
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Remember Me
                                </label>
                            </div>
                               
     
                            <button class="loginButton" type="submit">
                                Login
                            </button>
    
                        </form>
                    </div>
                        
  
        </div>

    <?php endif; ?>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
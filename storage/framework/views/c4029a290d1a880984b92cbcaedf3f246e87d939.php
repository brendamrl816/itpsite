<?php $__env->startSection('title', 'Admin'); ?>

<?php $__env->startSection('content'); ?>

            <div>
            <?php if(session('status')): ?>
                                <div>
                                    <?php echo e(session('status')); ?>

                                </div>
            <?php endif; ?>
        </div>
                            
                            
        <div>You're inside the admin Page... yayyy!!!!!!</div>
    
    
        <div><a href="admin/logout"><span>Logout</span></a></div>
    
   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
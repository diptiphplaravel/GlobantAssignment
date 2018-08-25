<?php $__env->startSection('content'); ?>

<body class="login-body">
 <div class="container">

   
        
            
                
               
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <form class="form-signin" method="POST" action="<?php echo e(route('password.email')); ?>">
                        <?php echo e(csrf_field()); ?>


                       <div class="form-signin-heading text-center"> 
                         <h1 class="sign-title">Reset Password</h1>
                         
					   </div> 
                        
                       <div class="login-wrap"> 
                        
                           <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
	                           
	                            <input id="email" type="email" class="form-control" placeholder="Enter Email ID" name="email" value="<?php echo e(old('email')); ?>" required>
	
	                                <?php if($errors->has('email')): ?>
	                                    <span class="help-block">
	                                        <strong><?php echo e($errors->first('email')); ?></strong>
	                                    </span>
	                                <?php endif; ?>
	                           
	                        </div>
                          
                            <div class="form-group">
	                           <button type="submit" class="btn btn-primary btn-lg btn-block">Send Password Reset Link </button>
	                        </div>
                          
                       </div> 
                        
                        
                        
                    </form>
                
            
        
   
</div>
</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
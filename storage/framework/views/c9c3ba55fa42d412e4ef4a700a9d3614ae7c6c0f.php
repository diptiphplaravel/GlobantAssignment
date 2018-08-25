<?php $__env->startSection('content'); ?>

<body class="login-body">
<div class="container">
   
      
                    <form class="form-signin" method="POST" action="<?php echo e(route('password.request')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-signin-heading text-center">
							<h1 class="sign-title">Reset Password</h1>
							
							 <?php if(session('status')): ?>
					              <div class="alert alert-success">
					                  <?php echo e(session('status')); ?>

					               </div>
					        <?php endif; ?>
				        </div>
	                    
	                    <div class="login-wrap">
	                        <input type="hidden" name="token" value="<?php echo e($token); ?>">
	                        
	                         <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
	                            
	                              <input id="email" type="email" class="form-control" name="email" value="<?php echo e(isset($email) ? $email : old('email')); ?>" required autofocus placeholder="Enter Your Email Address">
	
	                                <?php if($errors->has('email')): ?>
	                                    <span class="help-block">
	                                        <strong><?php echo e($errors->first('email')); ?></strong>
	                                    </span>
	                                <?php endif; ?>
	                            
	                        </div>
                            
                            <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
	                           
	                           <input id="password" type="password" class="form-control" name="password" required placeholder="Enter New Password">
	
                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
	                            
	                        </div>
                        
                            <div class="form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
	                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm New Password">

                                <?php if($errors->has('password_confirmation')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                    </span>
                                <?php endif; ?>
	                           
	                        </div>
                            
                             <div class="form-group">
	                             <button type="submit" class="btn btn-lg btn-login btn-block"> Reset Password</button>
	                         </div>
                        
                        </div>
	                    
	              </form>
               
            
        
    
   </div>
</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
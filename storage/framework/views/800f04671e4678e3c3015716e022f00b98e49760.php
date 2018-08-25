<?php $__env->startSection('content'); ?>



		
<body class="login-body">
<div class="container">
		<div class="form-signin-heading text-center">
							
							<?php if(Session::has('errormsg')): ?>
					       <div class="alert alert-danger alert-dismissable fade in col-md-4 col-md-offset-4">
		    			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
   							<?php echo e(Session::get('errormsg')); ?>

   							</div>
   							<?php endif; ?>
   		</div>
							
	<form class="form-signin change-password" method="POST" action="<?php echo e(url('changePassword')); ?>">
   <?php echo e(csrf_field()); ?>

	
							<div class="form-signin-heading text-center">
							<h1 class="sign-title">Change Password</h1>
								
								
						</div>
							<div class="login-wrap">
	                        
	                        
	                         <div class="form-group<?php echo e($errors->has('old-password') ? ' has-error' : ''); ?>">
	                            	    
	                              <input id="old_password" type="text" class="form-control" name="old_password" required autofocus placeholder="Enter Old Password">
	
	                                <?php if($errors->has('old_password')): ?>
	                                    <span class="help-block">
	                                        <strong><?php echo e($errors->first('old_password')); ?></strong>
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
	                             <button type="submit" class="btn btn-lg btn-login btn-block"> Change Password</button>
	                         </div>
                        
                        </div>
	</form>

</div>
</body>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>



<body class="login-body">

<div class="container">
<div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(Auth::check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        
                        <a href="<?php echo e(url('/register')); ?>">Register</a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
</div>
<div class="form-signin-heading text-center">

							<?php if(Session::has('successmsg')): ?>
					       <div class="alert alert-success alert-dismissable fade in col-md-4 col-md-offset-4">
		    			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
   							<?php echo e(Session::get('successmsg')); ?>

   							</div>
							<?php endif; ?>
							</div>
    
        <form class="form-signin" method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo e(csrf_field()); ?>


            <div class="form-signin-heading text-center">
				<h1 class="sign-title">&nbsp;Login Form</h1>
				
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
		           
		           <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
		                <input id="password" type="password" placeholder="Enter Password" class="form-control" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
		           </div>
		           
		           
		           
		           
		            <button type="submit" data-toggle="modal" class="btn btn-lg btn-login btn-block">Login</button>
		
		            <!--  <a href="#myModal" data-toggle="modal" class="btn btn-success"> Dialog</a> -->
		            
		            <label class="checkbox">
		            
		                <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Remember Me
		                <span class="pull-right">
		                       <a class="" href="<?php echo e(route('password.request')); ?>">
                                    Forgot Your Password?
                                </a>
		               </span>
		               
		            </label>
		
		       </div>
	        
	        
	       </form>
</div>
</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
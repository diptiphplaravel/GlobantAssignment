@extends('layouts.app')

@section('content')
	
<body class="login-body">
<div class="container">
		<div class="form-signin-heading text-center">
							
							@if (Session::has('errormsg'))
					       <div class="alert alert-danger alert-dismissable fade in col-md-4 col-md-offset-4">
		    			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
   							{{ Session::get('errormsg') }}
   							</div>
   							@endif
   		</div>
							
	<form class="form-signin change-password" method="POST" action="{{url('changePassword')}}">
   {{ csrf_field() }}
	
							<div class="form-signin-heading text-center">
							<h1 class="sign-title">Change Password</h1>
								
								
						</div>
							<div class="login-wrap">
	                        
	                        
	                         <div class="form-group{{ $errors->has('old-password') ? ' has-error' : '' }}">
	                            	    
	                              <input id="old_password" type="text" class="form-control" name="old_password" required autofocus placeholder="Enter Old Password">
	
	                                @if ($errors->has('old_password'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('old_password') }}</strong>
	                                    </span>
	                                @endif
	                            
	                        </div>
                            
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
	                           
	                           <input id="password" type="password" class="form-control" name="password" required placeholder="Enter New Password">
	
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
	                            
	                        </div>
                        
                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
	                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm New Password">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
	                           
	                        </div>
                            
                             <div class="form-group">
	                             <button type="submit" class="btn btn-lg btn-login btn-block"> Change Password</button>
	                         </div>
                        
                        </div>
	</form>

</div>
</body>

@endsection
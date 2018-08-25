@extends('layouts.app')

@section('content')

<body class="login-body">
<div class="container">
   
      
                    <form class="form-signin" method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}

                        <div class="form-signin-heading text-center">
							<h1 class="sign-title">Reset Password</h1>
							
							 @if (session('status'))
					              <div class="alert alert-success">
					                  {{ session('status') }}
					               </div>
					        @endif
				        </div>
	                    
	                    <div class="login-wrap">
	                        <input type="hidden" name="token" value="{{ $token }}">
	                        
	                         <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
	                            
	                              <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus placeholder="Enter Your Email Address">
	
	                                @if ($errors->has('email'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('email') }}</strong>
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
	                             <button type="submit" class="btn btn-lg btn-login btn-block"> Reset Password</button>
	                         </div>
                        
                        </div>
	                    
	              </form>
               
            
        
    
   </div>
</body>
@endsection

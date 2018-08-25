@extends('layouts.app')

@section('content')



<body class="login-body">

<div class="container">
<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
</div>
<div class="form-signin-heading text-center">

							@if (Session::has('successmsg'))
					       <div class="alert alert-success alert-dismissable fade in col-md-4 col-md-offset-4">
		    			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
   							{{ Session::get('successmsg') }}
   							</div>
							@endif
							</div>
    
        <form class="form-signin" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

            <div class="form-signin-heading text-center">
				<h1 class="sign-title">&nbsp;Login Form</h1>
				
	        </div>	
	         
	         <div class="login-wrap">
                   
                   <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
		               <input id="email" type="email" class="form-control" placeholder="Enter Email ID" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
		           </div>
		           
		           <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
		                <input id="password" type="password" placeholder="Enter Password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
		           </div>
		           
		           
		           
		           
		            <button type="submit" data-toggle="modal" class="btn btn-lg btn-login btn-block">Login</button>
		
		            <!--  <a href="#myModal" data-toggle="modal" class="btn btn-success"> Dialog</a> -->
		            
		            <label class="checkbox">
		            
		                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
		                <span class="pull-right">
		                       <a class="" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
		               </span>
		               
		            </label>
		
		       </div>
	        
	        
	       </form>
</div>
</body>
@endsection

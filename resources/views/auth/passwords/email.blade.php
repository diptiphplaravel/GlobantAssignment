@extends('layouts.app')

@section('content')

<body class="login-body">
 <div class="container">

   
        
            
                
               
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-signin" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                       <div class="form-signin-heading text-center"> 
                         <h1 class="sign-title">Reset Password</h1>
                         
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
                          
                            <div class="form-group">
	                           <button type="submit" class="btn btn-primary btn-lg btn-block">Send Password Reset Link </button>
	                        </div>
                          
                       </div> 
                        
                        
                        
                    </form>
                
            
        
   
</div>
</body>
@endsection

@extends('master')

@section('title', 'Admin')

@section('content')



    @if (Auth::guard('admin')->check())
        
        <div class="adminBody">
            <div class="adminBody-background"></div>
        </div>
        
        <div class="adminBody-content">
            <div><a class="logOutButton" href="admin/logout"><span>Logout</span></a></div>
             <br>
            <div class="adminList" ng-include="admin.template"></div>
        </div>
             
        
        
            
         
        <!--<ng-view></ng-view>-->
        
    @else
        
        
        
        <div class="adminBody">
            <div class="adminBody-background"></div>
        </div>
        
        <div class="container">
    
                 @if (session('status'))
                    <div>
                        {{ session('status') }}
                    </div>
                @endif
                    
                    <div class="container-wrapper">
                        
                        <div class="adminHeader">ADMIN LOGIN</div>
                        
                        <form class="form" role="form" method="POST" action="{{ route('admin.login.submit') }}">
                            {{ csrf_field() }}
    
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <!--<label for="email" class="col-md-4 control-label">E-Mail Address</label>-->
                                    
                                    @if ($errors->has('email'))
                                        <div class="error-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </div>
                                    @endif
                                    <input id="email" type="email" class="form-control" name="email" placeholder="EMAIL" value="{{ old('email') }}" required autofocus>
    
                                    
                                
                            </div>
    
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <!--<label for="password" class="col-md-4 control-label">Password</label>-->
    
                                    @if ($errors->has('password'))
                                        <div class="error-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </div>
                                    @endif
                                    <input id="password" type="password" class="form-control" placeholder="PASSWORD" name="password" required>
    
                                    
                                
                            </div>
    
                            
                               
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                               
     
                            <button class="loginButton" type="submit">
                                Login
                            </button>
    
                        </form>
                    </div>
                        
  
        </div>

    @endif
    
@endsection
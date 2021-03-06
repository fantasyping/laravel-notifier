@extends('layouts.default')
<style type="text/css">
    .navbar-header .navbar-toggle{
        display: none;
    }
</style>
@section('content')

<div class="container" style="margin-top: 80px;">
    <div class="login-signup">

        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 nav-tab-holder">
                        <ul class="nav nav-tabs row" role="tablist">
                            <li role="presentation" class="active col-sm-6" style="padding-right: 0">
                                <a href="{{ route('login') }}">Login</a>
                            </li>
                            <li role="presentation" class="col-sm-6" style="padding-left: 0">
                                <a href="{{ route('register') }}">Register</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-md-offset-3 mobile-pull">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password" class="col-md-4 control-label">Password</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control" name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="submit" class="btn submit">
                                                Login
                                            </button>
                                            <br />
                                            <br />
                                            <a class="btn-link" href="{{ route('password.request') }}">
                                                Forgot Your Password?
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
              <!-- end of row -->
            </div>
            <!-- end of home -->
        </div>
        
    </div>
</div>


@endsection
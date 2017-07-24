@extends("layouts.login")
@section("content")
    <!-- page loading spinner -->
    <div class="pageload">
        <div class="pageload-inner">
            <div class="sk-rotating-plane"></div>
        </div>
    </div>
    <!-- /page loading spinner -->
    <div class="app signup usersession">
        <div class="session-wrapper">
            <div class="page-height-o row-equal align-middle">
                <div class="column">
                    <div class="card bg-white no-border">
                        <div class="card-block">
                            <form role="form" method="post" class="form-layout" action="{{url("/register")}}">
                                {{csrf_field()}}
                                <div class="text-center m-b">
                                    <h4 class="text-uppercase">Register Now</h4>
                                    <p>Join a growing community.</p>
                                </div>
                                <div class="form-inputs">
                                    <div class="form-group{{$errors->has('username')?'has-error':''}}">
                                        <label class="text-uppercase">Choose your username</label>
                                        <input type="text" name="username" value="{{old("username")}}" class="form-control input-lg" placeholder="Username">
                                            @if($errors->has('username'))
                                                <span>
                                                    <strong>{{$errors->first('username')}}</strong>
                                                </span>
                                             @endif
                                    </div>
                                    <div class="form-group{{$errors->has('email')?'has-error':''}}">

                                            <label class="text-uppercase">Your current email address</label>
                                            <input type="email"  name="email" class="form-control input-lg" placeholder="Email address" >
                                        @if($errors->has('email'))
                                                <span>
                                                    <strong>{{$errors->first('email')}}</strong>
                                                </span>
                                        @endif

                                    </div>
                                    <div class="form-group{{$errors->has('password')?'has-error':''}}">
                                        <label class="text-uppercase">Create a password</label>
                                        <input type="password" name="password" class="form-control input-lg" placeholder="Password" >
                                        @if($errors->has('password'))
                                            <span>
                                                    <strong>{{$errors->first('password')}}</strong>
                                                </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{$errors->has('password_confirmation')?'has-error':''}}">
                                        <label class="text-uppercase">Confirm your password</label>
                                        <input type="password" name="password_confirmation" class="form-control input-lg" placeholder="Confirm password" >
                                        @if($errors->has('password_confirmation'))
                                            <span>
                                                    <strong>{{$errors->first('password_confirmation')}}</strong>
                                                </span>
                                        @endif
                                    </div>

                                </div>
                                <button class="btn btn-primary btn-block btn-lg m-b" type="submit">Create Account</button>
                                <p class="text-center"><small><em>By clicking Create account you agree to our <a href="#">terms and conditions</a></em></small>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection("content")
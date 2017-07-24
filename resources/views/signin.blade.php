@extends("layouts.login")
@section("content")
    <!-- /page loading spinner -->
    @if(session()->has('msg'))
        <div class="alert alert-success">
            <strong>{{ session()->get('msg')}}</strong>
        </div>
    @endif
    <div class="app signin usersession">
        <div class="session-wrapper">
            <div class="page-height-o row-equal align-middle">
                <div class="column">
                    <div class="card bg-white no-border">
                        <div class="card-block">
                            <form role="form" class="form-layout" method="post" action="{{url('/signin')}}">
                                {{csrf_field()}}
                                <div class="text-center m-b">
                                    <h4 class="text-uppercase">Welcome back</h4>
                                    <p>Please sign in to your account</p>
                                </div>
                                <div class="form-inputs">
                                    <div class="form-group {{$errors->has('email')?'has-error':''}}">
                                        <label class="text-uppercase">Your email address</label>
                                        <input type="email" name="email" class="form-control input-lg" placeholder="Email Address" required>
                                            @if($errors->has('email'))
                                                <span>
                                                    <strong>{{$errors->first("email")}}</strong>
                                                </span>
                                                @endif

                                    </div>
                                    <div class="form-group {{$errors->has("password" ? 'has-error':'')}}">
                                        <label class="text-uppercase">Password</label>
                                        <input type="password" name="password" class="form-control input-lg" placeholder="Password" required>
                                        @if($errors->has('password'))
                                            <span>
                                                    <strong>{{$errors->first("password")}}</strong>
                                                </span>
                                        @endif
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-block btn-lg m-b" type="submit">Login</button>
                                <div class="divider">
                                    <span>OR</span>
                                </div>
                                <a class="btn btn-block no-bg btn-lg m-b" href="{{url("/signup")}}">Signup</a>
                                <p class="text-center">
                                    <small>
                                        <em>By clicking Log in you agree to our <a href="#">terms and conditions</a></em>
                                    </small>
                                </p>
                            </form>
                        </div>
                        <a ui-sref="user.forgot" class="bottom-link" href="forgot.html">Forgotten password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection("content")


@extends('auth.layouts')
@section('title', 'Login')

@section('content')
    <section class="login_box_area section_gap my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login_box_img">
                        <img class="img-fluid" src="{{ asset('admin/images/login.jpg') }}" />
                        <div class="hover">
                            <h4>New to our website?</h4>
                            <p>
                                There are advances being made in science and technology
                                everyday, and a good example of this is the
                            </p>
                            <a class="primary-btn" href="{{ route('register') }}">Create an Account</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="login_form_inner">
                        <h3>Log in to enter</h3>
                        <form method="POST" action="{{ route('login') }}" class="row login_form">
                            @csrf
                            <div class="col-md-12 form-group">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <input type="checkbox" id="f-option2" name="selector" />
                                    <label for="f-option2">Keep me logged in</label>
                                </div>
                            </div>



                            <div class="col-md-12 form-group mb-3">
                                <button type="submit" class="primary-btn">
                                    Log In
                                </button>


                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

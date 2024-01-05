@extends('auth.layouts')
@section('title', 'Register')


{{-- @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}

@section('content')
    <section class="login_box_area section_gap my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="register_form_inner">
                        <h3 style="text-align: center">Log in to enter</h3>
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="card">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="body">
                                            <div class="row clearfix">
                                                <div class="col-md-6">
                                                    <label for="name">Full Name :</label>
                                                    <div class="form-group">
                                                        <input type="text" id="name" placeholder="Full Name"
                                                            class="form-control @error('name') is-invalid @enderror"
                                                            name="name" value="{{ old('name') }}" autofocus>
                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="email">Email Address :</label>
                                                    <div class="form-group">
                                                        <input type="email" placeholder="Enter your email"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            name="email" value="{{ old('email') }}" autofocus required>
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-md-6">
                                                    <label>Blood Group :</label>
                                                    <select id="blood_group"
                                                        class="form-control show-tick @error('blood_group') is-invalid @enderror"
                                                        name="blood_group">
                                                        <option></option>
                                                        <option>AB+ (AB Positive)</option>
                                                        <option>AB- (AB Negative)</option>
                                                        <option>A+ (A+ Positive)</option>
                                                        <option>A- (A- Negative)</option>
                                                        <option>B+ (B+ Positive)</option>
                                                        <option>B- (B- Negative)</option>
                                                        <option>O+ (O+ Positive)</option>
                                                        <option>O- (O- Negative)</option>
                                                    </select>
                                                    @error('blood_group')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Select Gender :</label>
                                                    <select id="gender"
                                                        class="form-control show-tick @error('gender') is-invalid @enderror"
                                                        name="gender">
                                                        <option></option>
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>
                                                    @error('gender')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-md-6">
                                                    <label>Select District :</label>
                                                    <select id="district_id"
                                                        class="form-control show-tick ms select2 @error('district_id') is-invalid @enderror"
                                                        name="district_id" data-placeholder="Select">
                                                        <option></option>
                                                        <option value="1">Mustard</option>
                                                        <option value="2">Ketchup</option>
                                                        <option value="3">Relish</option>
                                                    </select>
                                                    @error('district_id')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <label>Select District :</label>
                                                    <select id="thana_id"
                                                        class="form-control show-tick ms select2 @error('thana_id') is-invalid @enderror"
                                                        name="thana_id" data-placeholder="Select">
                                                        <option></option>
                                                        <option value="1">Mustard</option>
                                                        <option value="2">Ketchup</option>
                                                        <option value="3">Relish</option>
                                                    </select>
                                                    @error('thana_id')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-md-6">
                                                    <label for="blood_give">Count Of Last blood :</label>
                                                    <div class="form-group">
                                                        <input type="text" id="blood_give" placeholder="0"
                                                            class="form-control @error('blood_give') is-invalid @enderror"
                                                            name="blood_give" value="{{ old('blood_give') }}" autofocus
                                                            required>
                                                        @error('blood_give')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="plat_give">Count Of Last plagma :</label>
                                                    <div class="form-group">
                                                        <input type="text" id="plat_give" placeholder="0"
                                                            class="form-control @error('plat_give') is-invalid @enderror"
                                                            name="plat_give" value="{{ old('plat_give') }}" autofocus
                                                            required>
                                                        @error('plat_give')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-md-6">
                                                    <label for="phone">Phone :</label>
                                                    <div class="form-group">
                                                        <input id="phone" placeholder="Enter Your Phone"
                                                            class="form-control @error('phone') is-invalid @enderror"
                                                            name="phone" value="{{ old('phone') }}" autofocus required>
                                                        @error('phone')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <label for="last_time">Last Donet Blood :</label>
                                                    <div class="form-group">
                                                        <input type="date" id="last_time"
                                                            placeholder="Enter Your Phone"
                                                            class="form-control @error('last_time') is-invalid @enderror"
                                                            name="last_time" value="{{ old('last_time') }}" autofocus
                                                            required>
                                                        @error('last_time')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="profile">Profile :</label>
                                                    <input type="file"
                                                        class="dropify form-control @error('profile') is-invalid @enderror"
                                                        name="profile" value="{{ old('profile') }}">
                                                    @error('profile')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-md-6">
                                                    <label for="email_address">Password :</label>
                                                    <div class="form-group">
                                                        <input id="password" type="password"
                                                            class="form-control @error('password') is-invalid @enderror"
                                                            name="password" required autocomplete="new-password">

                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="email_address">Con Password :</label>
                                                    <div class="form-group">
                                                        <input id="password-confirm" type="password" class="form-control"
                                                            name="password_confirmation" required
                                                            autocomplete="new-password">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 login_form justify-content-center" style="margin: auto">
                                                <div class="form-group">

                                                    <button type="submit" class="primary-btn">
                                                        Register
                                                    </button>
                                                </div>
                                            </div>
                                            @if (Route::has('password.request'))
                                                <p class="text-center m-4">Not a member?
                                                    <a href="{{ route('login') }}"> Sign Up</a>
                                                </p>
                                            @endif
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection

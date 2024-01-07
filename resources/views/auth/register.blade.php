@extends('auth.layouts')
@section('title', 'Register')
@push('styles')
    <link rel="stylesheet" href="{{ asset('admin/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/dropify.min.css') }}">
    <style>

    </style>
@endpush


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
                                                        class="form-control js-example-disabled-results @error('district_id') is-invalid @enderror"
                                                        name="district_id" data-placeholder="Select">
                                                        @foreach ($districts as $district)
                                                            <option
                                                                {{ in_array($district->id, old('district_name', [])) ? 'selected' : '' }}
                                                                value="{{ $district->id }}">
                                                                {{ $district->district_name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('district_id')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <label>Select Thana :</label>

                                                    <select id="thana_id"
                                                        class="form-control js-example-disabled-results @error('thana_id') is-invalid @enderror"
                                                        name="thana_id">
                                                        <option></option>
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
                                                {{-- <div class="col-md-6">
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
                                                </div> --}}
                                                {{-- <div class="col-md-6">
                                                    <label for="profile">Profile :</label>
                                                    <input type="file"
                                                        class="dropify @error('profile') is-invalid @enderror"
                                                        name="profile" value="{{ old('profile') }}">
                                                    @error('profile')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div> --}}
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
                                                </div>
                                                <div class="col-md-6">
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


@push('script')
    <script src="{{ asset('admin/bundles/jquery.js') }}"></script>
    <script src="{{ asset('admin/js/pages/select2.min.js') }}"></script>
    <script src="{{ asset('admin/js/pages/dropify.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('select[name="district_id"]').on('change', function() {
                var district_id = $(this).val();
                if (district_id) {
                    $.ajax({
                        url: "{{ url('admin/thana/ajax') }}/" + district_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="thana_id"]').html('');
                            var d = $('select[name="thana_id"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="thana_id"]').append(
                                    '<option value="' + value.id + '">' + value
                                    .thana_name + '</option>');
                            });
                        },

                    });
                } else {
                    alert('danger');
                }
            });
        });
    </script>

    <script>
        var $disabledResults = $(".js-example-disabled-results");
        $disabledResults.select2();

        $('.dropify').dropify({
            messages: {
                'default': 'Enter Your Profile',
                'replace': 'Drag and drop or click to replace',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });
    </script>
@endpush

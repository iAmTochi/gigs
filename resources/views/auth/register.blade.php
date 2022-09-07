@extends('layouts.auth')

@section('content')
    <!-- ======================= Login Detail ======================== -->
    <section class="middle">
        <div class="container">
            <div class="row align-items-start justify-content-center">

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mfliud">
                    <div class="text-center mb-5 p-2">
                        <a class="nav-brand" href="{{ route('home') }}">
                            <img src="{{ asset('assets/img/logo.png') }}" class="logo" alt="logo" />
                        </a>
                    </div>
                    <form class="border p-3 rounded" action="{{ route('register') }}" method="post">

                        @csrf

                        <div class="row">
                            <div class="form-group col-12">
                                <label>Full Name</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Full Name">
                                <span role="alert" class="invalid-feedback">
                                        <strong>{{$errors->first('name')}}</strong>
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Email *</label>
                            <input type="text" name="email" value="{{ old('email') }}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email*">
                            <span role="alert" class="invalid-feedback">
                                        <strong>{{$errors->first('email')}}</strong>
                                </span>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Password *</label>
                                <input type="password" name="password" value="{{ old('password') }}" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password*">
                                <span role="alert" class="invalid-feedback">
                                        <strong>{{$errors->first('password')}}</strong>
                                </span>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Confirm Password *</label>
                                <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" class="form-control {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" placeholder="Confirm Password*">
                                <span role="alert" class="invalid-feedback">
                                        <strong>{{$errors->first('password_confirmation')}}</strong>
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <p>By registering your details, you agree with our Terms & Conditions, and Privacy and Cookie Policy.</p>
                        </div>

                        <div class="form-group">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="flex-1">
                                    <input id="ddd" class="checkbox-custom" name="ddd" type="checkbox">
                                    <label for="ddd" class="checkbox-custom-label">Sign me up for the Newsletter!</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-md full-width theme-bg text-light fs-md ft-medium">Create An Account</button>
                        </div>
                        <div class="form-group text-center mb-0">
                            <p class="extra">Have an Account?<a href="{{ route('login') }}" class="text-dark"> Login</a></p>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- ======================= Login End ======================== -->



@endsection

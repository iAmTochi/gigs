@extends('layouts.auth')

@section('content')
    <!-- ======================= Login Detail ======================== -->
    <section class="middle">
        <div class="container">
            <div class="row align-items-start justify-content-center">

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="text-center mb-5 p-2">
                        <a class="nav-brand" href="{{ route('home') }}">
                            <img src="{{ asset('assets/img/logo.png') }}" class="logo" alt="logo" />
                        </a>
                    </div>
                    <form class="border p-3 rounded" method="POST" action="{{ route('login') }}">
                        @if (session()->has('status'))
                            <div class="mb-4 font-medium theme-cl text-sm text-green-600">
                                {{ __('Login with your new password') }}
                            </div>
                        @endif
                        @csrf
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="text" value="{{ old('email') }}" name="email" class="form-control  @error('email') is-invalid @enderror" placeholder="Email *">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Password *</label>
                            <input type="password" name="password" class="form-control" placeholder="Password*">
{{--                            <span role="alert" class="invalid-feedback">--}}
{{--                                <strong>{{$errors->first('first_name')}}</strong>--}}
{{--                            </span>--}}
                        </div>

                        <div class="form-group">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="flex-1">
                                    <input id="dd" class="checkbox-custom" name="dd" type="checkbox">
                                    <label for="dd" class="checkbox-custom-label">Remember Me</label>
                                </div>
                                <div class="eltio_k2">
                                    <a href="{{ route('password.request') }}" class="theme-cl">Lost Your Password?</a>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-md full-width theme-bg text-light fs-md ft-medium">Login</button>
                        </div>
                        <div class="form-group text-center mb-0">
                            <p class="extra">Not a member?<a href="{{ route('register') }}" class="text-dark"> Register</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================= Login End ======================== -->
@endsection

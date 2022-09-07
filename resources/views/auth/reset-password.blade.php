
@extends('layouts.auth')

@section('content')
    <!-- ======================= Verify email Detail ======================== -->
    <section class="middle">
        <div class="container">
            <div class="row align-items-start justify-content-center">

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="text-center mb-5 p-2">
                        <a class="nav-brand" href="{{ route('home') }}">
                            <img src="{{ asset('assets/img/logo.png') }}" class="logo" alt="" />
                        </a>
                    </div>


                    <form class="border p-3 rounded" method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <!-- Password Reset Token -->
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <div class="form-group">
                            <input type="text" value="{{ old('email',$request->email) }}" name="email" class="form-control  @error('email') is-invalid @enderror" placeholder="Email *" required>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="form-group col-12">
                                <label>Password</label>
                                <input required type="password" name="password" value="{{ old('password') }}" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password*">
                                <span role="alert" class="invalid-feedback">
                                        <strong>{{$errors->first('password')}}</strong>
                                </span>
                            </div>

                            <div class="form-group col-12">
                                <label>Confirm Password</label>
                                <input required type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" class="form-control {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" placeholder="Confirm Password*">
                                <span role="alert" class="invalid-feedback">
                                        <strong>{{$errors->first('password_confirmation')}}</strong>
                                </span>
                            </div>

                            <div class="form-group col-12">
                                <button type="submit" class="btn btn-md full-width theme-bg text-light fs-md ft-medium">Reset Password</button>
                            </div>
                        </div>

                    </form>


                </div>
            </div>
        </div>
    </section>
    <!-- ======================= Verify email End ======================== -->

@endsection

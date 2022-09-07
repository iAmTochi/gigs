@extends('layouts.auth')

@section('content')

    <!-- ======================= Verify email Detail ======================== -->
    <section class="middle">
        <div class="container">
            <div class="row align-items-start justify-content-center">

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="text-center mb-5 p-2">
                        <a class="nav-brand" href="{{ route('home') }}">
                            <img src="assets/img/logo.png" class="logo" alt="" />
                        </a>
                    </div>


                    <form class="border p-3 rounded" method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="eltio_k2">
                                    <a href="#">
                                        Forgot your password? No problem. Just let us know your email address,
                                        and we will email you a password reset link that will allow you to choose a new one.
                                    </a>
                                </div>
                            </div>
                        </div>



                <div class="eltio_k2">
                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600 theme-cl">
                                {{ __('We have emailed your password reset link!') }}
                            </div>
                        @endif
                </div>
                        <div class="form-group">
                            <input type="text" value="{{ old('email') }}" name="email" class="form-control  @error('email') is-invalid @enderror" placeholder="Email *">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-md full-width theme-bg text-light fs-md ft-medium">Email Password Reset Link</button>
                        </div>
                        @if (session('status') == 'verification-link-sent')
                            <div class="mb-4 font-medium theme-cl text-sm text-green-600">
                                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                            </div>
                        @endif
                    </form>


                </div>
            </div>
        </div>
    </section>
    <!-- ======================= Verify email End ======================== -->

@endsection

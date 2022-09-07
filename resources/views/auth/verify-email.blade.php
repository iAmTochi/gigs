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
                    <form class="border p-3 rounded" method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <div class="form-group">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="eltio_k2">
                                    <a href="#">Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.</a>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-md full-width theme-bg text-light fs-md ft-medium">Resend Verification Email</button>
                        </div>
                        @if (session('status') == 'verification-link-sent')
                            <div class="mb-4 font-medium theme-cl text-sm text-green-600">
                                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                            </div>
                        @endif
                        <div class="form-group text-center mb-0">
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"
                               class="text-dark"> Logout</a>
                        </div>
                    </form>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                </div>
            </div>
        </div>
    </section>
    <!-- ======================= Verify email End ======================== -->

@endsection

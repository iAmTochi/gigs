@extends('layouts.admin')

@section('content')

    <!-- ======================= dashboard Detail ======================== -->

    <div class="dashboard-content">
        <div class="dashboard-tlbar d-block mb-5">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <h1 class="ft-medium">Hello, {{ auth()->user()->name  }}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item text-muted"><a href="#">{{  ucfirst(auth()->user()->role) }}</a></li>
                            <li class="breadcrumb-item"><a href="#" class="theme-cl">Dashboard</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="dashboard-widg-bar d-block">
            <div class="row">
                <div class="col-md-4">
                    <div class="dash-widgets py-5 px-4 bg-success rounded">
                        <h2 class="ft-medium mb-1 fs-xl text-light">{{ \App\Models\Gig::count() }}</h2>
                        <p class="p-0 m-0 text-light fs-md">No. of Gigs</p>
                        <i class="lni lni-empty-file"></i>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="dash-widgets py-5 px-4 bg-purple rounded">
                        <h2 class="ft-medium mb-1 fs-xl text-light">{{ \App\Models\Company::count()  }}</h2>
                        <p class="p-0 m-0 text-light fs-md">Company</p>
                        <i class="lni lni-users"></i>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="dash-widgets py-5 px-4 bg-danger rounded">
                        <h2 class="ft-medium mb-1 fs-xl text-light">{{ \App\Models\User::count()  }}</h2>
                        <p class="p-0 m-0 text-light fs-md">Users</p>
                        <i class="lni lni-bar-chart"></i>
                    </div>
                </div>
            </div>



        </div>

        <!-- footer -->
        <div class="row">
            <div class="col-md-12">
                <div class="py-3">© 2022 Gig.</div>
            </div>
        </div>

    </div>

@endsection




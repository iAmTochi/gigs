@extends('layouts.admin')

@section('content')
    <div class="dashboard-content">
        <div class="dashboard-tlbar d-block mb-5">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <h1 class="ft-medium">Gigs</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item text-muted"><a href="#">Gigs</a></li>
                            <li class="breadcrumb-item"><a href="#" class="theme-cl">New gig</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="dashboard-widg-bar d-block">


            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="_dashboard_content bg-white rounded mb-4">
                        <div class="_dashboard_content_header br-bottom py-3 px-3">
                            <div class="_dashboard__header_flex">
                                <h4 class="mb-0 ft-medium fs-md"><i class="ti-plus mr-1 theme-cl fs-sm"></i>Add Gig</h4>
                            </div>
                        </div>

                        <div class="_dashboard_content_body py-3 px-3">
                            <form class="row" action="{{ route('gigs.store') }}" method="post">
                                @csrf
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label  class="text-dark ft-medium">Role</label>
                                        <select name="role" id="" class="form-control">
                                            <option value="">Choose a Role</option>
                                            @foreach($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label  class="text-dark ft-medium">Company</label>
                                        <select name="company" id="" class="form-control">
                                            <option value="">Choose a Company</option>
                                            @foreach($companies as $company)
                                            <option value="{{ $company->id }}">{{ $company->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label  class="text-dark ft-medium">Location</label>
                                        <select name="country" id="" class="form-control">
                                            <option value="">Choose a Country</option>
                                            @foreach($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="text-white">.</label>
                                        <select name="role" id="" class="form-control">
                                            <option value="">Choose a State/Region</option>
                                            @foreach($states as $state)
                                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="address" class="form-control" id="" rows="2" placeholder="Address"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label  class="text-dark ft-medium">Add Tags</label>
                                        <select name="tag" id="" class="form-control">
                                            <option value="">Select tags</option>
                                            @foreach($tags as $tag)
                                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-md ft-medium text-light rounded theme-bg">Save Changes</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>


            </div>

        </div>




    <!-- footer -->
    @include('partial._admin_foot')
@endsection

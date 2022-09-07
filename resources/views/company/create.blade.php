@extends('layouts.admin')

@section('content')
    <div class="dashboard-content">
        <div class="dashboard-tlbar d-block mb-5">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <h1 class="ft-medium">Companies</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item text-muted"><a href="#">Companies</a></li>
                            <li class="breadcrumb-item"><a href="#" class="theme-cl">Add New Company</a></li>
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
                                <h4 class="mb-0 ft-medium fs-md"><i class="ti-plus mr-1 theme-cl fs-sm"></i>Add Company</h4>
                            </div>
                        </div>

                        <div class="_dashboard_content_body py-3 px-3">
                            <form class="row" action="{{ isset($company)? route('companies.update', $company->id) : route('companies.store')  }}" method="post">
                                @csrf
                                @isset($company)
                                    @method('PUT')
                                @endisset

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label  class="text-dark ft-medium">Company</label>
                                        <input type="text" value="{{ isset($company)? $company->name: old('name') }}" name="name" placeholder="Company Name" class="form-control @error('name') is-invalid @enderror">
                                        <span role="alert" class="invalid-feedback">
                                            <strong>{{$errors->first('name')}}</strong>
                                        </span>
                                    </div>

                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-md ft-medium text-light rounded theme-bg">{{ isset($company)? 'Update' : 'Add' }} Company</button>
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


        @section('scripts')

            <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>

        @endsection

        @section('styles')

            <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />

            <style>
                .select2-container--default .select2-selection--single .select2-selection__rendered {
                    color: #444;
                    line-height: 50px;
                }
                .select2-container--default .select2-selection--single .select2-selection__arrow {
                    height: 50px;
                    position: absolute;
                    top: 1px;
                    right: 1px;
                    width: 20px;
                }
                .select2-container--default .select2-selection--single {
                    background-color: #fff;
                    border: 1px solid #aaa;
                    border-radius: 0px;
                }

                .select2-container .select2-selection--single {
                    box-sizing: border-box;
                    cursor: pointer;
                    display: block;
                    height: 50px;
                    user-select: none;
                    -webkit-user-select: none;
                }
            </style>
@endsection
